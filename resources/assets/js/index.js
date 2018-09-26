var icon = document.getElementById('icon');
var drawer = document.getElementById('side-drawer');
var fullOverlay = document.getElementById('full-overlay');
var element = document.getElementById('app');
var isActive = false;

icon.onclick = 
function toggleActive(){
    if (!isActive) {
        icon.classList.add('active');   
        fullOverlay.classList.add('active');
        drawer.classList.add('active'); 
        element.classList.add('no-scroll'); 
        isActive = true;
    }
    else{
        icon.classList.remove('active');
        fullOverlay.classList.remove('active'); 
        drawer.classList.remove('active'); 
        element.classList.remove('no-scroll'); 
        isActive = false;
    }
    
};


console.log(isActive);