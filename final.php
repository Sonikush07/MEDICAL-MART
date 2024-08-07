<?php
include "includes/head.php";
?>

<body>
    <?php
    include "includes/header.php";
    ?>
    <div>
        <h1 style="text-align: center; font-family: 'Fredoka One', cursive;">WE'VE RECEIVED YOUR ORDER!</h1>
        <h5 style="text-align: center; font-family: 'Fredoka One', cursive;">Thanks for shopping with MedicalMart!
            <br> you can check you order details in orders section
        </h5>
        <img src="images/Successful purchase.gif" alt="" style="display: block; margin: auto;">
        <a href="index.php"> <button style="margin : 20px 650px" type="button" class="btn btn-outline-info btn-lg">Go
                back to the store </button></a>
    </div <?php
    add_order();
    ?> <br>
    <!-- FOOTER -->
    <?php
    include "includes/footer.php"
    ?>

</body>