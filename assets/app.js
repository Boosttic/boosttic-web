/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';
import {createApp} from "vue";
import ExpandMenu from "./components/expandMenu.vue";
const $ = require('jquery');

$(document).ready(function() {
    createApp({
        components: { ExpandMenu }
    }).mount('#navigation');
    $(window).scroll(function () {
        if ($(this).scrollTop() !== 0) {
            $('.header').addClass('scrolled')
        }else {
            $('.header').removeClass('scrolled')
        }
    })
})