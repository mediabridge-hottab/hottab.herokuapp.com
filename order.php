<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hottab</title>

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

<body onload="startTime()">
<?php
    session_start();
    $menuList = isset($_SESSION['order'])? $_SESSION['order'] : '';
    $name = explode('&',$menuList['name']);
    $price = explode('&',$menuList['price']);
    $number = explode('&',$menuList['number']);
    $img = explode('&',$menuList['img']);
    $sum = 0;
   // unset($_SESSION['order']);
?>
<!-- On-keyboard -->

        <!-- Page Content -->
            <div class="row a2">
                <div class="col-lg-8 col-lg-push-2 a2">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                    </div>
                    <div class="row">
                        <div id="food-title">FOODS</div>

                    </div>
                </div>
            </div>
            <div class="row a3">
                <div class="col-lg-8 col-lg-push-2 a3">
                <?php for ($i = 0; $i < sizeof($name); $i++){
                    $sum += $price[$i]*$number[$i];
                ?>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <img class="food-img" src="<?php echo isset($img[$i])? $img[$i]: '' ?>" alt="food">
                            <div class="food-name">
                                <div class="food-name-sl"><?php echo isset($name[$i])? $name[$i]: '' ?></div>
                                <div class="food-price-gi"><?php echo isset($price[$i])?$price[$i]: '' ?></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="cancel-btn"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
                            <div class="price-vnd"><?php echo isset($number[$i])? $number[$i]: '' ?></div>
                        </div>
                    </div>
                    <hr>
            <?php } ?>
                </div>
                <div class="col-lg-8 col-lg-push-2 a3">
                    <div class="food-name-sl">Tổng tiền: <?php echo number_format($sum); ?></div>
                </div>
            <footer class="footer">
                <div class="col-lg-8 col-lg-push-2 checkout">
                    <button class="btn btn-default print-button" id="printer-call">order</button>
                </div>
            </footer>
        <!-- /.container -->
    </div>
<!-- ./end -->

<!-- jQuery -->
    <script src="js/jquery.js"></script>
<!-- ./end -->

<!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<!-- ./end -->

<!-- Function -->
    <script src="js/language.js"></script>
    <script src="js/order.js"></script>
<!-- ./end -->

</body>

</html>