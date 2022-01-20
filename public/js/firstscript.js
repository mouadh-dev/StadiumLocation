const buttonStart = document.querySelector(".buttonStart");
const slider = document.querySelector(".slider");
const title = document.querySelector("#title");
const begeningImage = document.querySelector(".beginingImage");
const footer = document.querySelector(".footer");

const firstAnimation = new TimelineMax();

firstAnimation.fromTo(begeningImage,1, {height:"0%"}, {height:"90%",ease: Power2.easeInOut})
.fromTo(begeningImage,1.2, {width:"100%"}, {width:"85%",ease: Power2.easeInOut})
.fromTo(slider, 1.2, {x: "-100%"}, {x:'0%' ,ease: Power2.easeInOut}, "-=1.2")
.fromTo(title, 0.5, {opacity:0, x:30}, {opacity:1, x:0}, "-=0.5")
.fromTo(buttonStart, 0.5, {opacity:0, x:30}, {opacity:1, x:0}, "-=0.5")
.fromTo(footer, 0.5, {opacity:0, x:30}, {opacity:1, x:0}, "-=0.5");
