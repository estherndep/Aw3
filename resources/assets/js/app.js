/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

import BootstrapVue from 'bootstrap-vue'
import * as VueGoogleMaps from "vue2-google-maps";

Vue.use(VueGoogleMaps, {
  load: {
    key: "AIzaSyA3xsO3gQjmsIX2DEDAxCtGwfdKff-v1Es",
    libraries: "places" // necessary for places input
  }
});

Vue.use(BootstrapVue)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component("side-drawer", require("./components/SideDrawer/Burger"));
Vue.component("index", require("./components/Index/Index"));
Vue.component("contact", require("./components/Contact"));
Vue.component(
  "example-component",
  require("./components/ExampleComponent.vue")
);
const app = new Vue({
  el: "#app"
});