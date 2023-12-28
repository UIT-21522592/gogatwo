<nav class="navbar navbar-expand-lg fixed-top fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand me-auto" style="padding-left:30px;" href="index.php">GOGATWO</a>
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
        <a href="login.php" class="login-button" style="color: #141415">
          <i class="fas fa-circle-user fa-lg"></i>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>