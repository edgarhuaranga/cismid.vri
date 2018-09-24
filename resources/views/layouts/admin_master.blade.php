<!DOCTYPE html>
<html lang="en">

<head>
    <title>CISMID UNI</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/plugins/flexslider/flexslider.css">
    <link id="theme-style" rel="stylesheet" href="/css/app.css">
</head>

<body class="home-page">
    <div class="wrapper">
        @include('layouts.header')
        @include('layouts.admin_navigation')
        @yield('content')
        @include('layouts.footer')

    <!-- Javascript -->
    <script type="text/javascript" src="plugins/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="plugins/popper.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/back-to-top.js"></script>
    <script type="text/javascript" src="plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="plugins/jflickrfeed/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
