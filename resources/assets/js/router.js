import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./views/Home')
    },
    {
        path: '/about',
        component: require('./views/About')
    },
    {
        path: '/contact',
        component: require('./views/Contact')
    },
    {
        path: '/todo',
        component: require('./views/ToDo')
    }
];

export default new VueRouter({
    routes,
    linkActiveClass: 'active'
});
