var tokenKey = $( "div.seesion" ).text();
var keyMenu = $( "div.keyMenu" ).text();
var name, price, img;
$(document).ready(function() {
    $.ajax({
        url: 'http://api.hottab.pw/admin/new-foods/'+keyMenu+'?lang=vi&token='+tokenKey.trim(),
        type:'get',
        success: function(data) {
            name = data['data']['name'];
            price = data['data']['price'];
            img = data['data']['intro_img'];
            $('#contentMenu').append("<div class='top'><p class='menuName'>"+data['data']['name']+"</p><p class='price'>"+data['data']['price']+"</p></div>"+
                                    "<img src='"+data['data']['intro_img_original']+"'>"+
                                    "<input type='radio' value='Wastage' name='tuyChon'>Wastage"+
                                    "<input type='radio' value='FOC' name='tuyChon'>FOC"+
                                    "<input type='radio' value='Don't make' name='tuyChon'>Don't make"+
                                    "<input type='radio' value='Take away' name='tuyChon'>Take away"+
                                    "<div class='bootom'>"+
                                    "<p onclick='sub()'>-</p>"+
                                    "<input type='text' id='number' name='number' value='2'/>"+
                                    "<p onclick='driectPage()' style='font-size: 14px'>add to order</p>"+
                                    "<p onclick='add()'>+</p>"+
                                    "</div>");
        },
        dataType: 'json'
    });
});

function sub(){
    var inputNum = document.getElementById("number").value;
    document.getElementById("number").value = inputNum-1;
}

function add(){
    var inputNum = document.getElementById("number").value;
    document.getElementById("number").value = parseInt(inputNum)+1;
}
function driectPage(){
    window.location.href = "functionMenu.php?name="+name+"&price="+price+"&number="+document.getElementById('number').value+"&img="+img;
}