


var header = document.getElementById("service-header");
var btns = document.getElementsByClassName("service-btn");
var body = document.getElementById("service-body");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var activeBlock = body.getElementsByClassName("active");
    var current = header.getElementsByClassName("active")
    
    current[0].className = current[0].className.replace(" active", "");
    activeBlock[0].className = activeBlock[0].className.replace(" active", "");

    console.log(this.id);
    if(this.id == "residential-btn"){
      document.getElementById("residential-block").className += " active";
    }
    else if(this.id == "commercial-btn"){
      document.getElementById("commercial-block").className += " active";
    }
    else{
      document.getElementById("hospitality-block").className += " active";
    }

    this.className += " active";
  });
}