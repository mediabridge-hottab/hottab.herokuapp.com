/**
 * Created by MyPC on 08/02/2017.
 */
var vi = new Array("Tin tức","Sự kiện","Thực đơn","Dịch Vụ","Bản đồ", "Videos");
var en = new Array("News","Event","Menu","Hotel Services","City Guide","Videos");
var jp = new Array("ニュース","イベント","メニュー","サービス","マップ", "ビデオ");
function getEventTarget(e) {
    e = e || window.event;
    return e.target || e.srcElement;
}

var ul = document.getElementById('test');
ul.onclick = function(event) {
    var target = getEventTarget(event);
    var flg= ""
    var arr = new Array();
    if(target.innerHTML=="Tiếng Việt"){
        arr=vi;
        flg="vi";
    }else if(target.innerHTML=="English"){
        arr=en;
        flg = "en";
    }else if(target.innerHTML=="日本語"){
        arr=jp;
        flg = "ja";
    }
    document.getElementById("flagC").src = "img/flags/"+flg+".png";
    document.getElementById("lang0").innerHTML = arr[0];
    document.getElementById("lang1").innerHTML = arr[1];
    document.getElementById("lang2").innerHTML = arr[2];
    document.getElementById("lang3").innerHTML = arr[3];
    document.getElementById("lang4").innerHTML = arr[4];
    document.getElementById("lang5").innerHTML = arr[5];
};