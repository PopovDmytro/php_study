<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS study</title>

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo" rel="stylesheet">
    <!--font-family: 'Swanky and Moo Moo', cursive;-->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
    <!--font-family: 'Nanum Brush Script', cursive;-->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Pen+Script" rel="stylesheet">
    <!--font-family: 'Nanum Pen Script', cursive;-->
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700|Hanalei+Fill|Lato:400,700,900" rel="stylesheet">
    <!--font-family: 'Hanalei Fill', cursive;-->
    <!--font-family: 'Lato', sans-serif;-->
    <!--font-family: 'Assistant', sans-serif;-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!--/-->


    <!--  bootstrap  -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!--foundation-->
    <link rel="stylesheet" href="../front/css/app.css">
    <link rel="stylesheet" href="../front/css/foundation.min.css">
    <!--custom styles-->
    <link rel="stylesheet" href="../front/css/styles.css">


</head>
<body>
<!--header-->
<header>
    <div class="title-bar stacked-for-medium" data-responsive-toggle="responsive-menu" data-hide-for="large">
        <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
        <div class="title-bar-title"></div>
    </div>

    <div class="top-bar" id="responsive-menu">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text">
                    <a href="/index.php">
                        <img class="header-logo" src="../front/images/icons/broccoli.png" alt="My first CMS">
                    </a>
                </li>
                <!--<li class="has-submenu">
                    <a href="#0">One</a>
                    <ul class="submenu menu vertical" data-submenu>
                        <li><a href="#0">One</a></li>
                        <li><a href="#0">Two</a></li>
                        <li><a href="#0">Three</a></li>
                    </ul>
                </li>-->

                <?php

                $query = "SELECT * FROM categories";
                $select_all_categories_query = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                    $cat_title = $row['cat_title'];
                    $cat_id = $row['cat_id'];

                    echo "<li><a href='?category=$cat_id'>{$cat_title}</a></li>";
                }

                ?>
            </ul>
        </div>
        <div class="top-bar-right">
            <!--<ul class="menu">
                <li><input type="search" placeholder="Search"></li>
                <li><button type="button" class="button">Search</button></li>
            </ul>-->

            <?php

                if(isset($_SESSION['user_role'])) {

                    echo "<a href='admin/logout.php'>Log Out</a>";

                    if(isset($_GET['p_id'])) {
                        echo "<a href='admin/posts.php?source=edit_post&p_id={$_GET['p_id']}'>edit post</a>";
                    }

                } else {
                    echo "<a href='?registration'>registration</a>";
                }
            ?>

        </div>
    </div>
</header>
<!--end header-->


<?php ?>