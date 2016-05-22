<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Locus 2016</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <style>
    #header-section{
        background-image: url("<?php echo get_template_directory_uri().'/img/header-bg.jpg'; ?>");
        color: #fff;
        height: 100%;
        background-color: #404040;
        background-blend-mode: multiply;
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
    }
    #footer-section{
        background-image: url("<?php echo get_template_directory_uri().'/img/header-bg.jpg'; ?>");
        color: #fff;
        min-height: 300px;
        background-color: #404040;
        background-blend-mode: multiply;
        background-size: cover;
        background-position: center center;
        padding-top: 50px;
        background-attachment: fixed;
    }
    </style>
    <?php wp_head(); ?>
</head>

<body >
    <div id="header-section">
        <div id="header-menu">
            <a href="http://locus.ioe.edu.np/leblog/" class="menu-item">Blog</a>
            <a href="http://locus.ioe.edu.np/leevent/" class="menu-item">Events</a>
            <a href="http://locus.ioe.edu.np/legallery/" class="menu-item">Gallery</a>
        </div>
        <div class="site-info">
            <div>
                <img id="title" src="<?php echo get_template_directory_uri().'/img/title.png'; ?>">
            </div>
            <!-- <div>
                <div class="title">Locus <span class="year">2016<span></div>
                <div class="extra">Empowering Innovation</div>
            </div> -->
            <div id="countdown-timer" class="hidden">
                <span id="days-remain" class="time-element"><span class="time"></span><span class="label ">d</span></span>
                <span id="hours-remain" class="time-element"><span class="time"></span><span class="label ">h</span></span>
                <span id="mins-remain" class="time-element"><span class="time"></span><span class="label ">m</span></span>
                <span id="secs-remain" class="time-element"><span class="time"></span><span class="label ">s</span></span>
            </div>
        </div>
    </div>
