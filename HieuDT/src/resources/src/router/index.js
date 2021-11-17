
import Home from '../layouts/Home.vue'
import Dashboard from '../layouts/Dashboard.vue'
import Calculator from '../layouts/Calculator.vue'
import UserComp from '../components/UserComp.vue'
import user from '../pages/user.vue'
import ChangeLang from '../layouts/ChangeLang.vue'

import { createWebHistory, createRouter } from "vue-router";

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home

    },
    {
        path: '/dashboard',
        name: 'Dashboard',
        component: Dashboard

    },
    {
        path: '/calculator',
        name: 'Calculator',
        component: Calculator

    },
    {
        path: '/users',
        name: 'User',
        component: UserComp
    },
    {
        path: '/users/crud',
        name: 'UserCRUD',
        component: user
    },
    {
        path:'/change-lang',
        name: 'ChangeLang',
        component: ChangeLang
    }
 
]

const router = createRouter({
    history: createWebHistory(),
    routes,
  });
  
  export default router;