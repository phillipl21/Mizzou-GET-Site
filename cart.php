<?php
    ob_start();
    // include header.php file
    include("header.php");
?>

<?php
    // include cart items if not empty
    count($product->getData('cart')) ? include("template/_cart-template.php") : include("template/notFound/_cart_notFound.php");

    // include new phones
    include("template/_new-phones.php");
?>

<?php
    // include footer.php file
    include("footer.php");
?>
