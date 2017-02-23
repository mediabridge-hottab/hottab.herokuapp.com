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
    <link href="css/viewMenu.css" rel="stylesheet">

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
            <div id="top-icon"><a href="menu.php"><img src="img/back-button.png" alt="back-button.png" class="img-responsive"></a></div>
            <div id="top-title">Digital menu</div>
            <a href="order.php"><img id="order-image" src="img/menu/order.png" alt=""></a>
        </div>
    </nav>
</head>

<body>
<!-- Page Content -->
<div class="container1">
    <div class="col-lg-4">
        <div class="seesion" style="display: none;"><?php session_start(); echo $_SESSION['tokenKey']; ?></div>
        <div class="keyMenu" style="display: none;"><?php echo $_GET['idMenu']; ?></div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id = "contentMenu">

    </div>
    <div class="col-lg-4">

    </div>
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/language.js"></script>
<script src="js/viewMenu.js"></script>
</body>

</html>