import Swiper, {Navigation, Pagination, Autoplay} from 'swiper';

// configure Swiper to use modules
Swiper.use([Navigation, Pagination, Autoplay]);

let heroSlide = new Swiper('.hero__slider', {
  speed: 1500,
  grabCursor: true,
  autoplay: {
    delay: 6000,
    disableOnInteraction: true,
  },
  pagination: {
    el: '.hero__pagination',
    dynamicBullets: true,
    clickable: true,
  },
});
