import Vue from 'vue';
import Router from 'vue-router';
import MainLayout from './components/ExampleComponent';
import accommodations from './components/accommodations'
import resident from './components/resident'
import residence from './components/residence'

Vue.use(Router);
const router = new Router({
    routes: [
        {
            name: 'home',
            path: '/',
            component: MainLayout,
            redirect: {name: 'accommodations'},
            children: [
                {
                    name: 'accommodations',
                    path: '/accommodations/',
                    component: accommodations,

                },
                {
                    name: 'resident',
                    path: '/resident',
                    component: resident
                },
                {
                    name: 'residence',
                    path: '/residence',
                    component: residence
                },
            ]
        }]
});

export default router;