var tokenKey = $( "div.tokenKey" ).text();
var name, price, img, id, sum=0;
function viewMenu(keyMenu) {
    $.ajax({
        url: 'http://api.hottab.co/admin/new-foods/' + keyMenu + '?lang=vi&token=' + tokenKey.trim(),
        type: 'get',
        success: function (data) {
            console.log(data);
            name = data['data']['name'];
            price = data['data']['price'];
            img = data['data']['intro_img'];
            id = data['data']['id'];

            if (data['data']['intro_img_original'] != null) {
                $('#modal-body').empty();
                $('#modal-body').append(
                    "<div class='top'>" +
                    "<p class='menuName'>" + data['data']['name'] + "</p>" +
                    "<p class='price'>" + data['data']['price'] + " &#8363;</p>" +
                    "</div>" +
                    "<figure class='wp-caption'>" +
                    "<img src='" + data['data']['intro_img_original'] + "'>" +
                    "<figcaption class='wp-caption-text'>" +
                    "<div class='btn1'>" +
                    "<input type='radio' value='Wastage' name='tuyChon'>Wastage" +
                    "</div>" +
                    "<div class='btn1'>" +
                    "<input type='radio' value='FOC' name='tuyChon'>FOC" +
                    "</div>" +
                    "<div class='btn1'>" +
                    "<input type='radio' value='Don't make' name='tuyChon'>Don't make" +
                    "</div>" +
                    "<div class='btn1'>" +
                    "<input type='radio' value='Take away' name='tuyChon'>Take away" +
                    "</div>" +
                    "</figcaption>" +
                    "</figure>" +
                    "<footer>" +
                    "<div id='footer1'><i class='mdi mdi-minus-circle' onclick='sub()'></i></div>" +
                    "<div id='footer2'><input type='text' id='number' name='number' value='1'/></div>" +
                    "<div id='footer3' onclick='driectPage()' style='font-size: 14px'>add to order</div>" +
                    "<div id='footer4'><i class='mdi mdi-plus-circle' onclick='add()'></i></div>" +
                    "</footer>");
            } else {
                $('#modal-body').empty();
                $('#modal-body').append(
                    "<div class='top'>" +
                    "<p class='menuName'>" + data['data']['name'] + "</p>" +
                    "<p class='price'>" + data['data']['price'] + " &#8363;</p>" +
                    "</div>" +
                    "<figure class='wp-caption'>" +
                    "<img src='img/menu/default-menu-image.jpg'>" +
                    "<figcaption class='wp-caption-text'>" +
                    "<div class='btn1'>" +
                    "<input type='radio' value='Wastage' name='tuyChon'>Wastage" +
                    "</div>" +
                    "<div class='btn1'>" +
                    "<input type='radio' value='FOC' name='tuyChon'>FOC" +
                    "</div>" +
                    "<div class='btn1'>" +
                    "<input type='radio' value='Don't make' name='tuyChon'>Don't make" +
                    "</div>" +
                    "<div class='btn1'>" +
                    "<input type='radio' value='Take away' name='tuyChon'>Take away" +
                    "</div>" +
                    "</figcaption>" +
                    "</figure>" +
                    "<footer>" +
                    "<div id='footer1'><i class='mdi mdi-minus-circle' onclick='sub()'></i></div>" +
                    "<div id='footer2'><input type='text' id='number' name='number' value='1'/></div>" +
                    "<div id='footer3' onclick='driectPage()' style='font-size: 14px'>add to order</div>" +
                    "<div id='footer4'><i class='mdi mdi-plus-circle' onclick='add()'></i></div>" +
                    "</footer>");
            }

        },
        dataType: 'json'
    });
}

function sub(){
    var inputNum = document.getElementById("number").value;
    if(inputNum>1)
        document.getElementById("number").value = inputNum-1;
}

function add(){
    var inputNum = document.getElementById("number").value;
    document.getElementById("number").value = parseInt(inputNum)+1;
}
function driectPage(){
    //window.location.href = "functionMenu.php?id="+id+"&name="+name+"&price="+price+"&number="+document.getElementById('number').value+"&img="+img;
    $('#myModal').modal('hide');
    $('#addData').append(
        "<div class='row orderDetail' id = 'foo"+id+"' >"+
        "<div style='display: none' id='idTT'>"+id+"@@@"+
        "</div>"+
        "<div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>"+
        "<img class='food-img' src='"+img+"' alt='food'>"+
        "</div>"+
        "<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 food-name'>"+
        "<div class='food-name-sl' >"+name+"</div>"+
        "<div class='food-price-gi' id='priceTT'>"+price+"<span style='display: none'>@@@</span></div>"+
        "<div class='price-vnd pull-left'>x <div id='numberTT' style='float:right;'>"+document.getElementById('number').value+"<span style='display: none'>@@@</span></div></div>"+
        "</div>"+
        "<div class='col-lg-2 col-md-2 col-sm-2 col-xs-2'>"+
        "<div class='cancel-btn'>"+
        "<a onclick='deleteData("+id+","+price+","+document.getElementById('number').value+")' class='fa fa-times-circle pull-right' aria-hidden='true'></a>"+
        "</div>"+
        "</div>"+
        "</div>"
    );
    sum = sum + parseInt(price)*parseInt(document.getElementById('number').value);
    $('#totalPrice').empty();
    //console.log(sum);
    $('#totalPrice').append("Tổng tiền: "+sum);
}
function deleteData(idDel, priceDel, numDel) {
    $("#foo"+idDel).empty();
    sum = sum - parseInt(priceDel)*parseInt(numDel);
    $('#totalPrice').empty();
    //console.log(sum);
    $('#totalPrice').append("Tổng tiền: "+sum);
}
function postData() {
    var idTT = $( "div#idTT" ).text();
    console.log(idTT);
    var priceTT = $( "div#priceTT" ).text();
    console.log(priceTT);
    var numberTT = $( "div#numberTT" ).text();
    console.log(numberTT);
    console.log("sendData.php?id="+idTT+"&price="+priceTT+"&number="+numberTT);
    window.location.href = "sendData.php?id="+idTT+"&price="+priceTT+"&number="+numberTT;
}