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

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
    <link href="css/materialdesignicons.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div id="top-panel-ent">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div id="top-icon"><a href="index.php"><img src="img/back-button.png" alt="back-button.png" class="img-responsive"></a></div>
            <div id="top-title">Digital menu</div>
            <a href="order.php"><img id="order-image" src="img/menu/order.png" alt=""></a>
        </div>
    </nav>
</head>

<body onload="startTime()">
<!-- Page Content -->
<div class="container1">
    <div class="tokenKey" id="tokenKey" style="display: none" >
        <?php
            session_start();
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
    <div class="right" id = 'stars'>




           <!-- <a>
                <figure class="wp-caption">
                    <img class="demo" src="admin/img/icon " alt="Image" />
                    <figcaption class="wp-caption-text"> </figcaption>
                </figure>
            </a> -->

    </div>
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/language.js"></script>
<script src="js/menu.js"></script>
</body>

</html>