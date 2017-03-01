var data = $( "div.dataSend" ).text();
var obj = JSON.parse(data);
function sendData() {
    /*console.log(data);
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://api.hottab.pw/v2/cashier/food-orders/create-or-update?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDg4MTE2MDA5IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo4NiwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQ4ODAyOTYwOSIsIm5iZiI6IjE0ODgwMjk2MDkiLCJqdGkiOiI1NjI2ZDdhNWRiYjYyZDA3OWE2NmYwN2M4Y2ZkZmU3ZCJ9.MjJjOTY4ZTc0YWViOGRkOTMzYzJhODE4Y2JiYmFjYWZhNmFlZTNmMWIzMzk5Yzg2MTQzNWU5ZTY5OWNlZDU3YQ",
        "method": "POST",
        "headers": {
            "content-type": "application/json",
        },
        "processData": false,
        "data": data.trim()
    }

    $.ajax(settings).done(function (response) {
        console.log(response);
    });*/
    var data = JSON.stringify(data);

    var xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    xhr.addEventListener("readystatechange", function () {
        if (this.readyState === 4) {
            console.log(this.responseText);
        }
    });

    xhr.open("POST", "http://api.hottab.co/v2/cashier/food-orders/create-or-update?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDg4MTI2OTY5IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo4NiwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQ4ODA0MDU2OSIsIm5iZiI6IjE0ODgwNDA1NjkiLCJqdGkiOiJiNmM4ZTI1OGFkNzZhNjU1ZDFiYmNlOGY3Yjk4ZjQ2OSJ9.ZDcwNDg1NDQ3NTRlN2IzMmVlZDY0YWRiODkyNjhiZGE4MDlmMDMyMjllN2RiOTAwMWRiOTY4ZjBkMzQzNTg2Ng");
    xhr.setRequestHeader("content-type", "application/json");
    xhr.setRequestHeader("cache-control", "no-cache");
    xhr.setRequestHeader("postman-token", "f58feaa4-1e51-836d-54ee-80fff456752d");

    xhr.send(data);
}
