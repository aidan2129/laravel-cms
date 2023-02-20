require('./bootstrap');


import { createApp } from 'vue';
import { createRouter, createWebHistory, createWebHashHistory } from 'vue-router'
import Homepage from './components/Homepage'
import Read from './components/Read.vue'
const Home = { template: '<div>TODO: Fix so the Homepage.vue component shows and is the start point for router-view</div>' }



const router = createRouter({
    // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
    history: createWebHashHistory(),
    routes: [
        { path: '/', component: Home },
        { path: '/admin/dashboard', component: Read, props: true },
    ]
})

createApp({}).use(router).mount('#app')

