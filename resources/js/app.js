require('./bootstrap');

window.Vue = require('vue');

import { createApp } from 'vue';
import { createRouter, createWebHistory, createWebHashHistory } from 'vue-router'
import Homepage from './components/Homepage.vue'
import Read from './components/Read.vue'
import Create from './components/Create'
import Update from './components/Update'

const router = createRouter({
    // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
    history: createWebHashHistory(),
    routes: [
        { path: '/admin/dashboard', component: Read, props: true },        
        {
            path: '/admin/create',
            name: 'create',
            component: Create,
            props: true
        },
        {
            path: '/admin/update',
            name: 'update',
            component: Update,
            props: true
        },
    ]
})



const app = createApp({ components: { Homepage } })
app.use(router)
app.mount('#app')

