(() => {
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const toggle = document.querySelector('.menu-toggle');
  const nav = document.getElementById('site-nav');
  if (toggle && nav) {
    toggle.addEventListener('click', () => {
      const open = nav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }

  const header = document.querySelector('.site-header');
  const heroStage = document.getElementById('hero-stage');
  const scrollTrack = document.getElementById('hero-scroll-track');
  const aboutBridge = document.getElementById('about-bridge');
  let lastY = window.scrollY;

  const clamp = (n, min, max) => Math.min(max, Math.max(min, n));
  const lerp = (a, b, t) => a + (b - a) * t;

  const updateHeroPin = () => {
    if (!scrollTrack || !heroStage || !aboutBridge) return;

    const vh = window.innerHeight;
    const trackRect = scrollTrack.getBoundingClientRect();
    const bridgeRect = aboutBridge.getBoundingClientRect();

    /* 0 → 1 as about section climbs from bottom to full viewport */
    const climb = clamp(1 - bridgeRect.top / vh, 0, 1);

    /* Hide fixed hero once fully covered so page scrolls normally */
    const covered = trackRect.bottom <= 1 || bridgeRect.top <= 1;
    heroStage.classList.toggle('is-released', covered);

    if (header) {
      const overContent = bridgeRect.top <= 72;
      header.classList.toggle('is-over-content', overContent);
      header.classList.toggle('is-scrolled', window.scrollY > 24);

      if (!prefersReduced && window.scrollY > 120 && !overContent) {
        header.classList.toggle('is-hidden', window.scrollY > lastY && window.scrollY > 200);
      } else {
        header.classList.remove('is-hidden');
      }
    }

    lastY = window.scrollY;
  };

  const onHeaderScroll = () => {
    if (!header) return;
    if (!scrollTrack) {
      header.classList.toggle('is-scrolled', window.scrollY > 24);
      if (!prefersReduced && window.scrollY > 120) {
        header.classList.toggle('is-hidden', window.scrollY > lastY && window.scrollY > 200);
      } else {
        header.classList.remove('is-hidden');
      }
      lastY = window.scrollY;
    }
  };

  const onScroll = () => {
    updateHeroPin();
    onHeaderScroll();
    updateScrub();
    updateAboutVisual();
  };

  if (prefersReduced) {
    document.querySelectorAll('.reveal, .scrub-text, .hero-stagger').forEach((el) => {
      el.classList.add('is-visible', 'is-active', 'hero-stagger--play');
    });
    if (heroStage) heroStage.classList.add('is-released');
    window.addEventListener('scroll', onHeaderScroll, { passive: true });
    onHeaderScroll();
    initWorkPreview();
    return;
  }

  const scrubBlocks = document.querySelectorAll('.scrub-text');
  const updateScrub = () => {
    const vh = window.innerHeight;
    scrubBlocks.forEach((block) => {
      const rect = block.getBoundingClientRect();
      /* Reveal quickly once the block enters the lower viewport */
      const start = vh * 0.98;
      const end = vh * 0.42;
      const raw = clamp((start - rect.top) / (start - end), 0, 1);
      const t = 1 - Math.pow(1 - raw, 2.4);
      block.style.opacity = String(lerp(0.28, 1, t));
      block.style.transform = `translate3d(0, ${lerp(16, 0, t)}px, 0)`;
      block.classList.toggle('is-active', t > 0.35);
    });
  };

  const aboutVisual = document.querySelector('.about-visual');
  const updateAboutVisual = () => {
    if (!aboutVisual) return;
    const rect = aboutVisual.getBoundingClientRect();
    const vh = window.innerHeight;
    const t = clamp(1 - rect.top / (vh * 0.85), 0, 1);
    aboutVisual.style.transform = `scale(${lerp(0.92, 1, t)})`;
  };

  const counters = document.querySelectorAll('[data-count]');
  const runCounter = (el) => {
    if (el.dataset.done) return;
    const target = parseFloat(el.dataset.count);
    const suffix = el.dataset.suffix || '';
    const decimals = (String(target).split('.')[1] || '').length;
    const start = performance.now();
    const duration = 1400;
    const tick = (now) => {
      const t = clamp((now - start) / duration, 0, 1);
      const eased = 1 - Math.pow(1 - t, 3);
      const val = target * eased;
      el.textContent = (decimals ? val.toFixed(decimals) : Math.round(val)) + suffix;
      if (t < 1) requestAnimationFrame(tick);
      else el.dataset.done = '1';
    };
    requestAnimationFrame(tick);
  };

  const counterObs = new IntersectionObserver(
    (entries) => entries.forEach((e) => e.isIntersecting && runCounter(e.target)),
    { threshold: 0.4 }
  );
  counters.forEach((c) => counterObs.observe(c));

  const reveals = document.querySelectorAll('.reveal');
  const revealObs = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          revealObs.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -8% 0px' }
  );
  reveals.forEach((el) => revealObs.observe(el));

  document.querySelectorAll('.marquee__track').forEach((track) => {
    track.innerHTML += track.innerHTML;
  });

  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', onScroll, { passive: true });
  onScroll();

  document.querySelectorAll('.hero-stagger').forEach((el, i) => {
    el.style.animationDelay = `${0.15 + i * 0.09}s`;
    el.classList.add('hero-stagger--play');
  });

  initWorkPreview();

  function initWorkPreview() {
    const workItems = document.querySelectorAll('.work-item[data-img]');
    if (!workItems.length) return;
    if (window.matchMedia('(max-width: 900px)').matches) return;

    let preview = document.querySelector('.work-preview');
    if (!preview) {
      preview = document.createElement('div');
      preview.className = 'work-preview';
      preview.innerHTML = '<img alt="" decoding="async">';
      preview.setAttribute('aria-hidden', 'true');
      document.body.appendChild(preview);
    }
    const previewImg = preview.querySelector('img');

    const show = (src) => {
      previewImg.src = src;
      preview.classList.add('is-visible');
    };

    const hide = () => {
      preview.classList.remove('is-visible');
    };

    workItems.forEach((item) => {
      const src = item.getAttribute('data-img');
      if (!src) return;
      item.addEventListener('mouseenter', () => show(src));
      item.addEventListener('mouseleave', hide);
      item.addEventListener('focus', () => show(src));
      item.addEventListener('blur', hide);
    });
  }
})();
