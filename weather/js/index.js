
$(document).ready(function() {
//function getweather() {
    var a = $('#ip').html();
    $.simpleWeather({
        location: '21.0387758,105.80756640000001',
        woeid: '',
        unit: 'c',
        success: function (weather) {
            html = '<h2>' + weather.temp + '&deg;' + weather.units.temp + '</h2>';
            html += '<li class="currently">' + weather.currently + '</li>';
            html += '<li>' + weather.wind.direction + ' ' + weather.wind.speed + ' ' + weather.units.speed + '</li></ul>';

            $("#weather").html(html);
        },
        error: function (error) {
            $("#weather").html('<p>' + error + '</p>');
        }
    });
//}
});