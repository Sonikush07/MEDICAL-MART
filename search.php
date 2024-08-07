<?php
include "includes/head.php"
?>

<body>

    <?php

    include "includes/header.php";

    ?>
    <div class="container">
        <div class="row justify-content-center" id="cards">
            <div class="row">
                <?php
            $data = search();
            if (!empty($data)) {
                $num = sizeof($data);
                for ($i = 0; $i < $num; $i++) {

            ?>
                <div class="col-sm-2" id="cards" style="width: 20.45rem; ">
                    <div class="card border border">
                        <img src="images/<?php echo $data[$i]['item_image'] ?>" class="card-img-top"
                            style="width:305.3px ; height:305px ;">
                        <div class="card-body">
                            <?php
                                if (strlen($data[$i]['item_title']) <= 20) {
                                ?>
                            <h5 class="card-title"><?php echo $data[$i]['item_title'] ?></h5>

                            <?php
                                } else {
                                ?>
                            <h5 class="card-title"><?php echo substr($data[$i]['item_title'], 0, 20) . "..." ?></h5>
                            <?php
                                }
                                ?>
                            <br>
                            <strong>
                                <h3 style="color :#82E0AA;" class="card-text"> ₹<?php echo $data[$i]['item_price'] ?>
                                </h3>
                            </strong>
                            <br>
                            <small class="text-muted" style="font-weight: bold;">Brand Name:
                                <?php echo $data[$i]['item_brand'] ?></small><br><br>
                            <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"
                                class="btn btn-outline-success">More details</a>

                        </div>
                    </div>
                </div>
                <?php
                }
                unset($data);
                if ($num < 8) {
                    $data = all_products();
                    $num = sizeof($data);

                ?>

                <h2>You might also like : </h2>
                <?php
                    for ($i = 0; $i < $num; $i++) {

                    ?>
                <div class="col-2 justify-content-center" id="cards" style="width: 20rem;">
                    <div class="card border border">
                        <img src="images/<?php echo $data[$i]['item_image'] ?>" class="card-img-top"
                            style="width:305.3px ; height:305px ;">
                        <div class="card-body">
                            <?php
                                    if (strlen($data[$i]['item_title']) <= 20) {
                                    ?>
                            <h5 class="card-title"><?php echo $data[$i]['item_title'] ?></h5>

                            <?php
                                    } else {
                                    ?>
                            <h5 class="card-title"><?php echo substr($data[$i]['item_title'], 0, 20) . "..." ?></h5>
                            <?php
                                    }
                                    ?>
                            <br>
                            <strong>
                                <h3 style="color :#82E0AA;" class="card-text"> ₹<?php echo $data[$i]['item_price'] ?>
                                </h3>
                            </strong>
                            <br>
                            <small class="text-muted" style="font-weight: bold;">Brand Name:
                                <?php echo $data[$i]['item_brand'] ?></small><br><br>
                            <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"
                                class="btn btn-outline-success">More details</a>

                        </div>
                    </div>
                </div>
                <?php
                        if ($i == 3) {
                            break;
                        }
                    }
                }
            } else {
                ?>

                <img src="images/1.gif" style="height: auto; width:auto; margin-left: auto; margin-right: auto;">
                <h2 style="margin-top: 13px;">You might also like : </h2>
                <?php
                $data = all_products();
                $num = sizeof($data);
                for ($i = 0; $i < $num; $i++) {
                ?>
                <div class="col-sm-2" id="cards" style="width: 20.45rem;">
                    <div class="card border border-warning">
                        <img src="images/<?php echo $data[$i]['item_image'] ?>" class="card-img-top"
                            style="width:305.3px ; height:305px ;">
                        <div class="card-body">
                            <?php
                                if (strlen($data[$i]['item_title']) <= 20) {
                                ?>
                            <h5 class="card-title"><?php echo $data[$i]['item_title'] ?></h5>

                            <?php
                                } else {
                                ?>
                            <h5 class="card-title"><?php echo substr($data[$i]['item_title'], 0, 20) . "..." ?></h5>
                            <?php
                                }
                                ?>

                            <br>
                            <strong>
                                <h3 style="color :#82E0AA;" class="card-text"> ₹<?php echo $data[$i]['item_price'] ?>
                                </h3>
                            </strong>
                            <br> <small class="text-muted" style="font-weight: bold;">Brand Name:
                                <?php echo $data[$i]['item_brand'] ?></small><br><br>
                            <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"
                                class="btn btn-outline-success">More details</a>

                        </div>
                    </div>
                </div>
                <?php
                    if ($i == 3) {
                        break;
                    }
                }
            }

            ?>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php
    include "includes/footer.php"
    ?>
</body>

</html>