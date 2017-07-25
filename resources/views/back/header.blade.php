<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home News | Admin</title>
    
    <meta name="description" content="Home News Admin">
    <meta name="author" content="">    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="images/metis-tile.png" />    
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.css') }}">    
    <!-- Font Awesome -->
    <!--<link type="text/css" rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.css') }}">  --> 
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
    <!-- Metis core stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}">    
    <!-- metisMenu stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/plugins/metismenu/metisMenu.css') }}">
    <!-- onoffcanvas stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/plugins/onoffcanvas/onoffcanvas.css') }}">    
    <!-- animate.css stylesheet -->
     <link type="text/css" rel="stylesheet" href="{{ asset('/plugins/animate.css/animate.css') }}">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/"
        };
    </script>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style-switcher.css') }}"> 
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/theme.less') }}">   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
    @include('front.header')