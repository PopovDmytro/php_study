<?php
$homeurl = '/index.php';
$homepage = "/";
$currentpage = $_SERVER['REQUEST_URI'];
$isHome = $currentpage == $homepage or $currentpage == 'index.php' ? true : false ;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>

        body, html {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {

        }

        main {
            flex-grow: 1;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            min-height: 50px;
            position: relative;
            padding: 10px 0;
        }

    </style>

</head>
<body>

<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto" >
            <li class="nav-item <?php echo ( ($isHome)? "active" : null ) ; ?>">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/php_begin/OOP_begin/OOP/oop_begin.php">OOP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/php_begin/works_with_files/opening_files.php">Files</a>
            </li>
            <!---->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Exercises
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/php_begin/ajax_request.php">AJAX request page</a>
                    <a class="dropdown-item" href="/php_begin/form.php">Form</a>
                    <hr>
                    <!-- CRUD create read update                    -->
                    <a class="dropdown-item" href="/php_begin/mysqlegin/mysql/login.php">Login write data to db</a>
                    <a class="dropdown-item" href="/php_begin/mysqlegin/mysql/get_data_from_db.php">GET data form db</a>
                    <a class="dropdown-item" href="/php_begin/mysqlegin/mysql/delete_from_db.php">Delete from db</a>
                    <a class="dropdown-item" href="/php_begin/mysqlegin/mysql/update_db.php">Update db</a>
                    <hr>
                    <h6>TODO list</h6>
                    <a class="dropdown-item" href="/php_begin/practice_mysqli/todo_edit.php">todo edit</a>
                    <a class="dropdown-item" href="/php_begin/practice_mysqli/todo_show.php">todo show</a>

                </div>
            </li>
            <!---->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    web (get, post, session, cookies)
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/php_begin/web_with_php/get_superglobal.php">$_GET $_POST</a>
                    <a class="dropdown-item" href="/php_begin/web_with_php/cookies.php">cookies</a>
                    <a class="dropdown-item" href="/php_begin/web_with_php/session.php">Session</a>
                    <a class="dropdown-item" href="/php_begin/web_with_php/session1.php">Session 1</a>
                </div>
            </li>
            <!---->
        </ul>

        <form  class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

</header>

<script>

    var pathname = window.location.pathname;
    document.querySelector('[href="' + pathname + '"]').style.cssText = "font-weight: bold; color: #2a92a5";

</script>

<main>