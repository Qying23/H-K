
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

// update footer copyright year

var today = new Date();
var year = today.getFullYear();

var copyright = document.getElementById("copyright");
copyright.innerHTML = '© Ayse Uluc, Ying Qi, Cornelia Steinkelner '+ year;
