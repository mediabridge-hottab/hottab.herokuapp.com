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
    <link href="css/style.css" rel="stylesheet">
    <link href="weather/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://rilwis.googlecode.com/svn/trunk/weather.min.js"></script>

    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

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

<body onload="startTime()" >

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <a class="navbar-brand" href="#">
            <img src="img/avatar.png">
            <p>Guest</p>
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
                    <li class="vi fl">Tiếng Việt</li>
                    <li class="en fl">English</li>
                    <li class="ja fl">日本語</li>
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
            <div class="weather-data">

                <div class="weather" id="weather"></div>
            </div>
            <div class="news-data">
                <div class="item">
                    <a href="#"><img src="img/news/img.jpg"></a>
                    <a href="#"><p>Vườn quốc gia phong nha kẻ bàng</p></a>
            
                </div>
                <div class="item">
                    <a href="#"><img src="img/news/img.jpg"></a>
                    <a href="#"><p>Vườn quốc gia phong nha kẻ bàng</p></a>
                   
                </div>
                <div class="item">
                    <a href="#"><img src="img/news/img.jpg"></a>
                    <a href="#"><p>Vườn quốc gia phong nha kẻ bàng</p></a>
                
                </div>
            </div>
            <div class="news-title">
                <a href="news.php">
                    <figure class="wp-caption">
                        <img class="demo" src="img/video/img.jpg" alt="Image" />
                        <figcaption class="wp-caption-text" id="lang0">News </figcaption>
                    </figure>
                </a>
            </div>
            <div class="event">
                <a href="#">
                    <figure class="wp-caption">
                        <img class="demo" src="img/event/event.png" alt="Image" />
                        <figcaption class="wp-caption-text" id="lang1">Event</figcaption>
                    </figure>
                </a>
            </div>
        </div>            
        <div class="right">
            <div class="right-top">
                <div class="welcome-to">
                    <a href="welcome.php"><img src="img/welcome/welcome.jpg"></a>
                </div>
                <div class="menu">
                    <a href="menu.php">
                        <figure class="wp-caption">
                            <img class="demo" src="img/menu/food.jpg" alt="Image" />
                            <figcaption class="wp-caption-text" id="lang2">Menu</figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="right-bottom">
                <div class="hotel">
                    <a>
                        <figure class="wp-caption">
                            <img class="demo" src="img/room/room.jpg" alt="Image" />
                            <figcaption class="wp-caption-text" id="lang3">Hotel Services</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="hotel">
                    <a href="travel.php">
                        <figure class="wp-caption">
                            <img class="demo" src="img/map/city.png" alt="Image" />
                            <figcaption class="wp-caption-text" id="lang4">City Guide</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="hotel" STYLE="border-right: 0;">
                    <a href="video/entertainment.html">
                        <figure class="wp-caption">
                            <img class="demo" src="img/video/video.png" alt="Image" />
                            <figcaption class="wp-caption-text" id="lang5">Video</figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/language.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js'></script>
    <script src="weather/js/ip.js"></script>
    <script src="weather/js/index.js"></script>
</body>

</html>