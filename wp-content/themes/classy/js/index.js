import Swiper, {Navigation} from 'swiper';

console.log('index js');

const causes_img_slider = new Swiper('.causes-part__slider', {
    allowTouchMove: false,
    modules: [Navigation],
    navigation: {
        nextEl: ".causes-part__btn.next",
        prevEl: ".causes-part__btn.prev",
    },
    on: {
        slideChange: function (slider) {
            document.querySelector('.causes-description__text.active').classList.remove('active');
            document.querySelectorAll('.causes-description__text')[slider.activeIndex].classList.add('active');
        }
    }
});

document.querySelectorAll('input, textarea').forEach(item => item.addEventListener('input', function () {
    this.setAttribute('value', this.value?.trim() || '');
}));