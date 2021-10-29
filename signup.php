<?php
include_once "header.php";
?>
<div class="formstyle">

    <h2>Sign Up</h2>

    <form action="includes/signup.inc.php" method="post">

        <div class="mb-3"> <input type="text" name="name" placeholder="Full name..." class="form-control"> </div>

        <div class="mb-3"> <input type="text" name="email" placeholder="Email..." class="form-control"> </div>

        <div class="mb-3"> <input type="text" name="uid" placeholder="Username..." class="form-control"> </div>

        <div class="mb-3"> <input type="password" name="pwd" placeholder="Password..." class="form-control"> </div>

        <div class="mb-3"> <input type="password" name="pwdrepeat" placeholder="Repeat password..." class="form-control"> </div>

        <button type="submit" name="submit" class="btn btn-primary">Sign up</button>
    </form>
    
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields</p>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username</p>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email</p>";
        } else if ($_GET["error"] == "passworddonotmatch") {
            echo "<p>Passwords doesn't match</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong , try again!</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already exists</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>Login successful</p>";
        }
    }

    ?>

</div>



<?php
include_once "footer.php";
?>