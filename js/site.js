/* Tiny vanilla JS: theme toggle, mobile menu, pricing toggle, reveal on scroll. */
(function () {
    'use strict';

    var root = document.documentElement;
    root.classList.add('js');

    // ---- Dark mode ----
    var themeBtn = document.querySelector('[data-theme-toggle]');
    if (themeBtn) {
        themeBtn.addEventListener('click', function () {
            var next = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
            root.setAttribute('data-theme', next);
            try { localStorage.setItem('theme', next); } catch (e) {}
        });
    }

    // ---- Mobile menu ----
    var navBtn = document.querySelector('[data-nav-toggle]');
    var nav = document.getElementById('site-nav');
    if (navBtn && nav) {
        navBtn.addEventListener('click', function () {
            var open = nav.classList.toggle('open');
            navBtn.setAttribute('aria-expanded', String(open));
            navBtn.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        });
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && nav.classList.contains('open')) {
                nav.classList.remove('open');
                navBtn.setAttribute('aria-expanded', 'false');
                navBtn.focus();
            }
        });
    }

    // ---- Header shadow after scrolling ----
    var header = document.querySelector('[data-header]');
    if (header) {
        var onScroll = function () { header.classList.toggle('scrolled', window.scrollY > 8); };
        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });
    }

    // ---- Pricing: monthly / yearly ----
    var billingButtons = document.querySelectorAll('[data-billing]');
    if (billingButtons.length) {
        var amounts = document.querySelectorAll('.amount[data-monthly]');
        var notes = document.querySelectorAll('[data-billed]');

        billingButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var mode = button.getAttribute('data-billing');
                billingButtons.forEach(function (other) {
                    var active = other === button;
                    other.classList.toggle('active', active);
                    other.setAttribute('aria-pressed', String(active));
                });
                amounts.forEach(function (el) { el.textContent = el.getAttribute('data-' + mode); });
                notes.forEach(function (el) {
                    el.textContent = mode === 'yearly' ? 'Billed yearly' : 'Billed monthly';
                });
            });
        });
    }

    // ---- Reveal on scroll ----
    var items = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        items.forEach(function (el) { observer.observe(el); });
    } else {
        items.forEach(function (el) { el.classList.add('in'); });
    }
})();
