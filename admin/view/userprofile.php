<?php
//include('../middleware/adminMiddleware.php');
include('navbar.php');
function getBoughtProducts(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="database";
//create db connection
$conn=mysqli_connect($servername, $username, $password, $database);
// check db connection
// if(!$conn){
//     die("Connection failed: ". mysqli_connect_errno());
// }else{
//     echo "Connected succesflly";
// }
// $sql = "SELECT `orders`.`user_id` , `order_items`.`product_id` 
// ,`orders`.`created_at` FROM `orders` INNER JOIN `order_items` 
// ON `orders`.`id` = `order_items`.`order_id`;";
$sql = "SELECT * FROM `products` WHERE `products`.`id` IN ( SELECT `order_items`.`product_id` FROM `orders` INNER JOIN `order_items` ON `orders`.`id` = `order_items`.`order_id`) LIMIT 5;";
return $query_run = mysqli_query($conn, $sql);

}

function getPurchaseDate($productid){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="database";
//create db connection
$conn=mysqli_connect($servername, $username, $password, $database);
// check db connection
// if(!$conn){
//     die("Connection failed: ". mysqli_connect_errno());
// }else{
//     echo "Connected succesflly";
// }
$sql = "SELECT created_at FROM `order_items` WHERE product_id = $productid";
return $query_run = mysqli_query($conn,$sql);

}
function getAll($table) {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="database";
//create db connection
$conn=mysqli_connect($servername, $username, $password, $database);
// check db connection
// if(!$conn){
//     die("Connection failed: ". mysqli_connect_errno());
// }else{
//     echo "Connected succesflly";
// }
$sql = "SELECT * FROM $table";
return $query_run = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/css/profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<div class="main">
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li> -->
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>Nguyen Thang</h4>
                      <p class="text-secondary mb-1">Admin</p>
                      <p class="text-muted font-size-sm">KTX khu E DHQG TP.HCM</p>
                      <!-- <button class="btn btn-primary">Xóa</button>
                      <button class="btn btn-outline-primary">Sửa</button> -->
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Nguyen Tran Hoi Thang
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Hthang0512@gmail.com
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (+84) 913194302
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    (+84) 913194302
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     KTX khu E DHQG TP.HCM
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <!-- <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div> -->
                  </div>
                </div>
              </div>

            
                <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Mua vào lúc</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <div class="col-md-8">
                                <div class="card mb-3">
                                  <div class="card-body">
                                    <div class="row">
                                      <?php
                                        $products = getAll("products");
                                        $tmp = getBoughtProducts();
                                       
                                        if (mysqli_num_rows($products) > 0) {
                                            foreach ($products as $item) {
                                              
                                      ?>
                                          <tr>
                                              <td class="text-center"><?= $item['id']; ?></td>
                                              <td class="text-center"><?= $item['name']; ?></td>
                                              <td class="text-center"><img src="uploads/product/<?= $item['image']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>"></td>
                                              <td class="text-center"><?= $item['created_at']; ?></td>
                                          </tr>
                                          
                                      <?php
                                          }
                                      } else {
                                          echo "No record found";
                                      }
                                      ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </tbody>
                        </table>
                    </div>


            </div>
          </div>

        </div>
    </div>
</body>
</div>
</html>