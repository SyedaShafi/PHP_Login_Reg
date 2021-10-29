<?php
include_once "header.php";
?>

<section>
  <?php
  if (isset($_SESSION["useruid"])) {
    echo "<p class='boxx'> Hello There " . $_SESSION["useruid"] . "</p>";
  }
  ?>

  <p class="boxx">Some contents</p>
</section>

<?php
include_once "footer.php";
?>