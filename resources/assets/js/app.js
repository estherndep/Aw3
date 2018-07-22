/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

var icon = document.getElementById('icon');
var fullOverlay = document.getElementById('full-overlay');
var element = document.getElementsByClassName('content');
var isActive = false;

function toggleActive(){
    if (!isActive) {
        icon.classList.add('active');   
        fullOverlay.classList.add('active'); 
    }
    else{
        icon.classList.remove('active');
        fullOverlay.classList.remove('active'); 
    }
    
}

