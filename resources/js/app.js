import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import NavbarComponent from './components/NavBar.vue';
import FooterComponent from './components/Footer.vue';
import AOS from 'aos'
import 'aos/dist/aos.css'
import "spotlight.js";

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const app = createApp();

app.component('NavbarComponent', NavbarComponent);
app.component('FooterComponent', FooterComponent);

app.mount('#app');

AOS.init();