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

    <!-- Library CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body <?php
session_start();
if(isset($_SESSION['sess'])){
    ?>
    onload="sess()"
    <?php
    unset($_SESSION['sess']);
}
?>>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div id="top-panel-ent">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div id="top-icon"><a href="index.php" id="back"><i class="mdi mdi-arrow-left"></i></a></div>
            <div id="top-title">Digital menu</div>
            <div id="order-div"><a data-toggle='modal' data-target='#myModal1' href="" id="order-btn"><i class="mdi mdi-basket"></i></a></div>
        </div>
    </nav>
    <!-- ./end nav -->
    
    <!-- Page Content -->
    <div class="container1">

        <div class="tokenKey" id="tokenKey" style="display: none">
            <?php

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://api.hottab.pw/admin/login?hotel_id=10",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"password\"\r\n\r\n123456\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"email\"\r\n\r\nninh@hottab.net\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
                    CURLOPT_HTTPHEADER => array(
                        "cache-control: no-cache",
                        "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
                        "postman-token: 7c59b465-3fc8-deeb-d212-03be6e92ca28"
                    ),
                ));

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                if ($err) {
                    echo "cURL Error #:" . $err;
                } else {
                    $pieces = explode("\"", $response);
                    echo ($pieces[5]);
                    $_SESSION['tokenKey'] = $pieces[5];
                }
            ?>
        </div>
        <div class="left" id="menuCate">

        </div>
        <div class="right" id ="stars">

        </div>

        <!-- Modal pre-order -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" id="modal-body">
                    
                </div>

            </div>
        </div>

        <!-- Modal order -->
        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">YOUR ORDER</h4>
                    </div>
                    <div class="modal-body" id="modal-body2">
                        <?php

                        if(isset($_SESSION['order'])){
                            $menuList = isset($_SESSION['order'])? $_SESSION['order'] : '';
                            $name = explode('&',$menuList['name']);
                            $price = explode('&',$menuList['price']);
                            $number = explode('&',$menuList['number']);
                            $img = explode('&',$menuList['img']);
                            $id = explode('&',$menuList['id']);
                            $sum = 0;
                             // echo '<pre>';
                             // print_r($number);
                             // echo '</pre>';
                            // die;
                            ?>

                            <!-- Page Content -->
                            <div class="row a3">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-push-1 col-md-push-1 col-sm-push-1 col-xs-push-1 a3">

                                    <?php for ($i = 0; $i < sizeof($name); $i++){
                                
                                        if($id[$i]!=''){
                                            $sum += $price[$i]*$number[$i];
                                            ?>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                   <img class="food-img" src="<?php echo ($img[$i]!=null && $img[$i] !='' && $img[$i]!='null')? $img[$i]: 'img/menu/default-menu-image.jpg' ?>" alt="food">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 food-name">
                                                    <div class="food-name-sl"><?php echo isset($name[$i])? $name[$i]: '' ?></div>
                                                    <div class="food-price-gi"><?php echo isset($price[$i])?$price[$i]: '' ?> &#8363;</div>
                                                    <div class="price-vnd pull-left">x <?php echo isset($number[$i])? $number[$i]: '' ?></div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                    <div class="cancel-btn">
                                                        <a href="deleteMenu.php?id=<?php echo $id[$i] ?>" class="fa fa-times-circle pull-right" aria-hidden="true"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        <?php } }?>
                                </div>
                                <!-- /.container -->
                            </div>
                            <!-- ./end -->
                        <?php }else{
                            echo "No data";
                        } ?>
                    </div>
                    <div class="modal-footer">
                        <div class="col-lg-8 col-lg-push-2 a3">
                            <div class="food-name-sl">Tổng tiền: <?php echo number_format($sum); ?> &#8363;</div>
                        </div>
                        <div class="col-lg-10 col-lg-push-1 checkout">
                            <a class="btn btn-default print-button" id="printer-call" href="sendData.php">CONFIRM</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Function -->
    <script src="js/menu.js"></script>
    <script src="js/viewMenu.js"></script>
    <script src="js/order.js"></script>
    <?php
    if(isset($_SESSION['delele'])){
    ?>
        <script>
            $(window).load(function(){
                $('#myModal1').modal('show');
            });
        </script>
    <?php
        unset($_SESSION['delele']);
}
?>
</body>

</html>