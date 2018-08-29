import VueRouter from ('vue-router');

//define the routes in an array
 let routes = [
    {
        //route for hospital
        path:'/',
        component:require('.views/Home.vue')
    },
    {
        //route for services
        path:'/services',
        component:require('.views/Services.vue')
    },
    {
        //route for visits
        path:'/visits',
        component:require('.views/Visits.vue')
    },
    {
        //route for Bills
        path:'/bills',
        component:require('.views/Bills.vue')
    }
 ];

export default new VueRouter({
    routes
});