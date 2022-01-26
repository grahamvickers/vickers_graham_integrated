console.log("dynamic nav");

function showNav() {
    document.getElementById("navOverCon").style.width = "100%";
}
  
function hideNav() {
    document.getElementById("navOverCon").style.width = "0%";
}

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
			console.log("Outdated Browser, sorry please update that")
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
		inputRequest.open("GET", url);
		inputRequest.send(null);

	}

	function listingStatus() {
		// console.log("listing search status");
		if(inputRequest.readyState===4 && inputRequest.status===200){
			console.log(responseText);
			document.querySelector("#searchDisplay").innerHTML=inputRequest.responseText;
		}
	}

	searchField.addEventListener("keyup", showListings)

})();



