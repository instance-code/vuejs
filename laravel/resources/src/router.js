import { createRouter, createWebHistory } from 'vue-router'

import Home from '@/components/Home.vue'
import About from '@/components/About.vue'
import Contact from '@/components/Contact.vue'
import Signup from '@/pages/Signup.vue'
import Login from '@/pages/Login.vue'


const routes = [{

        path: '/home',
        component: Home
    },
    {
        path: '/about',
        component: About
    },
    {
        path: '/contact',
        component: Contact
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/signup',
        name: 'signup',
        component: Signup
    },

]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router