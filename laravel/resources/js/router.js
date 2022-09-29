import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import HomeComponent from './pages/HomeComponent.vue';
import TestComponent from './pages/TestComponent.vue';
import PostShow from './pages/PostShow.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeComponent
        },
        {
            path: '/test',
            name: 'test',
            component: TestComponent
        },
        {
            path: '/postShow/:id',
            name: 'post.show',
            component: PostShow
        },
    ]
});

export default router