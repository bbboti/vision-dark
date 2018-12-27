require('./bootstrap');
require('../dark-pack/vendor/jquery/jquery');
require('../dark-pack/vendor/bootstrap/js/bootstrap.min');
require('../dark-pack/vendor/jquery.cookie/jquery.cookie');
// require('../dark-pack/vendor/chart.js/Chart.min.js');
require('../dark-pack/vendor/jquery-validation/jquery.validate.min.js');
// require('../dark-pack/js/charts-home.js');
require('../dark-pack/vendor/messenger-hubspot/build/js/messenger.min');
require('../dark-pack/vendor/messenger-hubspot/build/js/messenger-theme-flat');
require('../dark-pack/js/home-premium');
require('../dark-pack/vendor/datatables.net/js/jquery.dataTables');
require('../dark-pack/vendor/datatables.net-bs4/js/dataTables.bootstrap4');
require('../dark-pack/vendor/datatables.net-responsive/js/dataTables.responsive.min');
require('../dark-pack/vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min');
require('../dark-pack/js/tables-datatable.js');
// require('../dark-pack/vendor/dropzone/dropzone');
// require('../dark-pack/js/forms-dropzone');
require('../dark-pack/js/front');
require('../js/gsdk-bootstrap-wizard');
require('../js/jquery.bootstrap.wizard');

window.Vue = require('vue');
import ToggleButton from 'vue-js-toggle-button'
Vue.use(ToggleButton)

import VueRouter from 'vue-router';
Vue.use(VueRouter)


let routes = [{
    path: '/clientes',
    component: require('./components/Clientes.vue').default,
    meta: {
        title: 'Clientes'
    }
},
{
    path: '/administracion/companias',
    component: require('./components/administracion/companias/Companias.vue').default,
    meta: {
        title: 'Compañias'
    }
},
{
    path: '/administracion/companias/create',
    component: require('./components/administracion/companias/Create.vue').default,
    meta: {
        title: 'Compañias'
    }
},
{
    path: '/administracion/companias/:nombre/edit',
    component: require('./components/administracion/companias/Edit.vue').default,
    meta: {
        title: 'Compañias'
    }
},
{
    path: '/administracion/organizadores',
    component: require('./components/administracion/Organizadores.vue').default,
    meta: {
        title: 'Organizadores'
    }
},
{
    path: '/administracion/productores',
    component: require('./components/administracion/Productores.vue').default,
    meta: {
        title: 'Productores'
    }
},
{
    path: '/polizas/automotor',
    component: require('./components/polizas/Automotor.vue').default,
    meta: {
        title: 'Polizas Automotor'
    }
},
{
    path: '/polizas/create',
    component: require('./components/polizas/Create.vue').default,
    meta: {
        title: 'Polizas Automotor'
    }
},
{
    path: '/polizas/automotor/:numero_solicitud/edit',
    component: require('./components/polizas/Edit.vue').default,
    meta: {
        title: 'Polizas Automotor'
        }
    }]
    
    import addMonths from 'date-fns/add_months';
    Vue.use(addMonths);
    
    const router = new VueRouter({
        mode: 'history',
        routes
    });
    
    const app = new Vue({
        el: '#app',
        router
    });
