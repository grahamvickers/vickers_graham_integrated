console.log("dynamic nav");

function showNav() {
    document.getElementById("navOverCon").style.width = "100%";
}
  
function hideNav() {
    document.getElementById("navOverCon").style.width = "0%";
}

(function() {
	"use strict";
	console.log("search")
	
	let inputRequest;
	let listingRequest;
	const searchField=document.querySelector("#searchbox");

	function createRequest(){
		let request;
		if(window.XMLHttpRequest) {
			request = new XMLHttpRequest();
		}else if (request===null) {
			console.log("This is an outdated browser")
		}
		return request;
	}

	function showResults(e){
		//console.log(e.currentTarget.value);
		let str = e.currentTarget.value;
		inputRequest = createRequest();

		let url="searchlisting.php?searchstring="+str;
		inputRequest.onreadystatechange = searchStatus;
		inputRequest.open("GET", url);
		inputRequest.send(null);
	}

	function searchStatus() {
		//console.log("search status");
		if(inputRequest.readyState===4 && inputRequest.status ===200) {
			// console.log(inputRequest.responseText);
			document.querySelector("#searchDisplay").innerHTML=inputRequest.responseText;
			if(document.querySelector("#searchDisplay a")){
				document.querySelector("#searchDisplay a"). addEventListener("click", displayInfo)
			}
		}
	}

	function displayInfo(e){
		//console.log(e.currentTarget.id);
		let listingID = e.currentTarget.id;
		listingRequest = createRequest();
		console.log(listingRequest);

		let url="displaylisting.php?id="+listingID;
		listingRequest.onreadystatechange=displayStatus;
		listingRequest.open("GET", url);
		listingRequest.send(null);
	}

	function displayStatus() {
		if(listingRequest.readyState===4 && listingRequest.status===200){
			console.log("displaying status")
			document.querySelector("#maindiv").innerHTML=listingRequest.responseText;
		}
	}

	searchField.addEventListener("keyup", showResults);
})();	