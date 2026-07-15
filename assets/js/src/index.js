import '../../css/src/index.scss';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
  window.preloaderGSAP = true;
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Preloader animation
  const loader = document.getElementById('loader');
  if (loader) {
    if (prefersReducedMotion) {
      loader.style.display = 'none';
    } else {
      const tl = gsap.timeline({
        onComplete: () => {
          loader.style.display = 'none';
        }
      });

      tl.to('.loader-logo-row', {
        xPercent: -105,
        duration: 1.4,
        ease: 'power4.inOut',
        delay: 0.8
      })
      .to(loader, {
        yPercent: -100,
        duration: 1.0,
        ease: 'power4.inOut'
      }, '-=0.5');
    }
  }

  // Sticky header scroll listener (passive + throttled via requestAnimationFrame)
  const header = document.getElementById('masthead');
  let scrollTick = false;
  const handleScroll = () => {
    if (!scrollTick) {
      window.requestAnimationFrame(() => {
        if (window.scrollY > 50) {
          header?.classList.add('is-scrolled');
        } else {
          header?.classList.remove('is-scrolled');
        }
        scrollTick = false;
      });
      scrollTick = true;
    }
  };
  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  // Fullscreen menu toggling
  const fullscreenNav = document.getElementById('fullscreen-nav');
  const hamburgerBtn = document.querySelector('.hamburger-menu');
  const closeBtn = document.querySelector('.nav-close-btn');
  const overlayLinks = document.querySelectorAll('.nav-overlay-link');

  const openMenu = () => {
    fullscreenNav?.classList.add('is-active');
    hamburgerBtn?.setAttribute('aria-expanded', 'true');
    closeBtn?.setAttribute('aria-expanded', 'true');

    if (prefersReducedMotion) {
      gsap.set('.nav-overlay-link', { y: 0, opacity: 1 });
    } else {
      gsap.fromTo('.nav-overlay-link', 
        { y: 50, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.6, stagger: 0.08, ease: 'power3.out', delay: 0.1 }
      );
    }

    // Set focus to first menu link for accessibility
    const firstLink = fullscreenNav?.querySelector('.nav-overlay-link');
    if (firstLink) {
      firstLink.focus();
    }
  };

  const closeMenu = () => {
    fullscreenNav?.classList.remove('is-active');
    hamburgerBtn?.setAttribute('aria-expanded', 'false');
    closeBtn?.setAttribute('aria-expanded', 'false');
    hamburgerBtn?.focus();
  };

  hamburgerBtn?.addEventListener('click', openMenu);
  closeBtn?.addEventListener('click', closeMenu);
  overlayLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  // Escape key close listener
  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && fullscreenNav?.classList.contains('is-active')) {
      closeMenu();
    }
  });

  // Focus trap inside the navigation overlay
  fullscreenNav?.addEventListener('keydown', (e) => {
    if (e.key === 'Tab') {
      const focusable = fullscreenNav.querySelectorAll('a, button');
      if (focusable.length === 0) return;
      const first = focusable[0];
      const last = focusable[focusable.length - 1];

      if (e.shiftKey) {
        if (document.activeElement === first) {
          last.focus();
          e.preventDefault();
        }
      } else {
        if (document.activeElement === last) {
          first.focus();
          e.preventDefault();
        }
      }
    }
  });
});
