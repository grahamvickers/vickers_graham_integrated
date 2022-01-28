const { default: Axios } = require('axios');

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

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
                '<div class="listingCon">' +
                    '<div class="image" style="background:url(' + data[i]['imgUri'] + ')"></div>' +
                    '<h3>' + data[i]['name'] + '</h3>' +
                    '<h3>' + '$' +  data[i]['price'] + '</h3>' +
                    '<p>' + data[i]['address']+ '<p>' +
                    '<p>' + 'Profit Margin:     ' + data[i]['profit']+ '<p>' +
                    '<p>' + 'Net Income:    ' + data[i]['income']+ '<p>' +
                '</div>';

                element.innerHTML += item;
        }
    })
    .catch(function (error){
    alert(error);
});



(function() {
	"use strict";

	let inputRequest;
	let listingRequest;
	const searchField=document.querySelector("#searchInput");

	function requestHandler(){
		let request;
		if(window.XMLHttpRequest) {
			request = new XMLHttpRequest();
		} else if (request===null){
			console.log("Outdated Browser, sorry please switch to a modern web browser")
		}
		return request;
	}

	function showListings(e) {
		// console.log(e.currentTarget.value);
		let str = e.currentTarget.value;
		inputRequest = requestHandler();

		// console.log(inputRequest);

		let url = "/api/get-listings/?q="+str;
		inputRequest.onreadystatechange = listingStatus;
		inputRequest.open("GET", url, true);
		inputRequest.send(null);

	}

	function listingStatus() {
		// console.log("listing search status");
		if(inputRequest.readyState===4 && inputRequest.status===200){
			// console.log(inputRequest);
			document.querySelector("#searchDisplay").innerHTML=inputRequest.responseText;
			if(document.querySelector("#searchDisplay a")){
				document.querySelector("#searchDisplay a"). addEventListener("click", displayListing)
			}
		}
	}

	// function displayListing(e){
	// 	console.log(e.currentTarget.id);
	// 	let listingID = e.currentTarget.id;
	// 	listingRequest = createRequest();
	// 	console.log(listingRequest);

	// 	let url="/api/get-listings/?id="+listingID;
	// 	listingRequest.onreadystatechange=displayStatus;
	// 	listingRequest.open("GET", url);
	// 	listingRequest.send(null);
	// }

	// function displayStatus() {
	// 	if(listingRequest.readyState===4 && listingRequest.status===200){
	// 		console.log("displaying status")
	// 		document.querySelector("#displayCon").innerHTML=listingRequest.responseText;
	// 	}
	// }

	searchField.addEventListener("keyup", showListings)

})();






	
	
	







