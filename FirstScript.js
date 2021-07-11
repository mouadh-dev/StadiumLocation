const buttonStart = document.querySelector(".buttonStart");
const slider = document.querySelector(".slider");
const title = document.querySelector("#title");
const begeningImage = document.querySelector(".beginingImage");
const firstAnimation = new TimelineMax();

firstAnimation.fromTo(beginingImage,1, {height:"0%"}, {height:"80%"});
