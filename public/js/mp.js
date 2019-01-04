var x = "";
var lastQuery = ""
var toggle = "";
var userId = "";
function loadPage(query, clicked) {
    lastQuery = query;
    if(clicked){
        if(toggle === "DESC" || toggle === "") {
            toggle = "ASC";
        } else {
            toggle = "DESC";
        }
        var g = document.getElementById("tbl").rows[0].cells;
        for(i=0;i<g.length;i++){
            g[i].innerHTML = g[i].className;
        }
        if(toggle === "DESC") {
            clicked.innerHTML += " &#9660";
        } else {
            clicked.innerHTML += " &#9650";
        }   
    }
    var order = "/" + toggle;
    if(query !== "") {
        query = "/" + query;
    }
    query = query + order;
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			x = JSON.parse(this.responseText);
            insertContent();
		}
	};
    if(detectPage("#user")){
        query += "&user=" + userId;
        if (currentUser == userId){
            console.log(currentUser);
            console.log(userId);
            document.getElementById("title").innerHTML = "Uw openstaande advertenties, " + userName;
        }
    }
    console.log("http://localhost:8000/ads" + query);
	xhr.open("GET", "http://localhost:8000/ads" + query, true);
	xhr.send();
       
}

function detectPage(pageName) {
    var lh = location.hash.split('=');
    if(lh[0] == pageName) {
        userId = lh[1];
        return true;
    } else {
        return false;
    }
}

function insertContent() {
    var holder = "";
    for(i=0;i<x.length;i++) {
        holder += "<div class='col-md-4'><div class='card mt-4'><div class='card-header'><h5 style='padding-top:8px;'><b>"+ x[i]['title'] + "</b></h5></div><div class='card-body'><p class='card-text'>"+ x[i]['body'] + "</p><ul class='list-group list-group-flush'><li class='list-group-item'>Asking price: "+ x[i]['asking_price'] + "</li><li class='list-group-item'>Placed at: "+ x[i]['created_at'] + "</li></ul><br><a href='#' class='btn btn-primary'>Go to ad</a></div></div></div>";
    }
    document.getElementById("contenttable").innerHTML = holder;
}

var isTabActive = true;
window.onfocus = function () { 
  isTabActive = true; 
}; 
window.onblur = function () { 
  isTabActive = false; 
}; 

window.setInterval(function(){
    if(window.isTabActive){
        loadPage(lastQuery);
        var d = new Date().toLocaleTimeString(); 
        console.log(d);
    }
}, 5000);

loadPage("");





