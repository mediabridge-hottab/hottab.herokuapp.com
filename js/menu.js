$(document).ready(function() {
    $.ajax({
        url: 'http://api.hottab.pw/admin/new-foods/?hotel_id=10&lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDg3Mzk3NTAxIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo4NiwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQ4NzMxMTEwMSIsIm5iZiI6IjE0ODczMTExMDEiLCJqdGkiOiI5MDA3NTUxYmVhNzcxMjhhZTRlYWJlNjcxYTNiZGQ4ZCJ9.NDk3MmM4MmNhODkyMTE3MWUwMTJmODA4ODVlNWYzODBlNDRlYjdhNDI5NDY2ZmYwNDUxNjVkYzJkY2ZiNDQxYg',
        //url: 'http://api.hottab.pw/admin/new-food-categories?hotel_id=8&lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDg3Mzg0NTM0IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo4NiwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQ4NzI5ODEzNCIsIm5iZiI6IjE0ODcyOTgxMzQiLCJqdGkiOiJjYjRjNDcwMzkyNGE1ZmMwOGFkNTY2MDM2MTM0YjA2NyJ9.ZjFkZDc5YmZhZWM2Y2E0NTg0YzM1OGEwMWUyM2E5M2ZmYTQ5NTlkN2ExYWFiZTI1M2YzYTRiZmQ4ZTJmMTE3ZA',
        //url: 'api.hottab.pw/admin/new-foods/category/100?hotel_id=8&lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDg3Mzg0NTM0IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo4NiwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQ4NzI5ODEzNCIsIm5iZiI6IjE0ODcyOTgxMzQiLCJqdGkiOiJjYjRjNDcwMzkyNGE1ZmMwOGFkNTY2MDM2MTM0YjA2NyJ9.ZjFkZDc5YmZhZWM2Y2E0NTg0YzM1OGEwMWUyM2E5M2ZmYTQ5NTlkN2ExYWFiZTI1M2YzYTRiZmQ4ZTJmMTE3ZA&tag_id=12',
        type:'get',
        success: function(data){

            $.each(data['data'], function(i, star) {
                // console.log(star);

                if(typeof star['foods'] != 'undefined'){
                    $('#menuCate').append("<div class='item'>"+
                        //"<a href='http://api.hottab.pw/admin/new-foods/category/"+ star['category']['id']+"?hotel_id=8&lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDg3Mzg0NTM0IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo4NiwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQ4NzI5ODEzNCIsIm5iZiI6IjE0ODcyOTgxMzQiLCJqdGkiOiJjYjRjNDcwMzkyNGE1ZmMwOGFkNTY2MDM2MTM0YjA2NyJ9.ZjFkZDc5YmZhZWM2Y2E0NTg0YzM1OGEwMWUyM2E5M2ZmYTQ5NTlkN2ExYWFiZTI1M2YzYTRiZmQ4ZTJmMTE3ZA&tag_id=12'>"+
                        "<div class='' onclick='directData("+star['category']['id']+")'>"+
                        "<p class='item-img mdi mdi-silverware-variant'><center>"+ star['category']['name']+"</center></p>"+
                        "</div></div>");
                    $.each(star['foods'], function(i1, f) {
                        $('#stars').append("<div class='item' ><figure class='wp-caption'>"+
                            "<img class='demo' src='"+f['intro_img_original']+"' alt='Image' />"+
                            "<figcaption class='wp-caption-text'>"+f['name']+"  "+f['price']+"$</figcaption>"+
                            "</figure></div>");
                    });
                }

            });
        },
        dataType: 'json'
    });
});

function directData(id){
    $.ajax({
        url: 'http://api.hottab.pw/admin/new-foods/?hotel_id=8&lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDg3Mzk3NTAxIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo4NiwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQ4NzMxMTEwMSIsIm5iZiI6IjE0ODczMTExMDEiLCJqdGkiOiI5MDA3NTUxYmVhNzcxMjhhZTRlYWJlNjcxYTNiZGQ4ZCJ9.NDk3MmM4MmNhODkyMTE3MWUwMTJmODA4ODVlNWYzODBlNDRlYjdhNDI5NDY2ZmYwNDUxNjVkYzJkY2ZiNDQxYg',
        //url: 'http://api.hottab.pw/admin/new-food-categories?hotel_id=8&lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDg3Mzg0NTM0IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo4NiwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQ4NzI5ODEzNCIsIm5iZiI6IjE0ODcyOTgxMzQiLCJqdGkiOiJjYjRjNDcwMzkyNGE1ZmMwOGFkNTY2MDM2MTM0YjA2NyJ9.ZjFkZDc5YmZhZWM2Y2E0NTg0YzM1OGEwMWUyM2E5M2ZmYTQ5NTlkN2ExYWFiZTI1M2YzYTRiZmQ4ZTJmMTE3ZA',
        //url: 'api.hottab.pw/admin/new-foods/category/100?hotel_id=8&lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDg3Mzg0NTM0IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo4NiwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQ4NzI5ODEzNCIsIm5iZiI6IjE0ODcyOTgxMzQiLCJqdGkiOiJjYjRjNDcwMzkyNGE1ZmMwOGFkNTY2MDM2MTM0YjA2NyJ9.ZjFkZDc5YmZhZWM2Y2E0NTg0YzM1OGEwMWUyM2E5M2ZmYTQ5NTlkN2ExYWFiZTI1M2YzYTRiZmQ4ZTJmMTE3ZA&tag_id=12',
        type:'get',
        success: function(data){

            $.each(data['data'], function(i, star) {
                // console.log(star);

                if(typeof star['foods'] != "undefined" && star['category']['id']==id){
                    $('#stars').empty();
                    $.each(star['foods'], function(i1, f) {
                        $('#stars').append("<div class='item' ><figure class='wp-caption'>"+
                            "<img class='demo' src='"+f['intro_img_original']+"' alt='Image' />"+
                            "<figcaption class='wp-caption-text'>"+f['name']+"  "+f['price']+"$</figcaption>"+
                            "</figure></div>");
                    });
                }

            });
        },
        dataType: 'json'
    });
}