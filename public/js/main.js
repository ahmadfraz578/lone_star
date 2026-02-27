
(function() {
  var reviews = [
    {service:"Panel Upgrade",text:"My 100-amp panel had been tripping breakers every time we ran the AC and the dishwasher at the same time. I called Lone Star on a Thursday morning and they had a crew at my Katy home by Friday afternoon. They upgraded to a 200-amp panel, pulled all the permits, scheduled the inspection — I didn't have to do a single thing. Passed inspection first try. Honestly the most professional home service crew I've ever dealt with in Houston.",name:"Marcus T.",loc:"Katy, TX · 3 months ago",init:"MT"},
    {service:"Sewer Line Repair",text:"We had a slow drain that kept getting worse no matter what we tried. Turns out it was a cracked sewer line — clay soil problem, very common in Pearland. Lone Star did a camera inspection first so we could see exactly what was broken before agreeing to any work. Three options at three price points, explained honestly. Totally transparent from start to finish.",name:"Jennifer R.",loc:"Pearland, TX · 5 months ago",init:"JR"},
    {service:"Storm Damage + Insurance",text:"After Beryl came through, I could see some lifted shingles but wasn't sure if it was bad enough to claim. Lone Star found hail damage I couldn't even see from the driveway — documented everything with photos and a written report. They filed the insurance claim for us and handled every back-and-forth with the adjuster. Got a full roof replacement covered.",name:"David K.",loc:"The Woodlands, TX · 7 months ago",init:"DK"},
    {service:"Emergency Burst Pipe",text:"Pipe burst under our kitchen sink at 10:30 at night. I called Lone Star not really expecting anyone to answer — and someone picked up on the second ring. They had a plumber at my Sugar Land house within 90 minutes. He stopped the leak, repaired the pipe, and checked the rest of our supply lines before leaving. I will never call anyone else.",name:"Sandra M.",loc:"Sugar Land, TX · 2 months ago",init:"SM"},
    {service:"EV Charger Installation",text:"Got a new Ford F-150 Lightning and needed a Level 2 charger in our garage. Lone Star came out, ran a dedicated 60-amp circuit from our panel, mounted the charger, and pulled the permit — all in one day. Price was exactly what they quoted, no surprises. Already recommended them to two neighbors in Clear Lake.",name:"Robert H.",loc:"Clear Lake, TX · 1 month ago",init:"RH"}
  ];
  var cur = 0;
  var timer;

  function updateReview(i) {
    var card = document.getElementById('review-card');
    card.style.opacity = '0';
    setTimeout(function() {
      var r = reviews[i];
      document.getElementById('r-service').textContent = r.service;
      document.getElementById('r-text').textContent = '“' + r.text + '”';
      document.getElementById('r-name').textContent = r.name;
      document.getElementById('r-loc').textContent = r.loc;
      document.getElementById('r-initials').textContent = r.init;
      document.querySelectorAll('.dot').forEach(function(d,idx) {
        d.className = idx === i ? 'dot active' : 'dot';
      });
      card.style.opacity = '1';
    }, 300);
    cur = i;
  }

  function nextReview() { updateReview((cur + 1) % reviews.length); }
  function prevReview() { updateReview((cur - 1 + reviews.length) % reviews.length); }
  function startTimer() { timer = setInterval(nextReview, 5000); }
  function stopTimer() { clearInterval(timer); }

  document.getElementById('next-review').addEventListener('click', function() { stopTimer(); nextReview(); startTimer(); });
  document.getElementById('prev-review').addEventListener('click', function() { stopTimer(); prevReview(); startTimer(); });
  document.querySelectorAll('.dot').forEach(function(d) {
    d.addEventListener('click', function() { stopTimer(); updateReview(parseInt(this.dataset.idx)); startTimer(); });
  });
  startTimer();

  // Navigation is now handled by Laravel routes, but we keep this for any remaining data-page attributes
  // that might be used for smooth scrolling or other interactions
  document.querySelectorAll('[data-page]').forEach(function(el) {
    el.addEventListener('click', function(e) {
      // If it's a link, let it navigate normally
      if (this.tagName === 'A') {
        return;
      }
      // Otherwise, prevent default and handle if needed
      e.preventDefault();
    });
  });

  document.querySelectorAll('.faq-q').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var item = this.closest('.faq-item');
      var isOpen = item.classList.contains('open');
      item.closest('.faq-list').querySelectorAll('.faq-item').forEach(function(i) { i.classList.remove('open'); });
      if (!isOpen) item.classList.add('open');
    });
  });

  document.querySelectorAll('.callback-opt').forEach(function(opt) {
    opt.addEventListener('click', function() {
      this.closest('.callback-options').querySelectorAll('.callback-opt').forEach(function(o) { o.classList.remove('selected'); });
      this.classList.add('selected');
    });
  });

  function animateCounter(el, target, decimals, duration) {
    var start = null;
    function step(ts) {
      if (!start) start = ts;
      var p = Math.min((ts - start) / duration, 1);
      var ease = 1 - Math.pow(1 - p, 4);
      el.textContent = decimals ? (ease * target).toFixed(1) : Math.round(ease * target);
      if (p < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  var counted = false;
  var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) {
      if (e.isIntersecting && !counted) {
        counted = true;
        animateCounter(document.getElementById('c1'), 500, 0, 2000);
        animateCounter(document.getElementById('c2'), 47, 0, 2000);
        animateCounter(document.getElementById('c3'), 15, 0, 2000);
        animateCounter(document.getElementById('c4'), 4.9, 1, 2000);
      }
    });
  }, {threshold: 0.3});
  var countersEl = document.querySelector('.counters-section');
  if (countersEl) obs.observe(countersEl);

  // Mobile Menu Toggle
  var mobileToggle = document.getElementById('mobile-menu-toggle');
  var navLinks = document.getElementById('nav-links');
  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', function() {
      this.classList.toggle('active');
      navLinks.classList.toggle('active');
    });
    // Close menu when clicking a link
    navLinks.querySelectorAll('.nav-link').forEach(function(link) {
      link.addEventListener('click', function() {
        mobileToggle.classList.remove('active');
        navLinks.classList.remove('active');
      });
    });
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
      if (!mobileToggle.contains(e.target) && !navLinks.contains(e.target)) {
        mobileToggle.classList.remove('active');
        navLinks.classList.remove('active');
      }
    });
  }
})();

