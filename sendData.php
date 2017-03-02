<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hottab</title>

    <link href="img/favicon.ico" rel="shortcut icon">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
    <link href="css/materialdesignicons.min.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link rel="stylesheet" href="css/order.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
session_start();
//if(isset($_SESSION['order'])){
date_default_timezone_set("Asia/Ho_Chi_Minh");
//$menuList = isset($_SESSION['order'])? $_SESSION['order'] : '';
//$name = explode('&',$menuList['name']);
$price = explode('@@@',$_GET['price']);
$number = explode('@@@',$_GET['number']);
//$img = explode('&',$menuList['img']);
$id = explode('@@@',$_GET['id']);
//unset($_SESSION['order']);
$sum = 0;

//var_dump($price);
//var_dump($id);
//var_dump($number);
 for ($i = 0; $i < sizeof($number); $i++){
                        $sum += $price[$i]*$number[$i];
                     
 }
 //var_dump(($sum));
for ($i = 0; $i < sizeof($number)-1; $i++) {

    $data[$i] = array(
        "\r\n           \"$i\": {
            \r\n            \"priority\": \"0\",
            \r\n            \"is_wasted\": \"0\",
            \r\n            \"total_discount\": \"0\",
            \r\n            \"total_tax\": \"0.0\",
            \r\n            \"quantity\": \"$number[$i]\",
            \r\n            \"id\": \"$id[$i]\",
            \r\n            \"total\": \"$price[$i]\",
            \r\n            \"splitInfo\": \"[]\",
            \r\n            \"menu_amount\": \"$price[$i]\",
            \r\n            \"type\": \"\",
            \r\n            \"discounts\": \"[{\\\"type\\\":0,\\\"id\\\":99,\\\"name\\\":\\\"My Holiday Discounts\\\",\\\"amount\\\":0}]\",
            \r\n            \"do_not_make\": \"0\",
            \r\n            \"price\": \"$price[$i]\",
            \r\n            \"is_take_away\": \"0\",
            \r\n            \"is_foc\": \"0\",
            \r\n            \"tax\": \"0.0\",
            \r\n            \"menu_price\": \"$price[$i]\",
            \r\n            \"amount\": \"$price[$i]\",
            \r\n            \"quantity_refunded\": \"0.0\"
            \r\n        "
    );
}
?>


    <!-- /.container -->
