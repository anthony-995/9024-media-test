import '../../css/src/index.scss';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
  // Preloader animation
  const loader = document.getElementById('loader');
  if (loader) {
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

  // Sticky header scroll listener
  const header = document.getElementById('masthead');
  const handleScroll = () => {
    if (window.scrollY > 50) {
      header?.classList.add('is-scrolled');
    } else {
      header?.classList.remove('is-scrolled');
    }
  };
  window.addEventListener('scroll', handleScroll);
  handleScroll();

  // Fullscreen menu toggling
  const fullscreenNav = document.getElementById('fullscreen-nav');
  const hamburgerBtn = document.querySelector('.hamburger-menu');
  const closeBtn = document.querySelector('.nav-close-btn');
  const overlayLinks = document.querySelectorAll('.nav-overlay-link');

  const openMenu = () => {
    fullscreenNav?.classList.add('is-active');
    gsap.fromTo('.nav-overlay-link', 
      { y: 50, opacity: 0 },
      { y: 0, opacity: 1, duration: 0.6, stagger: 0.08, ease: 'power3.out', delay: 0.1 }
    );
  };

  const closeMenu = () => {
    fullscreenNav?.classList.remove('is-active');
  };

  hamburgerBtn?.addEventListener('click', openMenu);
  closeBtn?.addEventListener('click', closeMenu);
  overlayLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });
});
