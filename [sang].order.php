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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/[sang].order.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>

    <!-- Checkout -->
        <!-- The Modal -->
        <div id="checkout-div" class="modal" style="display: none;">

          <!-- Modal content -->
            <div class="modal-content col-lg-8 col-lg-push-2">
                <div class="modal-header">
                    <span class="close" id="checkout-close">&times;</span>
                    <h3>Tổng  <b>1,278,000 đ</b></h3>
                    <h2>Atest@test.com</h2>
                </div>
                <div class="modal-body">
                    <p>Remain:  <b>1,278,000 đ</b></p>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon" id="sizing-addon1">=</span>
                                <input type="text" class="form-control" aria-label="...">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span id="currency-unit">  VND  </span><span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" id="vnd">VND</a></li>
                                        <li><a href="#" id="usd">USD</a></li>
                                        <li><a href="#" id="jpy">JPY</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <i class="fa fa-dollar" aria-hidden="true"></i>
                        <h4>Tiền mặt</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                        <h4>Thẻ</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <i class="fa fa-gift" aria-hidden="true"></i>
                        <h4>Loyalty</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h4>Trả sau</h4>
                    </div>
                </div>
            </div>

        </div>
    <!-- ./end -->

    <!-- Main -->
        <div id="main">
            <!-- Navigation -->
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div id="top-panel-ent">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div id="top-icon"><a href="menu.php" id="back"><i class="mdi mdi-arrow-left"></i></a></div>
                        <div id="top-title">Quick service</div>
                        <div id="top-order-id">#LN 001</div>
                        <div id="order-price">639,000 đ</div>
                        <div class="btn-group" role="group" aria-label="...">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i id="dine-in-icon" class="mdi mdi-clock-fast"></i></button>
                                <ul class="dropdown-menu">
                                    <li><a id="dine-in" href="#">DINE-IN</a></li>
                                    <li><a id="take-away" href="#">TAKE AWAY</a></li>
                                    <li><a id="delivery" href="#">DELIVERY</a></li>
                                    <li><a id="quick-service" href="#">QUICK SERVICE</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            <!-- /.nav -->

            <!-- Page Content -->
                <div class="row a3">
                    <div class="col-lg-8 col-lg-push-2 a3">
                    <?php for ($i = 0; $i < 10; $i++){  ?>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <img class="food-img" src="img/menu/food.jpg" alt="food">
                                <div class="food-name">
                                    <div class="food-name-sl">Greek Salad x1</div>
                                    <div class="food-price-gi">test 10%</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="cancel-btn"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
                                <div class="price-vnd">108,000 đ</div>
                            </div>
                        </div>
                        <hr>
                    <?php   } ?>
                    </div>
                </div>
                <footer class="footer">
                    <button class="btn btn-success checkout print-button" id="checkout-btn">Thanh toán</button>
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
        <script src="js/[sang].order.js"></script>
    <!-- ./end -->

</body>

</html>