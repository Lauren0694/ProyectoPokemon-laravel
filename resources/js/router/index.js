import { createWebHistory, createRouter } from 'vue-router' 
 
import Home from '../components/pages/Home.vue'; 
import Register from '../components/pages/Register.vue';
import Login from '../components/pages/Login.vue';
 
import Dashboard from '../components/Dashboard.vue';
import LikedPokemons from '../components/LikedPokemons.vue';
/* Authenticated Component */
const routes = [
    {
        name: 'Home',
        path: '/',
        component: Home
    },
    {
        name: 'Dashboard',
        path: '/dashboard',
        component: Dashboard
    },
    {
        name: 'Register',
        path: '/register',
        component: Register
    },
    {
        name: 'Login',
        path: '/login',
        component: Login
    },
    {
        name: 'LikedPokemons',
        path: '/liked-pokemons',
        component: LikedPokemons
    },

]
const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router