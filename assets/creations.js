import './styles/creations.css';
import $ from "jquery";
import {createApp} from "vue";
import Creations from "./components/creations.vue";

$(document).ready(function() {
    createApp({
        components: { Creations }
    }).mount('#creations')
})