<?php
include_once("../inc/db.inc.php");
include_once("../inc/function.inc.php");
include_once("../header/header.php");

// showproducts($conn, "moederbord", "../img/pc-clipart-gaming-computer-5.png", "20");
?>

<section class="card-section">



<?php
showproducts($conn, 1, "SELECT * FROM product");
?>
</section>