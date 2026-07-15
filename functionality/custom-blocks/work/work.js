import './work.scss';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const initWorkBlock = () => {
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const leftCol = document.querySelector('.work-col-left');
  if (leftCol && !prefersReducedMotion) {
    gsap.fromTo(leftCol, 
      { y: 200 }, 
      { 
        y: -100, 
        ease: 'none', 
        scrollTrigger: {
          trigger: '.work-block',
          start: 'top bottom',
          end: 'bottom top',
          scrub: true
        } 
      }
    );
  }

  const rightCol = document.querySelector('.work-col-right');
  if (rightCol && !prefersReducedMotion) {
    gsap.fromTo(rightCol, 
      { y: 400 }, 
      { 
        y: -200, 
        ease: 'none', 
        scrollTrigger: {
          trigger: '.work-block',
          start: 'top bottom',
          end: 'bottom top',
          scrub: true
        } 
      }
    );
  }

  const container = document.querySelector('.work-block');
  const pixelLeft = document.querySelector('.work-pixel-left');
  const pixelRight = document.querySelector('.work-pixel-right');
  const pixelBottom = document.querySelector('.work-pixel-bottom');

  if (container && !prefersReducedMotion) {
    container.addEventListener('mousemove', (e) => {
      const rect = container.getBoundingClientRect();
      const moveX = ((e.clientX - rect.left) / rect.width) - 0.5;
      const moveY = ((e.clientY - rect.top) / rect.height) - 0.5;

      if (pixelLeft) {
        gsap.to(pixelLeft, {
          x: moveX * 50,
          y: moveY * 50,
          duration: 0.8,
          ease: 'power2.out'
        });
      }
      if (pixelRight) {
        gsap.to(pixelRight, {
          x: moveX * 70,
          y: moveY * 70,
          duration: 0.8,
          ease: 'power2.out'
        });
      }
      if (pixelBottom) {
        gsap.to(pixelBottom, {
          x: moveX * -40,
          y: moveY * -40,
          duration: 0.8,
          ease: 'power2.out'
        });
      }
    });

    container.addEventListener('mouseleave', () => {
      const pixels = [pixelLeft, pixelRight, pixelBottom];
      pixels.forEach(p => {
        if (p) {
          gsap.to(p, { x: 0, y: 0, duration: 0.8, ease: 'power2.out' });
        }
      });
    });
  }
};

if (document.readyState === 'complete' || document.readyState === 'interactive') {
  initWorkBlock();
} else {
  document.addEventListener('DOMContentLoaded', initWorkBlock);
}
