var bannerStatus = 1;

function bannerLoop() {

    if (bannerStatus === 1) {
        document.getElementById("imgban2").style.opacity = "0";
        setTimeout(function() {
        document.getElementById("imgban1").style.top = "0vh";
        document.getElementById("imgban1").style.zIndex = "10";
        document.getElementById("imgban2").style.top = "-1000vh";
        document.getElementById("imgban2").style.zIndex = "15";
        document.getElementById("imgban3").style.top = "-2000vh";
        document.getElementById("imgban3").style.zIndex = "5";
        document.getElementById("imgban4").style.top = "100vh";
        document.getElementById("imgban4").style.zIndex = "1";
    }, 1000);
    setTimeout(function(){
        document.getElementById("imgban2").style.opacity = "1";
    }, 4000);
        bannerStatus = 2;
    }
    else if (bannerStatus === 2) {
        document.getElementById("imgban3").style.opacity = "0";
        setTimeout(function() {
        document.getElementById("imgban2").style.top = "0vh";
        document.getElementById("imgban2").style.zIndex = "10";
        document.getElementById("imgban3").style.top = "-1000vh";
        document.getElementById("imgban3").style.zIndex = "15";
        document.getElementById("imgban4").style.top = "-2000vh";
        document.getElementById("imgban4").style.zIndex = "5";
        document.getElementById("imgban1").style.top = "100vh";
        document.getElementById("imgban1").style.zIndex = "1";
    }, 1000);
    setTimeout(function(){
        document.getElementById("imgban3").style.opacity = "1";
    }, 4000);
        bannerStatus = 3;
    }
    else if (bannerStatus === 3) {
        document.getElementById("imgban4").style.opacity = "0";
        setTimeout(function() {
        document.getElementById("imgban3").style.top = "0vh";
        document.getElementById("imgban3").style.zIndex = "10";
        document.getElementById("imgban4").style.top = "-1000vh";
        document.getElementById("imgban4").style.zIndex = "15";
        document.getElementById("imgban1").style.top = "-2000vh";
        document.getElementById("imgban1").style.zIndex = "5";
        document.getElementById("imgban2").style.top = "100vh";
        document.getElementById("imgban2").style.zIndex = "1";
    }, 1000);
    setTimeout(function(){
        document.getElementById("imgban4").style.opacity = "1";
    }, 4000);
        bannerStatus = 4;
    }
    else if (bannerStatus === 4) {
        document.getElementById("imgban1").style.opacity = "0";
        setTimeout(function() {
        document.getElementById("imgban4").style.top = "0vh";
        document.getElementById("imgban4").style.zIndex = "10";
        document.getElementById("imgban1").style.top = "-1000vh";
        document.getElementById("imgban1").style.zIndex = "15";
        document.getElementById("imgban2").style.top = "-2000vh";
        document.getElementById("imgban2").style.zIndex = "5";
        document.getElementById("imgban3").style.top = "100vh";
        document.getElementById("imgban3").style.zIndex = "1";
    }, 1000);
    setTimeout(function(){
        document.getElementById("imgban1").style.opacity = "1";
    }, 4000);
        bannerStatus = 1;
    }
}
bannerLoop();

window.onload=function(){
var startLoop = setInterval(function() {
    bannerLoop();
}, 4000);
}
