import './styles/home.css';
import $ from "jquery";
import {createApp} from "vue";
import Products from "./components/swiper/products.vue";

$(document).ready(function() {
    createApp({
        components: { Products }
    }).mount('#products')
})