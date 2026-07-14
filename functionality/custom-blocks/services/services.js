import './services.scss';
import { gsap } from 'gsap';

const initServicesBlock = () => {
  const container = document.querySelector('.services-block');
  if (!container) return;

  const menuContainer = container.querySelector('.services-menu');
  const menuItems = container.querySelectorAll('.services-menu-item');
  const bgLayers = container.querySelectorAll('.service-bg-layer');
  const square = container.querySelector('.hover-square');

  menuItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      const index = item.getAttribute('data-index');

      bgLayers.forEach(layer => {
        if (layer.getAttribute('data-bg-index') === index) {
          layer.classList.add('active');
        } else {
          layer.classList.remove('active');
        }
      });

      menuItems.forEach(mi => {
        if (mi === item) {
          mi.classList.add('hovered');
        } else {
          mi.classList.remove('hovered');
        }
      });

      if (square) {
        gsap.to(square, {
          opacity: 1,
          duration: 0.2,
          ease: 'power1.out'
        });
      }
    });

    item.addEventListener('mousemove', (e) => {
      if (!square || !menuContainer) return;

      const rect = menuContainer.getBoundingClientRect();
      const x = e.clientX - rect.left - 12;
      const y = e.clientY - rect.top - 12;

      gsap.to(square, {
        left: x,
        top: y,
        duration: 0.1,
        ease: 'power1.out'
      });
    });
  });

  container.addEventListener('mouseleave', () => {
    bgLayers.forEach(layer => layer.classList.remove('active'));
    menuItems.forEach(mi => mi.classList.remove('hovered'));
    if (square) {
      gsap.to(square, {
        opacity: 0,
        duration: 0.3,
        ease: 'power2.out'
      });
    }
  });
};

if (document.readyState === 'complete' || document.readyState === 'interactive') {
  initServicesBlock();
} else {
  document.addEventListener('DOMContentLoaded', initServicesBlock);
}
