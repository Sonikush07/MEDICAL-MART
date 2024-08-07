<?php
include "includes/head.php"
?>

<body>
    <?php
  include "includes/header.php";
  ?>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner1.jpg" class="d-block w-100" style=" height:270px ;" alt="Slide 2">
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <!-- categories-->
        <div class="row justify-content-center" id="cards">
            <div class="col-sm-3" id="cards">
                <div class="card " style="background-color: rgb(93, 179, 207) ; height: 70%;">
                    <div class="card-body">
                        <strong style="background-color: #063a3c; color: white  ;">&nbsp;UPTO 50% OFF&nbsp;</strong>
                        <strong>
                            <h5 style="font-weight:bold; color:white;"> Medicine Products</h5>
                        </strong>
                        <a href="search.php?cat=medicine">
                            <img src="images/midicin.jpg" style="width:120.4px ; height:200px ; margin-bottom:75px"
                                class="d-block " alt="...">
                        </a>
                        <br>
                        <a href="search.php?cat=medicine"> <button class="btn" style="background-color: #063a3c;
           color: white; font-weight: bold; border-color:white;margin:10px;">Go To Medicine Products</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" id="cards">
                <div class="card " style="background-color: rgb(93, 179, 207) ;height: 70%; ">
                    <div class="card-body">
                        <strong style="background-color: #063a3c; ; color: white  ;">&nbsp;UPTO 35% OFF&nbsp;</strong>
                        <strong>
                            <h5 style="font-weight:bold; color:white;"> Self care Products</h5>
                        </strong>
                        <a href="search.php?cat=self-care">
                            <img src="images/self-care.jpg" style="width:120.4px ; height:200px ; margin-bottom:50px">
                        </a>
                        <br><br><br>
                        <a href="search.php?cat=self-care"> <button class="btn" style="background-color: #063a3c;
           color: white; font-weight: bold; border-color: PowderBlue;margin:10px;">Go To Self Care</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" id="cards">
                <div class="card " style="background-color: rgb(93, 179, 207) ;height: 70%; ">
                    <div class="card-body">
                        <strong style="background-color: #063a3c; color: white ; ;">&nbsp;UPTO 70% OFF&nbsp;</strong>
                        <strong>
                            <h5 style="font-weight:bold; color:white;">Machine Products</h5>
                        </strong>
                        <a href="search.php?cat=machine">
                            <img src="images/machine.jpg" style="width:120.4px ; height:200px ; margin-bottom:50px"><br>
                        </a>
                        <br> <br>
                        <a href="search.php?cat=machine"> <button class="btn" style="background-color: #063a3c;
           color: white; font-weight: bold; border-color: #0d8592;margin:10px;">Go To Machines</button></a>
                    </div>
                </div>
            </div>
            <!-- end of categories-->


            <!----------------         products might you like                     --------->

            <<h2 style="margin-top: 10px; text-align:center">!! Products you might like !!</h2>

                <div class="row justify-content-center" id="cards">
                    <?php
      $data = all_products();
      $num = sizeof($data);
      for ($i = 0; $i < $num; $i++) {

      ?>
                    <div class="col-sm-2" id="cards" style="width: 20.45rem;">
                        <div class="card">
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
                                <h5 class="card-title-dark"><?php echo substr($data[$i]['item_title'], 0, 20) . "..." ?>
                                </h5>
                                <?php
              }
              ?>
                                <br> <br>
                                <strong>
                                    <h3 style="color :#0d8592;" class="card-text">
                                        ₹<?php echo $data[$i]['item_price'] ?>
                                    </h3>
                                </strong>
                                <br>
                                <small class="text-dark" style="font-weight: bold;">Brand Name:
                                    <?php echo $data[$i]['item_brand'] ?></small><br><br>
                                <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>" style="border:2px solid #0d8592;
           color: #0d8592;text-decoration:none;padding:5px;">More details</a>

                            </div>
                        </div>
                    </div>
                    <?php
        if ($i == 7) {
          break;
        }
      }
      ?>
                </div>

                <!----------------        end of products might you like                     --------->

                <!-- FOOTER -->
                <?php
                include "includes/footer.php"
            ?>
</body>

</html>