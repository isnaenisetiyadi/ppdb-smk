/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// require('../majestic/js/off-canvas.js');

// require('./')
//IMPORT MAJESTIC TEMPLATE
// require('~majestic/vendors/base/vendor.bundle.base');
// require('~/majestic/')
// require('~majestic/vendors/chart.js/Chart.min');
// require('./majestic/vendors/datatables.net/jquery.dataTables');
// // require('./majestic/vendors/datatables.net-bs4/dataTables.bootstrap4.js');
// require('./majestic/js/off-canvas');
// require('./majestic/js/hoverable-collapse');
// require('./majestic/js/template');
// require('./majestic/js/dashboard');
// require('./majestic/js/data-table.js');
// require('./majestic/js/jquery.dataTables');
// // require('./majestic/js/dataTables.bootstrap4.js');


window.Vue = require('vue');
// import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

/**
 * UJICOBA VUE ROUTER
 */
const Foo = { template: '<div>INI FOO foo</div>' }
const Bar = { template: '<div>bar INI BROOO</div>' }

//DIBAWAH INI CARA MENGIMPOR KOMPONEN (FILE .VUE)
import Index from './components/Index.vue';
import Create from './components/Create.vue';

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// UJI COBA VUE ROUTER
const routes = [
    { path: '/foo', component: Foo },
    { path: '/bar', component: Bar },
    { path: '/', component: Index },
    { path: '/create', component: Create }
]



const router = new VueRouter({
    routes // short for `routes: routes`
})

const app = new Vue({
    router
}).$mount('#app')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });