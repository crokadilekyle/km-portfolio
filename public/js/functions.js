/*eslint-env browser*/

// -----onload transitions-------
const projects = document.querySelectorAll('.list-project');
// const aboutContent = document.querySelector('.about-content');
const aboutContent = document.querySelector('.content');
let aboutContentChildren = [];
const profilePic = document.querySelector('.profilepic');

if (projects) {
	projects.forEach(function (project) {
		project.style.opacity = 0;
		project.style.transform = 'translateY(20px)';
	});
}

if (aboutContent) {
	aboutContentChildren =  Array.from(aboutContent.children);
	aboutContentChildren.forEach(function (child) {
		child.style.opacity = 0;
	})
}

if (profilePic) {
	profilePic.style.opacity = 0;
	profilePic.style.transform = "translateY(-9rem)";
}

window.onload = function () {
	if (projects) {
		projects.forEach(function (project) {
			project.style.removeProperty('opacity');
			project.style.removeProperty('transform');
			project.classList.add('loaded');
		});
	}

	if (aboutContent) {
		aboutContentChildren.forEach(show);
	}
	
	function show(child, index) {
		setTimeout(function () {
			child.style.removeProperty('opacity');
			child.classList.add('show');
		}, index*100)
	}

	if (profilePic) {
		profilePic.style.removeProperty('opacity');
		profilePic.style.removeProperty('transform');
		profilePic.classList.add('loaded');
	}
}




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
