<!DOCTYPE html>
<html lang="en">

<head>

  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
  	<title>Event</title>

    <link href="img/favicon.ico" rel="shortcut icon">

    <!-- Library CSS -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css">

  	<!-- Custom CSS -->
  	<link rel="stylesheet" href="css/event.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  	<div id="googlemaps"></div>
    <div id="back"><i onclick="location.href = 'index.php';" class="mdi mdi-arrow-left"></i></div>
  	<div id="searchForm">
    	<input type="text" class="search-text" placeholder="Type to search">
    	<img src="img/event/loader.gif" alt="">
  	</div>
  
	<!-- Include the Google Maps API library - required for embedding maps -->
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD3T1GkWA5hNM8o3sTuZpP8WzaVfIXTWSU&callback=initMap"></script>

	<!-- Function -->
	<script type="text/javascript" src="js/event.js"></script>

</body>

</html>