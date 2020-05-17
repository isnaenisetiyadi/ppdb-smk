/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter)

// import Vue from 'vue'
import store from './store';
import VueRouter from 'vue-router';



/**
 * UJICOBA VUE ROUTER
 */
const Foo = { template: '<div>INI FOO foo</div>' }
const Bar = { template: '<div>bar INI BROOO</div>' }

//DIBAWAH INI CARA MENGIMPOR KOMPONEN (FILE .VUE)
import Index from './components/content/Index.vue';
import Create from './components/Create.vue';
import Department from './components/content/Department.vue';
import Cash from './components/content/Cash.vue';
import File from './components/content/File.vue';
import Period from './components/content/Period.vue';
import Students from './components/content/Students.vue';
import Register from './components/content/Register.vue';
import Heregister from './components/content/Heregister.vue';
import Graduate from './components/content/Graduate.vue';
import Users from './components/content/Users.vue';
import School from './components/content/School.vue';
import Profile from './components/content/Profile.vue';

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// UJI COBA VUE ROUTER
const routes = [
    { path: '/foo', component: Foo },
    { path: '/bar', component: Bar },
    { path: '/', component: Index },
    { path: '/create', component: Create },
    { path: '/department', component: Department },
    { path: '/cash', component: Cash },
    { path: '/file', component: File },
    { path: '/period', component: Period },
    { path: '/students', component: Students },
    { path: '/register', component: Register },
    { path: '/heregister', component: Heregister },
    { path: '/graduate', component: Graduate },
    { path: '/users', component: Users },
    { path: '/school', component: School },
    { path: '/profile', component: Profile }

]



const router = new VueRouter({
    routes // short for `routes: routes`
})

const app = new Vue({
    router,
    store
}).$mount('#app')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });