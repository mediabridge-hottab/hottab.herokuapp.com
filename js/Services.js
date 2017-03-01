var tokenKey = $( "div.tokenKey" ).text();
var idStart = 0;
$(document).ready(function() {

    //consolog("tokenKey: "+tokenKey);
    // console.log(tokenKey);
    $.ajax({
        url: 'http://api.hottab.co/admin/new-food-categories?hotel_id=189&lang=vi&token='+tokenKey.trim(),

        //url: 'http://api.hottab.pw/admin/new-food-categories?hotel_id=8&lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDg3Mzg0NTM0IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo4NiwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQ4NzI5ODEzNCIsIm5iZiI6IjE0ODcyOTgxMzQiLCJqdGkiOiJjYjRjNDcwMzkyNGE1ZmMwOGFkNTY2MDM2MTM0YjA2NyJ9.ZjFkZDc5YmZhZWM2Y2E0NTg0YzM1OGEwMWUyM2E5M2ZmYTQ5NTlkN2ExYWFiZTI1M2YzYTRiZmQ4ZTJmMTE3ZA',
        //url: 'api.hottab.pw/admin/new-foods/category/100?hotel_id=8&lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDg3Mzg0NTM0IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo4NiwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQ4NzI5ODEzNCIsIm5iZiI6IjE0ODcyOTgxMzQiLCJqdGkiOiJjYjRjNDcwMzkyNGE1ZmMwOGFkNTY2MDM2MTM0YjA2NyJ9.ZjFkZDc5YmZhZWM2Y2E0NTg0YzM1OGEwMWUyM2E5M2ZmYTQ5NTlkN2ExYWFiZTI1M2YzYTRiZmQ4ZTJmMTE3ZA&tag_id=12',
        type:'get',
        success: function(data){
            //console.log((data));

            $.each(data['data'], function(i, star) {
                if(star['name']=='Services') {
                    if (idStart == 0) {
                        idStart = star['id'];
                        $.ajax({
                            //console.log('id = '+idStart);
                            url: 'http://api.hottab.co/admin/new-foods/category/' + idStart + '?hotel_id=189&lang=vi&token=' + tokenKey.trim(),
                            type: 'get',
                            success: function (data) {
                                // console.log(data['data']['foods']);
                                $('#stars').empty();
                                $.each(data['data']['foods'], function (i1, f) {
                                    if (f['intro_img_original'] != null) {
                                        $('#stars').append(
                                            "<div class='item'>" +
                                            "<a href='' data-toggle='modal' data-target='#myModal'  onclick='viewMenu(" + f['id'] + ")'>" +
                                            "<figure class='wp-caption'>" +
                                            "<img class='demo' src='" + f['intro_img_original'] + "' alt='Image' />" +
                                            "<figcaption class='wp-caption-text'>" +

                                            "<div class='food-name'>" +

                                            f['name'] +

                                            "</div>" +
                                            "<div class='food-price'>" +
                                            f['price'] + " &#8363;" +
                                            // "<span class='pull-right'>[0]</span>"+
                                            "</div>" +

                                            "</figcaption>" +
                                            "</a>" +
                                            // "<figcaption class='add-sub-number'>"+
                                            // "<i class='mdi mdi-minus-circle pull-left'></i>"+
                                            // "<i class='mdi mdi-plus-circle pull-right'></i>"+
                                            // "</figcaption>"+
                                            "</figure>" +
                                            "</div>");
                                    } else {
                                        $('#stars').append(
                                            "<div class='item'>" +
                                            "<a href='' data-toggle='modal' data-target='#myModal'  onclick='viewMenu(" + f['id'] + ")'>" +
                                            "<figure class='wp-caption'>" +
                                            "<img class='demo' src='img/menu/default-menu-image.jpg' alt='Image' />" +
                                            "<figcaption class='wp-caption-text'>" +

                                            "<div class='food-name'>" +

                                            f['name'] +

                                            "</div>" +
                                            "<div class='food-price'>" +
                                            f['price'] + " &#8363;" +
                                            // "<span class='pull-right'>[0]</span>"+
                                            "</div>" +

                                            "</figcaption>" +
                                            "</a>" +
                                            // "<figcaption class='add-sub-number'>"+
                                            // "<i class='mdi mdi-minus-circle pull-left'></i>"+
                                            // "<i class='mdi mdi-plus-circle pull-right'></i>"+
                                            // "</figcaption>"+
                                            "</figure>" +
                                            "</div>");
                                    }

                                });
                                $("#stars").css('background', '#eeeeee');
                            },
                            dataType: 'json'
                        });
                    }

                    if (typeof star['name'] != null) {
                        $('#menuCate').append("<div class='item'>" +
                            //"<a href='http://api.hottab.pw/admin/new-foods/category/"+ star['category']['id']+"?hotel_id=8&lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDg3Mzg0NTM0IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo4NiwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQ4NzI5ODEzNCIsIm5iZiI6IjE0ODcyOTgxMzQiLCJqdGkiOiJjYjRjNDcwMzkyNGE1ZmMwOGFkNTY2MDM2MTM0YjA2NyJ9.ZjFkZDc5YmZhZWM2Y2E0NTg0YzM1OGEwMWUyM2E5M2ZmYTQ5NTlkN2ExYWFiZTI1M2YzYTRiZmQ4ZTJmMTE3ZA&tag_id=12'>"+
                            "<div class='' onclick='directData(" + star['id'] + ")'>" +
                            "<p class='item-img mdi mdi-silverware-variant'><center>" + star['name'] + "</center></p>" +
                            "</div></div>");
                        /* $.each(star['foods'], function(i1, f) {
                         if(f['intro_img_original']!=null){
                         //console.log(count);
                         $('#stars').append(
                         "<div class='item'>"+
                         "<figure class='wp-caption'>"+
                         "<img class='demo' src='"+f['intro_img_original']+"' alt='Image' />"+
                         "<figcaption class='wp-caption-text'>"+
                         "<div class='food-name'>"+
                         "<a href='viewMenu.php?idMenu="+f['id']+"'>"+
                         f['name']+
                         "</a>"+
                         "</div>"+
                         "<div class='food-price'>"+
                         f['price']+" &#8363;"+
                         "<span class='pull-right'>[0]</span>"+
                         "</div>"+
                         "</figcaption>"+
                         "<figcaption class='add-sub-number'>"+
                         "<i class='mdi mdi-minus-circle pull-left'></i>"+
                         "<i class='mdi mdi-plus-circle pull-right'></i>"+
                         "</figcaption>"+
                         "</figure>"+
                         "</div>");
                         }else{
                         $('#stars').append(
                         "<div class='item'>"+
                         "<figure class='wp-caption'>"+
                         "<img class='demo' src='img/menu/default-menu-image.jpg' alt='Image' />"+
                         "<figcaption class='wp-caption-text'>"+
                         "<div class='food-name'>"+
                         "<a href='viewMenu.php?idMenu="+f['id']+"'>"+
                         f['name']+
                         "</a>"+
                         "</div>"+
                         "<div class='food-price'>"+
                         f['price']+" &#8363;"+
                         "<span class='pull-right'>[0]</span>"+
                         "</div>"+
                         "</figcaption>"+
                         "<figcaption class='add-sub-number'>"+
                         "<i class='mdi mdi-minus-circle pull-left'></i>"+
                         "<i class='mdi mdi-plus-circle pull-right'></i>"+
                         "</figcaption>"+
                         "</figure>" +
                         "</div>");
                         }
                         });*/
                    }
                }
            });
            $("#stars").css('background','#eeeeee');
        },
        dataType: 'json'
    });

});

function directData(idDi){
   /* //console.log(tokenKey);
    $.ajax({
        url: 'http://api.hottab.co/admin/new-foods/category/'+idDi+'?hotel_id=189&lang=vi&token='+tokenKey.trim(),
        type:'get',
        success: function(data){
            $('#stars').empty();
            $.each(data['data']['foods'], function(i1, f) {
                if(f['intro_img_original']!=null){
                    $('#stars').append(
                        "<div class='item'>"+
                        "<a href='' data-toggle='modal' data-target='#myModal'  onclick='viewMenu("+f['id']+")'>"+
                        "<figure class='wp-caption'>"+
                        "<img class='demo' src='"+f['intro_img_original']+"' alt='Image' />"+
                        "<figcaption onclick='viewMenu("+f['id']+")' class='wp-caption-text'>"+

                        "<div class='food-name'>"+

                        f['name']+

                        "</div>"+
                        "<div class='food-price'>"+
                        f['price']+" &#8363;"+
                        // "<span class='pull-right'>[0]</span>"+
                        "</div>"+

                        "</figcaption>"+
                        "</a>"+
                        // "<figcaption class='add-sub-number'>"+
                        // "<i class='mdi mdi-minus-circle pull-left'></i>"+
                        // "<i class='mdi mdi-plus-circle pull-right'></i>"+
                        // "</figcaption>"+
                        "</figure>"+
                        "</div>");
                }else{
                    $('#stars').append(
                        "<div class='item'>"+
                        "<a href='' data-toggle='modal' data-target='#myModal'  onclick='viewMenu("+f['id']+")'>"+
                        "<figure class='wp-caption'>"+
                        "<img class='demo' src='img/menu/default-menu-image.jpg' alt='Image' />"+
                        "<figcaption class='wp-caption-text'>"+

                        "<div class='food-name'>"+

                        f['name']+

                        "</div>"+
                        "<div class='food-price'>"+
                        f['price']+" &#8363;"+
                        // "<span class='pull-right'>[0]</span>"+
                        "</div>"+

                        "</figcaption>"+
                        "</a>"+
                        // "<figcaption class='add-sub-number'>"+
                        // "<i class='mdi mdi-minus-circle pull-left'></i>"+
                        // "<i class='mdi mdi-plus-circle pull-right'></i>"+
                        // "</figcaption>"+
                        "</figure>"+
                        "</div>");
                }

            });
            $("#stars").css('background','#eeeeee');
        },
        dataType: 'json'
    });*/
}
