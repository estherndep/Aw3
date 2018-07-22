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