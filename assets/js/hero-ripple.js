(() => {
  const canvas = document.getElementById('hero-ripple-canvas');
  const media = document.querySelector('.hero-stage__media');
  if (!canvas || !media) return;

  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const src = media.dataset.heroSrc;
  if (!src) return;

  const ctx = canvas.getContext('2d');
  const img = new Image();
  img.crossOrigin = 'anonymous';
  img.src = src;

  const ripples = [];
  let w = 0;
  let h = 0;
  let dpr = 1;
  let mouse = { x: -9999, y: -9999 };
  let raf = 0;
  let lastSpawn = 0;

  const resize = () => {
    const rect = media.getBoundingClientRect();
    dpr = Math.min(window.devicePixelRatio || 1, 2);
    w = Math.max(1, Math.floor(rect.width));
    h = Math.max(1, Math.floor(rect.height));
    canvas.width = Math.floor(w * dpr);
    canvas.height = Math.floor(h * dpr);
    canvas.style.width = `${w}px`;
    canvas.style.height = `${h}px`;
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
  };

  const spawn = (x, y, power = 1) => {
    ripples.push({
      x,
      y,
      r: 8,
      maxR: 90 + power * 70 + Math.random() * 40,
      a: 0.55 + power * 0.25,
      speed: 1.4 + power * 0.6,
    });
    if (ripples.length > 24) ripples.shift();
  };

  const drawCover = (blurPx, ox = 0, oy = 0, scale = 1) => {
    const iw = img.naturalWidth;
    const ih = img.naturalHeight;
    if (!iw || !ih) return;

    const cover = Math.max(w / iw, h / ih) * scale;
    const dw = iw * cover;
    const dh = ih * cover;
    const dx = (w - dw) / 2 + ox;
    const dy = (h - dh) / 2 + oy;

    ctx.filter = blurPx ? `blur(${blurPx}px) saturate(1.18)` : 'saturate(1.08)';
    ctx.drawImage(img, dx, dy, dw, dh);
    ctx.filter = 'none';
  };

  const tick = () => {
    if (!img.complete || !img.naturalWidth) {
      raf = requestAnimationFrame(tick);
      return;
    }

    ctx.clearRect(0, 0, w, h);
    drawCover(11);

    for (let i = ripples.length - 1; i >= 0; i -= 1) {
      const ripple = ripples[i];
      ripple.r += ripple.speed;
      ripple.a *= 0.965;

      if (ripple.a < 0.02 || ripple.r > ripple.maxR) {
        ripples.splice(i, 1);
        continue;
      }

      const t = ripple.r / ripple.maxR;
      const ring = Math.sin(t * Math.PI) * ripple.a;
      const waveX = Math.sin(ripple.r * 0.14) * ring * 10;
      const waveY = Math.cos(ripple.r * 0.11) * ring * 8;
      const scale = 1 + ring * 0.05;

      ctx.save();
      ctx.globalAlpha = Math.min(1, ripple.a * 1.35);
      ctx.beginPath();
      ctx.arc(ripple.x, ripple.y, ripple.r, 0, Math.PI * 2);
      ctx.clip();
      drawCover(0, waveX, waveY, scale);
      ctx.restore();

      ctx.save();
      ctx.globalAlpha = ring * 0.35;
      ctx.strokeStyle = 'rgba(255,255,255,0.55)';
      ctx.lineWidth = 1.2;
      ctx.beginPath();
      ctx.arc(ripple.x, ripple.y, ripple.r * 0.92, 0, Math.PI * 2);
      ctx.stroke();
      ctx.restore();
    }

    raf = requestAnimationFrame(tick);
  };

  const onMove = (e) => {
    const rect = canvas.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    mouse.x = x;
    mouse.y = y;

    const now = performance.now();
    if (now - lastSpawn < 48) return;
    lastSpawn = now;

    const dx = e.movementX || 0;
    const dy = e.movementY || 0;
    const power = Math.min(1.6, Math.hypot(dx, dy) / 12);
    if (power > 0.08) spawn(x, y, power);
  };

  const onClick = (e) => {
    const rect = canvas.getBoundingClientRect();
    spawn(e.clientX - rect.left, e.clientY - rect.top, 1.4);
  };

  img.onload = () => {
    resize();
    if (reduced) {
      drawCover(11);
      return;
    }
    cancelAnimationFrame(raf);
    raf = requestAnimationFrame(tick);
  };

  if (img.complete) img.onload();

  if (!reduced) {
    media.addEventListener('pointermove', onMove, { passive: true });
    media.addEventListener('pointerdown', onClick, { passive: true });
  }

  window.addEventListener('resize', resize, { passive: true });
  resize();

  window.mdiHeroRipple = {
    setImage(url) {
      img.src = url;
      media.dataset.heroSrc = url;
    },
  };
})();
