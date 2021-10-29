<?php
include_once "header.php";
?>
<div class="formstyle">

    <h2>Log In</h2>

    <form action="includes/login.inc.php" method="post">

        <div class="mb-3"> <input type="text" name="name" placeholder="Username/Email..." class="form-control"> </div>

        <div class="mb-3"> <input type="password" name="pwd" placeholder="Password..." class="form-control"> </div>
        <button type="submit" name="submit" class="btn btn-primary">Log in</button>
    </form>

    <?php
    if (isset($_GET["error"])) {

        if ($_GET["error"] === "emptyinput") {
            echo "<p>Fill in all fields</p>";
        } 
        else if ($_GET["error"] === "wronglogin") {
            echo "<p>Incorrect login information</p>";
        }
        
    }

    ?>

</div>
<?php
include_once "footer.php";
?>