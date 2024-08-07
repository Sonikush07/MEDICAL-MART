<?php 
include "includes/head.php" 
?>

<body>

    <?php include "includes/header.php";
  $data = get_item();
  add_cart($_SESSION['item_id']);
  ?>
    <br>
    <div class="container-fluid bg-3">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <img src="images/<?php echo $data[0]['item_image'] ?>" alt="Product Image" class="img-fluid mx-auto">
            </div>

            <div class="col-md-6">
                <div class="px-4">
                    <h2 class="fw-bold mb-4"><?php echo $data[0]['item_title'] ?></h2>
                    <hr class="my-4">
                    <div class="row mb-3">
                        <div class="col-sm-4 fw-bold">Brand:</div>
                        <div class="col-sm-8"><?php echo $data[0]['item_brand'] ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 fw-bold">Category:</div>
                        <div class="col-sm-8"><?php echo $data[0]['item_cat'] ?></div>
                    </div>
                    <hr class="my-4">
                    <h4 class="fw-bold">About this item:</h4>
                    <p><?php echo $data[0]['item_details'] ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="card-title text-danger mb-4">Price: ₹ <?php echo $data[0]['item_price'] ?></h4>
                        <?php if ($data[0]['item_quantity'] > 0) { ?>
                        <p class="text-success">In Stock</p>
                        <?php } else { ?>
                        <p class="text-danger">Out Of Stock</p>
                        <?php } ?>
                        <p class="fw-bold">Deliver to:</p>
                        <p>
                            <?php if (isset($_SESSION['user_id'])) {
                $user = get_user($_SESSION['user_id']);
                echo $user[0]['user_address'];
              } else {
                echo "Btm 1st stage opp maruthi layout,4th 560029 bagalore (Store)";
              } ?>
                        </p>
                        <form action="product.php" method="GET">
                            <div class="form-group pb-2">
                                <label for="quantity" class="fw-bold">Quantity:</label>
                                <input value="1" type="number" class="form-control" id="quantity" name="quantity"
                                    min="1" max="9">
                            </div>
                            <button type="submit" value="buy" name="buy" class="btn btn-primary">Buy Now</button>
                            <button type="submit" value="" name="cart" class="btn btn-secondary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php" ?>
</body>

</html>