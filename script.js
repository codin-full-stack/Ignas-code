// var congrat = 'Sveikutis pasaulėli!!!';
// document.getElementById("hello").innerHTML = congrat;



var xMasEl = document.getElementById("countdown");
if(xMasEl) {
    var xmasDate = new Date('December 25, 2018 00:00:00');

    var x = setInterval(function() {
    
        var nowDate = new Date().getTime();
        var interval = xmasDate - nowDate;
        var days = Math.floor(interval / (1000 * 60 * 60 * 24));
        var hours = Math.floor((interval % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((interval % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((interval % (1000 * 60)) / 1000);
    
    
        xMasEl.innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
        
        if (interval < 0) {
            clearInterval(x);
            xMasEl.innerHTML = "Su Šv. Kalėdom!!!";
        }
    }, 1000);
}

// alert(days + "d " + hours + "h " + minutes + "m " + seconds + "s ");

function selectOne() {
    var el = document.querySelector(".xmash1");
    // var emptyEl = document.querySelector(".empty");
//delete old el

//
    

    // emptyEl.innerHTML = el.innerHTML;
    el.style.backgroundColor = "red";
}


var clickEl = document.querySelector('.loop');

if(clickEl) {
    clickEl.addEventListener('click', function () {

        var myNodeList = document.querySelectorAll(".post_name");

        for (var a = 0; myNodeList.length > a; a++) {
            myNodeList[a].style.backgroundColor = "yellow";
        }

    });
}



var navEl = document.querySelector("#nav");
var hamEl = document.querySelector('.icon');

hamEl.addEventListener('click', function(){
    if(navEl.classList.contains('responsive')) {
        navEl.classList.remove('responsive');
    } else {
        navEl.classList.add('responsive');
    }
});