</div>
<div class="dataSend" id="dataSend">

    <?php

    for ($i = 0; $i < sizeof($number)-1; $i++) {
        $str[$i] = "\r\n            \"$i\": {
    \r\n            \"priority\": \"0\",
    \r\n            \"is_wasted\": \"0\",
    \r\n            \"total_discount\": \"0\",
    \r\n            \"total_tax\": \"0.0\",
    \r\n            \"quantity\": \"$number[$i]\",
    \r\n            \"id\": \"$id[$i]\",
    \r\n            \"total\": \"$price[$i]\",
    \r\n            \"splitInfo\": \"[]\",
    \r\n            \"menu_amount\": \"$price[$i]\",
    \r\n            \"type\": \"\",
    \r\n            \"discounts\": \"[{\\\"type\\\":0,\\\"id\\\":99,\\\"name\\\":\\\"My Holiday Discounts\\\",\\\"amount\\\":0}]\",
    \r\n            \"do_not_make\": \"0\",
    \r\n            \"price\": \"$price[$i]\",
    \r\n            \"is_take_away\": \"0\",
    \r\n            \"is_foc\": \"0\",
    \r\n            \"tax\": \"0.0\",
    \r\n            \"menu_price\": \"$price[$i]\",
    \r\n            \"amount\": \"$price[$i]\",
    \r\n            \"quantity_refunded\": \"0.0\"
    \r\n        }";
    }
    /*$str[2] = "\r\n            \"1\": {
        \r\n            \"priority\": \"0\",
        \r\n            \"is_wasted\": \"0\",
        \r\n            \"total_discount\": \"0\",
        \r\n            \"total_tax\": \"0.0\",
        \r\n            \"quantity\": \"$number[1]\",
        \r\n            \"id\": \"$id[1]\",
        \r\n            \"total\": \"$price[1]\",
        \r\n            \"splitInfo\": \"[]\",
        \r\n            \"menu_amount\": \"$price[1]\",
        \r\n            \"type\": \"\",
        \r\n            \"discounts\": \"[{\\\"type\\\":0,\\\"id\\\":99,\\\"name\\\":\\\"My Holiday Discounts\\\",\\\"amount\\\":0}]\",
        \r\n            \"do_not_make\": \"0\",
        \r\n            \"price\": \"$price[1]\",
        \r\n            \"is_take_away\": \"0\",
        \r\n            \"is_foc\": \"0\",
        \r\n            \"tax\": \"0.0\",
        \r\n            \"menu_price\": \"$price[1]\",
        \r\n            \"amount\": \"$price[1]\",
        \r\n            \"quantity_refunded\": \"0.0\"
        \r\n        }";*/

    $str1 = "{\r\n    \"items\":  {
    ".$str[0].(isset($str[1])? ','.$str[1]:'').(isset($str[2])? ','.$str[2]:'').(isset($str[3])? ','.$str[3]:'').(isset($str[4])? ','.$str[4]:'').
        (isset($str[5])? ','.$str[5]:'').
        (isset($str[6])? ','.$str[6]:'').
        (isset($str[7])? ','.$str[7]:'').
        (isset($str[8])? ','.$str[8]:'').
        (isset($str[9])? ','.$str[9]:'').
        (isset($str[10])? ','.$str[10]:'').
        (isset($str[11])? ','.$str[11]:'').
        (isset($str[12])? ','.$str[12]:'').(isset($str[13])? ','.$str[13]:'').(isset($str[14])? ','.$str[14]:'').
        (isset($str[15])? ','.$str[15]:'').
        (isset($str[16])? ','.$str[16]:'').
        (isset($str[17])? ','.$str[17]:'').
        (isset($str[18])? ','.$str[18]:'').
        (isset($str[19])? ','.$str[19]:'').
        (isset($str[20])? ','.$str[20]:'').
        (isset($str[21])? ','.$str[21]:'').
        (isset($str[22])? ','.$str[22]:'').(isset($str[23])? ','.$str[23]:'').(isset($str[24])? ','.$str[24]:'').
        (isset($str[25])? ','.$str[25]:'').
        (isset($str[26])? ','.$str[26]:'').
        (isset($str[27])? ','.$str[27]:'').
        (isset($str[28])? ','.$str[28]:'').
        (isset($str[29])? ','.$str[29]:'').
        (isset($str[30])? ','.$str[30]:'').
        (isset($str[31])? ','.$str[31]:'').
        (isset($str[32])? ','.$str[32]:'').(isset($str[33])? ','.$str[33]:'').(isset($str[34])? ','.$str[34]:'').
        (isset($str[35])? ','.$str[35]:'').
        (isset($str[36])? ','.$str[36]:'').
        (isset($str[37])? ','.$str[37]:'').
        (isset($str[38])? ','.$str[38]:'').
        (isset($str[39])? ','.$str[39]:'').
        (isset($str[40])? ','.$str[40]:'').
        (isset($str[41])? ','.$str[41]:'').
        (isset($str[42])? ','.$str[42]:'').(isset($str[43])? ','.$str[43]:'').(isset($str[44])? ','.$str[44]:'').
        (isset($str[45])? ','.$str[45]:'').
        (isset($str[46])? ','.$str[46]:'').
        (isset($str[47])? ','.$str[47]:'').
        (isset($str[48])? ','.$str[48]:'').
        (isset($str[49])? ','.$str[49]:'').
        (isset($str[50])? ','.$str[50]:'').
        (isset($str[51])? ','.$str[51]:'').
        (isset($str[52])? ','.$str[52]:'').(isset($str[53])? ','.$str[53]:'').(isset($str[54])? ','.$str[54]:'').
        (isset($str[55])? ','.$str[55]:'').
        (isset($str[56])? ','.$str[56]:'').
        (isset($str[57])? ','.$str[57]:'').
        (isset($str[58])? ','.$str[58]:'').
        (isset($str[59])? ','.$str[59]:'').
        "
    \r\n    }";
    $orderDetail = $str1.",
    \r\n    \"fcm_token\": \"ek9SVXiUK9A:APA91bE7Nddvi4ETUAX_YAFiq8ggBWPsk3BKJC3YW5vH9OBLUl6h-otfzav8eC2jVoHshhb4kcSlaMfjbA8r7cIu_7almsgS70JGiIsZeH2ie-kfINhhO3AOWoFGC08GGByLX2aO6Z-U\",
    \r\n    \"mCustomerList\": \"[{\\\"name\\\":\\\"C1\\\",\\\"id\\\":0,\\\"paid\\\":false},{\\\"name\\\":\\\"C2\\\",\\\"id\\\":1,\\\"paid\\\":false}]\",
    \r\n    \"menu_subtotal\": \"130000.0\",
    \r\n    \"subtotal\": \"130000.0\",
    \r\n    \"orderLogs\": \"null\",
    \r\n    \"type\": \"1\",
    \r\n    \"card_refunded\": \"0.0\",
    \r\n    \"discounts\": [{
    \r\n        \"amount\": \"0.0\",
    \r\n        \"id\": \"99\",
    \r\n        \"type\": \"0\",
    \r\n        \"name\": \"\"
    \r\n    }],
    \r\n    \"is_online_order\": \"false\",
    \r\n    \"transaction_id\": \"".date("YmdHis")."\",
    \r\n    \"customer_number\": \"2\",
    \r\n    \"cash_refunded\": \"0.0\",
    \r\n    \"waiter_note\": \"\",
    \r\n    \"total\": \"$sum\",
    \r\n    \"unique_id\": \"".date("YmdHis")."\",
    \r\n    \"room_id\": \"42355\",
    \r\n    \"updated_at\": \"".date("Y-m-d H:i:s")."\",
    \r\n    \"total_tax\": \"0.0\",
    \r\n    \"guest_id\": \"21\",
    \r\n    \"customer_id\": \"395\",
    \r\n    \"pusher_socket_id\": \"209131.607870\",
    \r\n    \"order_number\": \"". "MB " . date("Ymd His")."\",
    \r\n    \"status\": \"1\",
    \r\n    \"customer_classes\": \"\",
    \r\n    \"device_uuid\": \"3345127333aede4c\",
    \r\n    \"total_discount\": \"13000.0\",
    \r\n    \"created_at\": \"".date("Y-m-d H:i:s")."\",
    \r\n    \"user_id\": \"868\",
    \r\n    \"hotel_id\": 172
    \r\n}";
    $curl = curl_init();
    //var_dump($str);
    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://api.hottab.pw/v2/cashier/food-orders/create-or-update?token=".$_SESSION['tokenKey'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>$orderDetail,
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/json",
            "postman-token: 67376fb5-6bba-cc6f-7053-023631c5f0aa"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
       // echo "cURL Error #:" . $err;
    } else {
       $_SESSION['sess']=1;
     //   print_r(date("Y-m-d H:i:s"));
       // print_r($response);
        header("Location: menu.php");
    //}
    }?>
</div>
<!-- ./end -->

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- ./end -->

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- ./end -->


<!-- ./end -->

</body>

</html>