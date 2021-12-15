const { default: Axios } = require('axios');

require('./bootstrap');

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});



Axios.get('/api/get-listings')
    .then(function ({data}) {
        const element = document.getElementById("listings");
        element.innerHTML = '';

        for(var i = 0; i < data.length; i++) {
            const item = 
                '<div class="item col-3">' +
                    '<div class="image" style="background:url(' + data[i]['imgUri'] + ')"></div>' +
                    '<h3>' + data[i]['name'] + '</h3>' +
                    '<h3>' + data[i]['price'] + '</h3>' +
                    '<p>' + data[i]['address']+ '<p>' +
                    '<p>' + data[i]['profit']+ '<p>' +
                    '<p>' + data[i]['income']+ '<p>' +
                '</div>';

                element.innerHTML += item;
        }
    })
    .catch(function (error){
    alert(error);
});





