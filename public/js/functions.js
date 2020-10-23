/*eslint-env browser*/
//------menu button toggle--------
var menu = document.querySelector(".menu");
var toggle = document.querySelector(".toggler");

menu.onclick = function(){
	toggle.classList.toggle("toggled");
	return false;
}

//------show the navbar when scrolling up ---------

var nav = document.querySelector(".navbar");
 
window.onscroll = function() {
	if (this.scroll < this.scrollY){
		nav.style.transitionDelay = "0s";
		nav.classList.add("hide");
	} else {
		nav.style.transitionDelay = ".2s";
		nav.classList.remove("hide");
	}
	this.scroll = this.scrollY;
}

//----------removes branding caused by fa------------------

document.querySelector("nav.navbar ul").firstChild.remove();


//------smooth scroll for projects page skip button ---------

var button = document.querySelector(".button");
var link = document.getElementById("scroll");
var hash = document.getElementById("projects");

if (link != null){
	button.onclick = function() {

		hash.scrollIntoView({behavior: "smooth"});
	}
	link.onclick = function() {

		hash.scrollIntoView({behavior: "smooth"});
		return false;
	}	
}

//------------add "even" class to every other article tag | only on home page--------------


var articles = document.querySelectorAll("ARTICLE");
var about = document.getElementById("about");

if (about != null){
	var i;
	for (i = 0; i < articles.length; i++) {
		if(i%2 != 0){
			articles[i].classList.add("even");
		}
	}
}

