document.addEventListener('DOMContentLoaded', function () {
  // 1. Mobile navigation toggle
  var toggle = document.querySelector('.nav-toggle');
  var links = document.querySelector('.nav-links');
  var header = document.querySelector('.site-header');
  if (toggle && links) {
    toggle.addEventListener('click', function () {
      var isOpen = links.classList.toggle('open');
      toggle.setAttribute('aria-expanded', isOpen);
      if (header) header.classList.toggle('menu-open', isOpen);
      document.body.classList.toggle('menu-locked', isOpen);
    });
    links.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () {
        links.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
        if (header) header.classList.remove('menu-open');
        document.body.classList.remove('menu-locked');
      });
    });
  }

  // 2. Glassmorphic sticky header on scroll
  var header = document.querySelector('.site-header');
  if (header) {
    var checkScroll = function () {
      if (window.scrollY > 15) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', checkScroll, { passive: true });
    checkScroll();
  }

  // 3. Dynamic radar pulse rings for Hero diagram hubs
  var heroSvg = document.querySelector('.hero-diagram svg');
  if (heroSvg) {
    var hubs = [
      { cx: 60, cy: 300, delay: '0s' },
      { cx: 200, cy: 120, delay: '1.4s' }
    ];
    hubs.forEach(function (hub) {
      var pulse = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
      pulse.setAttribute('cx', hub.cx);
      pulse.setAttribute('cy', hub.cy);
      pulse.setAttribute('r', '6');
      pulse.setAttribute('fill', 'none');
      pulse.setAttribute('stroke', '#D98A2B');
      pulse.setAttribute('stroke-width', '1.5');
      pulse.setAttribute('class', 'radar-pulse');
      pulse.style.animationDelay = hub.delay;
      pulse.style.pointerEvents = 'none';
      heroSvg.insertBefore(pulse, heroSvg.firstChild);
    });
  }

  // 4. Smooth Intersection Observer for Scroll Reveals
  var revealSelectors = [
    '.reveal',
    '.reveal-up',
    '.reveal-left',
    '.reveal-right',
    '.reveal-scale',
    '.section-head',
    '.stat-strip .stat',
    '.grid > *',
    '.timeline .tl-item',
    '.checklist > li',
    '.mode-row',
    '.client-row span',
    '.quote-block',
    '.cta-band .wrap > *'
  ];

  var revealElements = document.querySelectorAll(revealSelectors.join(', '));

  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    var observer = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');

          // Trigger smooth number counter if element has numeric stat
          var statB = entry.target.tagName === 'B' ? entry.target : (entry.target.querySelector ? entry.target.querySelector('b') : null);
          if (statB && !statB.dataset.counted) {
            animateNumber(statB);
          }

          obs.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.12,
      rootMargin: '0px 0px -40px 0px'
    });

    // Intelligent stagger delay for sibling cards and items within groups
    var groupContainers = document.querySelectorAll('.stat-strip, .grid, .checklist, .client-row, .timeline');
    groupContainers.forEach(function (container) {
      var items = container.querySelectorAll('.stat, .spec-card, li, span, .tl-item');
      items.forEach(function (item, index) {
        if (!item.style.transitionDelay) {
          item.style.transitionDelay = (index * 70) + 'ms';
        }
      });
    });

    revealElements.forEach(function (el) {
      if (!el.classList.contains('reveal-left') && !el.classList.contains('reveal-right') && !el.classList.contains('reveal-scale')) {
        el.classList.add('reveal-up');
      }
      observer.observe(el);
    });
  } else {
    // Immediate display if observer is unavailable or reduced-motion is requested
    revealElements.forEach(function (el) { el.classList.add('in'); });
  }

  // 5. Smooth Number Counter Animation
  function animateNumber(el) {
    var rawText = el.innerText.trim();
    var target = parseInt(rawText, 10);
    // Only count pure numbers (e.g. 2020, 2023, 5) and avoid strings like 8LH32
    if (isNaN(target) || !/^\d+$/.test(rawText)) return;

    el.dataset.counted = 'true';
    var duration = 1200;
    // Set a sensible starting point: years count from recent past, small numbers count from 0
    var start = target > 1950 ? Math.max(0, target - 24) : 0;
    var startTime = null;

    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      var elapsed = timestamp - startTime;
      var progress = Math.min(elapsed / duration, 1);
      // Smooth quartic ease-out
      var ease = 1 - Math.pow(1 - progress, 4);
      var current = Math.round(start + (target - start) * ease);
      el.innerText = current;

      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        el.innerText = target;
      }
    }
    requestAnimationFrame(step);
  }

  // 6. Interactive Category Filter for Capabilities Page
  var filterBtns = document.querySelectorAll('.filter-btn');
  var specCards = document.querySelectorAll('#specGrid .spec-card');
  if (filterBtns.length && specCards.length) {
    filterBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        filterBtns.forEach(function (b) { b.classList.remove('active'); });
        btn.classList.add('active');
        var filter = btn.dataset.filter;
        specCards.forEach(function (card) {
          if (filter === 'all' || card.dataset.category === filter) {
            card.style.display = '';
            card.style.opacity = '0';
            card.style.transform = 'translateY(12px)';
            setTimeout(function () {
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            }, 30);
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }

  // 7. Auto-fill Contact Form from Query String (?product=...)
  var needInput = document.getElementById('need');
  if (needInput) {
    try {
      var params = new URLSearchParams(window.location.search);
      var productParam = params.get('product');
      if (productParam) {
        needInput.value = decodeURIComponent(productParam);
        needInput.style.borderColor = 'var(--amber)';
        needInput.style.boxShadow = '0 0 0 3px rgba(217,138,43,0.2)';
        var msgInput = document.getElementById('message');
        if (msgInput) {
          msgInput.placeholder = 'Inquiring regarding ' + productParam + '. Please outline your required volume, delivery destination, and timeline.';
        }
      }
    } catch (e) {}
  }

  // 8. Interactive Contact Form Submission Confirmation
  var contactForm = document.querySelector('form');
  if (contactForm && document.getElementById('name')) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var submitBtn = contactForm.querySelector('button[type="submit"]');
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerText = 'Transmitting Inquiry...';
      }

      setTimeout(function () {
        var refId = 'SEQ-' + new Date().getFullYear() + '-' + Math.floor(1000 + Math.random() * 9000);
          var capUrl = (window.sequeData && window.sequeData.capabilitiesUrl) ? window.sequeData.capabilitiesUrl : 'capabilities.html';
          contactForm.innerHTML = '<div style="background:var(--white); border:1px solid var(--amber); padding:32px; text-align:left;">' +
            '<div style="font-family:var(--font-mono); font-size:12px; color:var(--amber); margin-bottom:8px;">INQUIRY TRANSMITTED · REF #' + refId + '</div>' +
            '<h3 style="font-size:22px; color:var(--ink); margin-bottom:12px;">Thank you for contacting Seque Infratech Inc.</h3>' +
            '<p style="color:var(--grey); font-size:15px; margin-bottom:20px; line-height:1.6;">Our operations and procurement specialists will review your requirements and follow up promptly with product specifications and logistics availability.</p>' +
            '<a href="' + capUrl + '" class="btn btn-amber" style="font-size:14px; padding:10px 20px;">Explore All Products</a>' +
            '</div>';
        }, 700);
      });
    }

  // Social sidebar — reveal after 3 seconds
  var socialSidebar = document.querySelector('.social-sidebar');
  if (socialSidebar) {
    setTimeout(function () {
      socialSidebar.classList.add('visible');
    }, 3000);
  }

  // 9. Hero Video — Keep muted, pause when scrolled out of view, resume when back
  var heroVideo = document.querySelector('.hero-video');
  var heroSection = document.querySelector('.hero');
  if (heroVideo && heroSection) {
    heroVideo.muted = true;

    var updateVideoOnScroll = function () {
      var rect = heroSection.getBoundingClientRect();
      if (rect.bottom <= 80 || rect.top >= window.innerHeight) {
        if (!heroVideo.paused) {
          heroVideo.pause();
        }
      } else {
        if (heroVideo.paused) {
          heroVideo.play().catch(function () {});
        }
      }
    };

    window.addEventListener('scroll', updateVideoOnScroll, { passive: true });
    updateVideoOnScroll();
  }
});
