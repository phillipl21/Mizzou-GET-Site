<!-- Shopping cart section -->
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-poppins font-size-20">Shopping Cart</h5>
        <!-- shopping cart items -->
        <div class="row">
            <div class="col-sm-9">
                <!-- Empty Cart -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-12 text-center py-2">
                        <img src="./assets/Blogs/ShopCart.png" alt="NotFound" class="img-fluid" style="height:200px;">
                            <p class="font-nunito font-size-16 text-black-50">Empty Cart</p>
                    </div>
                </div>
                <!-- !Empty Cart -->
            </div>
            <!-- subtotal section -->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-2"><i class="fas fa-check"></i> Thanks for using Mizzou GET!</h6>
                    <div class="border-top py-4">
                        <h5 font-poppins font-size-20>Subtotal (<?php echo isset($subTotal) ? count($subTotal) : 0; ?> items): &nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0;?></span></span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
            <!-- !subtotal section -->
        </div>
        <!-- !shopping cart items-->
    </div>
</section>
<!-- !Shopping cart section-->