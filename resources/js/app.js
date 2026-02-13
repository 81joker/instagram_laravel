import './bootstrap';

import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect'
import { livewire_hot_reload } from 'virtual:livewire-hot-reload'
livewire_hot_reload();

import Swiper from 'swiper';
import { Navigation, Pagination, Scrollbar } from 'swiper/modules';

window.Alpine = Alpine;

Alpine.plugin(intersect)



// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

window.Swiper = Swiper;
window.Navigation = Navigation;
window.Pagination = Pagination;

Alpine.start();


// const swiper = new Swiper('.swiper', {
//     modules: [Navigation, Pagination],


//     spaceBetween: 50,
//     slidesPerView: 1,
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
//     pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//     },
// });