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
		inputRequest.open("GET", url);
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

	function displayListing(e){
		console.log(e.currentTarget.id);
		let listingID = e.currentTarget.id;
		listingRequest = createRequest();
		console.log(listingRequest);

		let url="/api/get-listings/?id="+listingID;
		listingRequest.onreadystatechange=displayStatus;
		listingRequest.open("GET", url);
		listingRequest.send(null);
	}

	function displayStatus() {
		if(listingRequest.readyState===4 && listingRequest.status===200){
			console.log("displaying status")
			document.querySelector("#displayCon").innerHTML=listingRequest.responseText;
		}
	}

	searchField.addEventListener("keyup", showListings)

})();



