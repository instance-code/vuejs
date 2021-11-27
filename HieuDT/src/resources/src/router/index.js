
import Home from '../layouts/Home.vue'
import Dashboard from '../layouts/Dashboard.vue'
import Calculator from '../layouts/Calculator.vue'
import UserComp from '../components/UserComp.vue'
import user from '../pages/user.vue'
import ChangeLang from '../layouts/ChangeLang.vue'
import ListBlog from '../pages/blogs/index.vue'
import CreateBlog from '../pages/blogs/create.vue'
import DetailBlog from '../pages/blogs/edit.vue'

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
    },
    {
        path:'/list-blog',
        name: 'ListBlog',
        component: ListBlog
    },
    {
        path:'/create-blog',
        name: 'CreateBlog',
        component: CreateBlog
    },
    {
        path:'/detail-blog/:id',
        name:"DetailBlog",
        component: DetailBlog
    }
 
 
]

const router = createRouter({
    history: createWebHistory(),
    routes,
  });
  
  export default router;