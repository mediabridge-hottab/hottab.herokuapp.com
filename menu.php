<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HotTab</title>

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
                    CURLOPT_URL => "http://api.hottab.co/admin/login?email=hoteltablet@hottab.net&password=123456",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"password\"\r\n\r\n123456\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"email\"\r\n\r\nhoteltablet@hottab.net\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
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


                            <!-- Page Content -->
                            <div class="row a3 addData">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-push-1 col-md-push-1 col-sm-push-1 col-xs-push-1 a3"  id="addData">

                                </div>
                                <!-- /.container -->
                            </div>
                            <!-- ./end -->
                    </div>
                    <div class="modal-footer">
                        <div class="col-lg-8 col-lg-push-2 a3">
                            <div class="food-name-sl" id="totalPrice">Tổng tiền: </div>
                        </div>
                        <div class="col-lg-10 col-lg-push-1 checkout">
                            <a class="btn btn-default print-button" id="printer-call" onclick="postData()">CONFIRM</a>
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