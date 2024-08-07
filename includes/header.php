<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #063a3c;">
        <div class="container-fluid">
            <a href="index.php"> <img src="images/mart.png" id="image"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" style="color: white; "
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php"
                            style="color: white; font-size:bold;">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle " style="color: white; font-size:bold;" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="color: white; font-size:bold;">
                            <li><a class="dropdown-item " href="search.php?cat=medicine">Medicine</a></li>
                            <li><a class="dropdown-item" href="search.php?cat=self-care">Self Care</a></li>
                            <li><a class="dropdown-item" href="search.php?cat=machine"> machines</a></li>
                        </ul>
                    </li>
                </ul>
                <?php

                if (!isset($_SESSION['user_id'])) {
                    echo "<a class='nav-link' href='login.php' style='color: white; font-size:bold;'> Log in</a>";
                } else {
                    $check_user_id = check_user($_SESSION['user_id']);
                    if ($check_user_id == 1) {
                        echo "<a class='nav-link' href='logout.php' style='color: white; font-size:bold;'> Log out</a>  ";
                    } else {
                        post_redirect("logout.php");
                    }
                }
                ?>
                <form class="d-flex" action="search.php" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" name="search_text">
                    <button class="btn btn-outline-light me-2 " style="background-color: #063a3c;" type="submit"
                        value="go" name="search"><i class="fas fa-search"></i></button>
                    <a href="cart.php" class="btn btn-outline-light" style="background-color: #063a3c;"><i
                            class="fas fa-cart-shopping"></i></a>
                </form>

            </div>
        </div>
    </nav>
</header>