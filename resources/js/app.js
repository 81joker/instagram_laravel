import './bootstrap';

import { livewire_hot_reload } from 'virtual:livewire-hot-reload'
livewire_hot_reload();



import intersect from '@alpinejs/intersect'
Alpine.plugin(focus);
Alpine.plugin(intersect)


import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';


import Alpine from 'alpinejs';

window.Alpine = Alpine;
window.Swiper = Swiper;
window.Navigation = Navigation;
window.Pagination = Pagination;

// Alpine.start();


