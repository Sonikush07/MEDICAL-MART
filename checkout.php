<?php
include "includes/head.php"
?>

<body>

    <div class="site-wrap">


        <?php
    include "includes/header.php";
    $data = get_user($_SESSION['user_id']);
    ?>

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0">
                        <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">Checkout</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black">Delivery Details</h2>
                                <div class="p-3 p-lg-5 border">
                                    <table class="table site-block-order-table mb-5 border">
                                        <thead>

                                            <th>Costumer Details</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>First Name </td>
                                                <td><?php echo $data[0]['user_fname'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Last Name </td>
                                                <td><?php echo $data[0]['user_lname'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email </td>
                                                <td><?php echo $data[0]['email'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Address </td>
                                                <td><?php echo $data[0]['user_address'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black">Your Order</h2>
                                <div class="p-3 p-lg-5 border">
                                    <table class="table site-block-order-table mb-5 border">
                                        <thead>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
                                            <?php
                      if (!empty($_SESSION['cart'])) {
                        $data = get_cart();
                        $num = sizeof($data);
                        for ($i = 0; $i < $num; $i++) {
                          if (isset($data[$i])) {
                      ?>
                                            <tr>
                                                <td><?php echo $data[$i][0]['item_title'] ?><strong
                                                        class="mx-2">x</strong><?php echo $_SESSION['cart'][$i]['quantity'] ?>
                                                </td>
                                                <td>₹<?php echo ($data[$i][0]['item_price'] * $_SESSION['cart'][$i]['quantity'])  ?>
                                                </td>
                                            </tr>
                                            <?php
                          }
                        }
                      }
                      ?>
                                            <tr>
                                                <td class="text-black font-weight-bold"><strong>Order Total</strong>
                                                </td>
                                                <td class="text-black font-weight-bold">
                                                    <strong>₹<?php echo  total_price($data) ?></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="form-group">
                                        <button class="btn btn-primary btn-lg btn-block"
                                            onclick="window.location='thankyou.php?order=done'">Place
                                            Order</button>
                                        <!-- Razorpay Payment Button -->
                                        <button class="btn btn-primary btn-lg btn-block" id="rzp-button"
                                            onclick="window.location='thankyou.php?order=done'">Pay with
                                            Razorpay</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- </form> -->
            </div>
        </div>
        <?php
    include "includes/footer.php"
    ?>
    </div>
    <script>
    // Create a Razorpay payment object
    var options = {
        key: /*'YOUR_RAZORPAY_KEY_ID'*/ 'rzp_test_EvhxZhlzFOvFTJ',
        amount: <?php echo  (total_price($data)) * 100; ?>, // amount in paisa
        currency: 'INR',
        name: 'Medical Mart',
        description: 'Payment for Order',
        handler: function(response) {
            // Handle payment success
            alert('Payment successful!');
            // Redirect to a thank you page or handle success as per your requirement
            window.location.href = 'thankyou.php?order=done';
        }
    };

    document.getElementById('rzp-button').onclick = function(e) {
        // Open Razorpay checkout form
        var rzp = new Razorpay(options);
        rzp.open();
        e.preventDefault();
    }
    </script>
</body>

</html>