import './work.scss';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const initWorkBlock = () => {
  const leftCol = document.querySelector('.work-col-left');
  if (leftCol) {
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
  if (rightCol) {
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
};

if (document.readyState === 'complete' || document.readyState === 'interactive') {
  initWorkBlock();
} else {
  document.addEventListener('DOMContentLoaded', initWorkBlock);
}
