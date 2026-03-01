<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title><?php echo $__env->yieldContent('title', 'Lone Star Home Services'); ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Source+Serif+4:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>"/>
</head>
<body>

<div class="emergency-banner">
  <div class="emergency-inner">
    <span class="pulse"></span>
    <span style="font-family:'Oswald',sans-serif;font-weight:600;font-size:13px;letter-spacing:.08em;text-transform:uppercase;color:#fff">24/7 Emergency Services Available</span>
    <span style="color:rgba(255,255,255,.4)">·</span>
    <a href="tel:7130000000">📞 Call Now: (713) 000-0000</a>
    <span style="color:rgba(255,255,255,.4)">·</span>
    <span style="font-size:12px;color:rgba(255,255,255,.6);font-style:italic">We answer every call, including 3AM</span>
  </div>
</div>

<nav>
  <div class="nav-inner">
    <a href="<?php echo e(route('home')); ?>" class="logo">
      <div class="logo-star"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
      <div class="logo-text"><span class="logo-name">Lone Star</span><span class="logo-sub">Home Services</span></div>
    </a>
    <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="nav-links" id="nav-links">
      <a href="<?php echo e(route('electrical')); ?>" class="nav-link <?php echo e(request()->routeIs('electrical') ? 'active' : ''); ?>">⚡ Electrical</a>
      <a href="<?php echo e(route('plumbing')); ?>" class="nav-link <?php echo e(request()->routeIs('plumbing') ? 'active' : ''); ?>">💧 Plumbing</a>
      <a href="<?php echo e(route('roofing')); ?>" class="nav-link <?php echo e(request()->routeIs('roofing') ? 'active' : ''); ?>">🏠 Roofing</a>
      <a href="<?php echo e(route('about')); ?>" class="nav-link <?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">About</a>
      <a href="<?php echo e(route('contact')); ?>" class="nav-link <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>">Contact</a>
    </div>
    <div class="nav-ctas">
      <a href="<?php echo e(route('quote')); ?>" class="btn-orange">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        <span class="btn-text">Free Quote</span>
      </a>
      <a href="tel:7130000000" class="btn-green">📞 <span class="btn-text">(713) 000-0000</span></a>
    </div>
  </div>
</nav>

<?php echo $__env->yieldContent('content'); ?>

<footer>
  <div class="footer-grid">
    <div>
      <div class="footer-logo"><div class="footer-logo-star"><svg viewBox="0 0 24 24" fill="#fff"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div><span style="font-family:'Oswald',sans-serif;font-weight:700;color:#fff;font-size:18px;letter-spacing:.05em;text-transform:uppercase;display:block">Lone Star</span><span style="font-family:'Oswald',sans-serif;color:var(--orange);font-size:10px;letter-spacing:.15em;text-transform:uppercase">Home Services</span></div></div>
      <p class="footer-about">Houston's trusted electrical, plumbing, and roofing team. Licensed, insured, and bonded. Serving greater Houston for 15+ years with 500+ five-star reviews.</p>
      <div class="footer-badges"><span class="footer-badge">Licensed</span><span class="footer-badge">Insured</span><span class="footer-badge">Bonded</span><span class="footer-badge">TX Certified</span></div>
    </div>
    <div>
      <h3>Our Services</h3><div class="footer-accent"></div>
      <div class="footer-links">
        <a href="<?php echo e(route('electrical')); ?>" class="footer-link">Electrical Services</a>
        <a href="<?php echo e(route('plumbing')); ?>" class="footer-link">Plumbing Services</a>
        <a href="<?php echo e(route('roofing')); ?>" class="footer-link">Roofing Services</a>
        <a href="<?php echo e(route('quote')); ?>" class="footer-link">Get a Free Quote</a>
        <a href="<?php echo e(route('about')); ?>" class="footer-link">About Us</a>
        <a href="<?php echo e(route('contact')); ?>" class="footer-link">Contact</a>
      </div>
    </div>
    <div>
      <h3>Cities We Serve</h3><div class="footer-accent"></div>
      <div class="footer-city-grid">
        <span class="footer-city">Houston</span><span class="footer-city">Katy</span><span class="footer-city">Pearland</span><span class="footer-city">Sugar Land</span>
        <span class="footer-city">The Woodlands</span><span class="footer-city">Conroe</span><span class="footer-city">Baytown</span><span class="footer-city">Galveston</span>
        <span class="footer-city">League City</span><span class="footer-city">Friendswood</span><span class="footer-city">Spring</span><span class="footer-city">Humble</span>
        <span class="footer-city">Cypress</span><span class="footer-city">Tomball</span><span class="footer-city">Rosenberg</span><span class="footer-city">Clear Lake</span>
        <span class="footer-city">Pasadena</span><span class="footer-city">Missouri City</span><span class="footer-city">Stafford</span><span class="footer-city">Bellaire</span>
      </div>
    </div>
    <div>
      <h3>Contact Us</h3><div class="footer-accent"></div>
      <div class="footer-contact-item"><div class="footer-contact-icon" style="background:rgba(45,125,70,.15)"><svg viewBox="0 0 24 24" fill="none" stroke="#2D7D46" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 3h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 10.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 17z"/></svg></div><div><span class="footer-contact-label">Phone</span><div class="footer-contact-val"><a href="tel:7130000000">(713) 000-0000</a></div><div style="color:#555;font-size:12px">24/7 Emergency Line</div></div></div>
      <div class="footer-contact-item"><div class="footer-contact-icon" style="background:rgba(232,98,42,.15)"><svg viewBox="0 0 24 24" fill="none" stroke="#E8622A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22 6 12 13 2 6"/></svg></div><div><span class="footer-contact-label">Email</span><div class="footer-contact-val"><a href="mailto:info@lonestarhomeservices.com" style="font-size:12px">info@lonestarhomeservices.com</a></div></div></div>
      <div class="footer-contact-item"><div class="footer-contact-icon" style="background:rgba(255,255,255,.05)"><svg viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><span class="footer-contact-label">Hours</span><div class="footer-contact-val" style="color:#ccc">Mon–Sat: 7AM–7PM</div><div style="color:#C0392B;font-size:12px;font-weight:600">Emergency: 24/7</div></div></div>
    </div>
  </div>
  <div class="footer-bottom"><p>© 2025 Lone Star Home Services · Houston, TX · All rights reserved.</p><p style="color:#555;font-size:12px">Licensed · Insured · Bonded</p></div>
</footer>

<script src="<?php echo e(asset('js/image-loader.js')); ?>"></script>
<script src="<?php echo e(asset('js/main.js')); ?>"></script>
<script src="<?php echo e(asset('js/upload.js')); ?>"></script>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH /home/ahmad-fraza/lone_star/lone_star/resources/views/layouts/app.blade.php ENDPATH**/ ?>