import './about.scss';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const initAboutBlock = () => {
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const leftCol = document.querySelector('.about-grid-col-left');
  if (leftCol && !prefersReducedMotion) {
    gsap.fromTo(leftCol, 
      { y: 900 }, 
      { 
        y: -600, 
        ease: 'none', 
        scrollTrigger: {
          trigger: '.about-block',
          start: 'top bottom',
          end: 'bottom top',
          scrub: true
        } 
      }
    );
  }

  const container = document.querySelector('.about-block');
  const pixelLeft = document.querySelector('.about-pixel-left');
  const pixelBottom = document.querySelector('.about-pixel-bottom');
  const pixelRight = document.querySelector('.about-pixel-right');

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
      if (pixelBottom) {
        gsap.to(pixelBottom, {
          x: moveX * -40,
          y: moveY * -40,
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
    });

    container.addEventListener('mouseleave', () => {
      const pixels = [pixelLeft, pixelBottom, pixelRight];
      pixels.forEach(p => {
        if (p) {
          gsap.to(p, { x: 0, y: 0, duration: 0.8, ease: 'power2.out' });
        }
      });
    });
  }

  const posts = document.querySelectorAll('.instagram-post');
  posts.forEach(post => {
    const imageWrap = post.querySelector('.post-image-wrap');
    const heartPop = post.querySelector('.about-heart-pop');
    const likeBtn = post.querySelector('.action-like');

    if (!prefersReducedMotion) {
      post.addEventListener('mousemove', (e) => {
        const rect = post.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const rotateX = (y - centerY) / 35;
        const rotateY = (centerX - x) / 35;

        gsap.to(post, {
          rotateX: rotateX,
          rotateY: rotateY,
          transformPerspective: 1000,
          duration: 0.5,
          ease: 'power2.out'
        });
      });

      post.addEventListener('mouseleave', () => {
        gsap.to(post, {
          rotateX: 0,
          rotateY: 0,
          duration: 0.5,
          ease: 'power2.out'
        });
      });
    }

    const triggerLike = (showPop = false) => {
      if (likeBtn) {
        likeBtn.classList.add('liked');
      }

      if (showPop && heartPop) {
        if (prefersReducedMotion) {
          gsap.killTweensOf(heartPop);
          gsap.set(heartPop, { scale: 1, opacity: 0.9 });
          setTimeout(() => {
            gsap.set(heartPop, { scale: 0, opacity: 0 });
          }, 800);
        } else {
          gsap.killTweensOf(heartPop);
          gsap.timeline()
            .fromTo(heartPop, 
              { scale: 0, opacity: 0 }, 
              { scale: 1, opacity: 0.9, duration: 0.25, ease: 'back.out(1.5)' }
            )
            .to(heartPop, 
              { scale: 0.8, opacity: 0, duration: 0.35, delay: 0.4, ease: 'power2.in' }
            );
        }
      }
    };

    if (imageWrap) {
      imageWrap.addEventListener('dblclick', () => {
        triggerLike(true);
      });
    }

    if (likeBtn) {
      likeBtn.addEventListener('click', () => {
        if (likeBtn.classList.contains('liked')) {
          likeBtn.classList.remove('liked');
        } else {
          triggerLike(true);
        }
      });
    }
  });
};

if (document.readyState === 'complete' || document.readyState === 'interactive') {
  initAboutBlock();
} else {
  document.addEventListener('DOMContentLoaded', initAboutBlock);
}
