var tokenKey = $( "div.tokenKey" ).text();
var name, price, img, id;
function viewMenu(keyMenu) {
    $.ajax({
        url: 'http://api.hottab.pw/admin/new-foods/' + keyMenu + '?lang=vi&token=' + tokenKey.trim(),
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
    window.location.href = "functionMenu.php?id="+id+"&name="+name+"&price="+price+"&number="+document.getElementById('number').value+"&img="+img;
}