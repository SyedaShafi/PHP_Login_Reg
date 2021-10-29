<?php
session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>PHP Project 01</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="discover.php">About Us</a>
                    <a class="nav-link" href="blog.php">Find Blogs</a>
                    <?php
                    if(isset($_SESSION["useruid"]))
                    {

                        echo "<a class='nav-link' href='profile.php'>Profile</a>";
                        echo "<a class='nav-link' href='includes/logout.inc.php'>Log out</a> ";
                    }

                    else{
                        echo "<a class='nav-link' href='signup.php'>Sign Up</a>";
                        echo "<a class='nav-link' href='login.php'>Log in</a> ";
                       
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>