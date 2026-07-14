import '../../css/src/index.scss';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
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
});
