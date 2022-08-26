<?php
    ob_start();
    // include header.php file
    include("header.php");
?>

<?php
    foreach($product->getData('cart') as $item):
        $deletedRecord = $Cart->deleteCart($item['item_id']);
    endforeach;
?>

<div class="container-fluid w-75 text-center py-5">
    <h5 class="font-poppins font-size-20 text-success">Order Received!<br>Please pick up your order in 15-20 minutes at
    the corresponding dining hall(s).<br> Thanks for using Mizzou GET!</h5>
    <!--
    <div class="row">
        <div class="col-sm-9">
            Empty Cart
            <div class="row border-top py-3 mt-3">
                <div class="col-sm-12 text-center py-2">
                    <img src="./assets/Blogs/ShopCart.png" alt="NotFound" class="img-fluid" style="height:200px;">
                    <p class="font-nunito font-size-16 text-black-50">Empty Cart</p>
                </div>
            </div>
        </div> -->

<?php
    // include footer.php file
    include("footer.php");
?>