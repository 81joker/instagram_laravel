import './bootstrap';

import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect'
import { livewire_hot_reload } from 'virtual:livewire-hot-reload'
livewire_hot_reload();


window.Alpine = Alpine;

Alpine.plugin(intersect)

Alpine.start();
