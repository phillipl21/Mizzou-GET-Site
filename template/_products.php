<!-- Product-->
<?php

    $item_id = $_GET['item_id'] ?? 1;
    foreach($product->getData() as $item):
        if($item['item_id'] == $item_id):
            //request method post
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                // call method addToCart
                if (isset($_POST['special_price_submit']))
                {
                    $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
                }
            }
            $in_cart = $Cart->getCartId($product->getData('cart'));
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/Foods/Burger & Fries.jpg" ?>" alt="Food" class="img-fluid">
                <div class="form-row py-4 font-size-16 font-poppins">
                    <div class="col">
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item["item_id"] ?? "1"; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                            if (in_array($item['item_id'], $in_cart ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-rale font-size-20"><?php echo $item['item_name'] ?? 'Unknown' ?></h5>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">27 ratings | 2 answered questions</a>
                </div>
                <hr class="m-0">

                <!-- Product Price -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>Student Price: $<?php echo $item['item_price'] ?? '0' ?></td>
                    </tr>
                </table>
                <!-- !Product Price-->

                <!-- #policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span  class="fas fa-heart border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Nutritionist<br>Approved</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span  class="fas fa-leaf border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Missouri-sourced<br>Ingredients</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span  class="fas fa-dollar-sign border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Save money with a<br>Tiger Plan</a>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- !policy -->

                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small style="padding:0px 0px 10px">Pickup at <?php echo $item['item_brand'] ?? 'Unknown' ?></small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i><?php echo $item['item_address'] ?? 'Unknown' ?></small>
                </div>
                <!-- !order-details -->

                <div class="row">
                    <div class="col-6">
                        <!-- Qty section -->
                        <div class="qty d-flex py-4">
                            <h6 class="font-rale">Qty:</h6>
                            <div class="px-3 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !Qty section -->
                    </div>
                </div>

                <!-- size -->
                <div class="size my-3">
                    <h6 class="font-poppins">Comes with:</h6>
                    <div class="d-flex justify-content-between w-50">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">Free Condiments</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">Utensils & Napkins</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">Fountain Drink</button>
                        </div>
                    </div>
                </div>
                <!-- !size -->

            </div>

            <div class="col-12">
                <h6 class="font-rubik">Description</h6>
                <hr>
                <p class="font-rale font-size-14">Delicious and nutritious!
                </p>
            </div>
        </div>
    </div>
</section>
<!-- !Product -->
<?php
    endif;
    endforeach;
?>
