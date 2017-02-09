/**
 * Created by MyPC on 08/02/2017.
 */
var vi = new Array("Tin tức","sự kiện","Thực đơn","Dịch Vụ","Bản đồ", "Videos");
var en = new Array("News","Event","Menu","Hotel Services","City Guide","Videos");
function getEventTarget(e) {
    e = e || window.event;
    return e.target || e.srcElement;
}

var ul = document.getElementById('test');
ul.onclick = function(event) {
    var target = getEventTarget(event);
    var arr = new Array();
    if(target.innerHTML=="vi"){
        arr=vi;
    }else if(target.innerHTML=="en"){
        arr=en;
    }
    document.getElementById("flagC").src = "img/flags/"+target.innerHTML+".png";
    document.getElementById("lang0").innerHTML = arr[0];
    document.getElementById("lang1").innerHTML = arr[1];
    document.getElementById("lang2").innerHTML = arr[2];
    document.getElementById("lang3").innerHTML = arr[3];
    document.getElementById("lang4").innerHTML = arr[4];
    document.getElementById("lang5").innerHTML = arr[5];
};