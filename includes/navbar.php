<nav class="navbar navbar-expand-lg fixed-top fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand me-auto" href="index.php">GOGATWO</a>
        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">GOGATWO</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
              <li class="nav-item">
                <a
                  class="nav-link mx-lg-2 fw-bold"
                  style="color: #0c0d0d"
                  aria-current="page"
                  href="index.php"
                >
                  <i class="fas fa-home"></i> Home
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link mx-lg-2 fw-bold"
                  style="color: #0c0d0d"
                  href="aboutUs.php"
                  >About us</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link mx-lg-2 fw-bold"
                  style="color: #0c0d0d"
                  href="category.php"
                  ><i class="fa-solid fa-store" style="color: #0c0d0d"></i
                  >Product</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link mx-lg-2 fw-bold"
                  href="contactUs.php"
                  style="color: #0c0d0d"
                  ><i class="fa-solid fa-phone fa-lg" style="color: #0c0d0d"></i
                  >Contact us</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="cart.php">
                  <i
                    class="fa-solid fa-cart-shopping fa-xl"
                    style="color: #121212"
                  ></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="wishlist.php">
                  <i class="fa-solid fa-heart fa-xl" style="color: #121212"></i>
                </a>
              </li>
              <li class="nav-item" style="align-items: center; display: flex">
                    <form id="searchForm" action="product.php?" method="GET" class="d-flex justify-content-between">
                      <input class="form-control" type="text" id="search" name="key" placeholder="Search for" aria-label="Search" style="width: 85%">
                      <button class="btn" type="submit" title="Search" style="background-color: white;">
                      <i class="fas fa-magnifying-glass fa-lg nav-link mx-lg-2"></i>
                      </button>
                  </form>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- <div class="dropdown">
        <button
          class="btn btn-secondary dropdown-toggle"
          type="button"
          id="dropdownMenuButton"
          
          aria-controls="offcanvasNavbar"
          aria-label="Toggle navigation"
          data-toggle="dropdown" 
          aria-haspopup="true" 
          aria-expanded="false"
        >
          <i class="fas fa-circle-user fa-lg"></i>
        </button>
        <style>
                .dropdown-content {
              display: none;
              position: absolute;
              background-color: #f9f9f9;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
            }

            .dropdown-content a {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
              text-align: left;
            }

            .dropdown-content a:hover {background-color: #f1f1f1;}

            .dropdown:hover .dropdown-content {
              display: block;
            }
          </style>

          <div class="dropdown-content" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">My Profile</a>
            <a class="dropdown-item" href="#">My Orders</a>
            <a class="dropdown-item" href="#">Log out</a>
          </div>
        </div> -->
        <ul class="navbar-nav ms-auto">
              <?php
              if (isset($_SESSION['auth'])) {
              ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['auth_user']['name'];   ?>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="myOrder.php">My Orders</a></li>
                    <li><a class="dropdown-item" href="myProfile.php">My Profile</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                  </ul>
                </li>
              <?php
              } else {
              ?>
                <li class="nav-item">
                  <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
              <?php
              }
              ?>
            </ul>

        <!-- <a href="login.php" class="login-button" style="color: #141415">
          
        </a> -->
        
      </div>
    </nav>