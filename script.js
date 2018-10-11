var congrat = 'Sveikutis pasaulėli!!!';
document.getElementById("hello").innerHTML = congrat;




var xmasDate = new Date('December 25, 2018 00:00:00');

var x = setInterval(function() {

    var nowDate = new Date().getTime();
    var interval = xmasDate - nowDate;
    var days = Math.floor(interval / (1000 * 60 * 60 * 24));
    var hours = Math.floor((interval % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((interval % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((interval % (1000 * 60)) / 1000);


    document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
    
    if (interval < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "Su Šv. Kalėdom!!!";
    }
}, 1000);


// alert(days + "d " + hours + "h " + minutes + "m " + seconds + "s ");