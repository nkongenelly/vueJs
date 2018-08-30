import VueRouter from 'vue-router';

//define the routes in an array
 let routes = [
    {
        //route for hospital
        path:'/',
        component:require('./views/Home')
        
    },
    {
        //route for services
        path:'/services',
        component:require('./views/Services')
    },
    {
        //route for visits
        path:'/visits',
        component:require('./views/Visits')
    },
    {
        //route for Bills
        path:'/bills',
        component:require('./views/Bills')
    }
 ];

export default new VueRouter({
    routes,  
    linkActiveClass: 'is-active'
});