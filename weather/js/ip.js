
$(document).ready(function() {
        if (navigator.geolocation) {
           // navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            document.getElementById("ip").innerHTML = "Geolocation is not supported by this browser.";
        }
    }
);
function showPosition(position) {
    document.getElementById("ip").innerHTML = position.coords.latitude +
        "," + position.coords.longitude;
}
