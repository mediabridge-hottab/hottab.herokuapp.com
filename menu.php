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
    <script type="text/javascript" src="http://rilwis.googlecode.com/svn/trunk/weather.min.js"></script>

    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
                    h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
    </script>
</head>

<body onload="startTime()">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <a class="navbar-brand" href="index.php">
        <img src="img/avatar.png">
        <p>DIGITAL MENU</p>
    </a>
    <div class="dropdown">
        <ul>
            <div class="dropdown-menu right">
                <i class="mdi mdi-tooltip-text"> Demo feedback </i>
            </div>
        </ul>
    </div>
    <div class="flag">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><img id="flagC" src="img/flags/en.png"></button>
            <ul id="test" class="dropdown-menu">
                <li class="vi fl">vi</li>
                <li class="en fl">en</li>
                <li class="ja fl">ja</li>
                <li class="ko fl">ko</li>
                <li class="th fl">th</li>
                <li class="zh-cn fl">zh-cn</li>
                <li class="fr fl">fr</li>
                <li class="es fl">es</li>
            </ul>
        </div>
    </div>
    <div class="timeBar"><div id="txt"></div></div>

</nav>

<!-- Page Content -->
<div class="container1">
    <div class="left">
        <div class="item">
            <a href="#">
                <p class="item-img mdi mdi-silverware-variant">Digital Minibar</p>
            </a>
        </div>
        <div class="item">
            <a href="#">
                <p class="item-img mdi mdi-food">Digital Menu</p>
            </a>
        </div>
        <div class="item">
            <a href="#">
                <p class="item-img mdi mdi-account-card-details">Payment Options</p>
            </a>
        </div>
        <div class="item">
            <a href="#">
                <p class="item-img mdi mdi-facebook-box">Social Interaction</p>
            </a>
        </div>

    </div>
    <div class="right">
        <?php include 'admin/function.php'?>
        <?php $menu = getAllCate(); ?>
        <?php while($row = mysqli_fetch_array($menu)){ ?>
        <div class="item">
            <a>
                <figure class="wp-caption">
                    <img class="demo" src="admin/img/icon/<?php echo $row['icon'] ?>" alt="Image" />
                    <figcaption class="wp-caption-text"><?php echo $row['name'] ?></figcaption>
                </figure>
            </a>
        </div>
        <?php } ?>
    </div>
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/language.js"></script>
</body>

</html>
