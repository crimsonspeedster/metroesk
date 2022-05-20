import Swiper, {Navigation} from 'swiper';

export const partners_slider = new Swiper('.partners-slider', {
    slidesPerView: 3,
    spaceBetween: 30,
    modules: [Navigation],
    loop: true,
    navigation: {
        nextEl: ".partners-slider__btn.next",
        prevEl: ".partners-slider__btn.prev",
    },
});