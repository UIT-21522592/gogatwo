<?php
include("../functions/myFunctions.php");
include('../middleware/adminMiddleware.php');
//include_once("../includes/header.php");
include("navbar.php");
?>
<div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <div class="card-header bg-warning">
                        <h4 class="text-white">
                            Categories
                        </h4>
                    </div>
                        <div class="card-body" id="category_table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Edit</th>
                                            <th class="text-center">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $category = getAll("categories");
                                        if (mysqli_num_rows($category) > 0) {
                                            foreach ($category as $item) {
                                        ?>
                                                <tr>
                                                    <td class="text-center"> <?= $item['id']; ?></td>
                                                    <td class="text-center"> <?= $item['name']; ?></td>
                                                    <td class="text-center"> <img src="../uploads/categories/<?= $item['image']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>"></td>
                                                    <td class="text-center"> <?= $item['status'] == "0" ? "Visible" : "Hidden"; ?></td>
                                                    <td class="text-center">
                                                        <a href="editCategory.php?id=<?= $item['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                    </td>
                                                    <td class="text-center">
                                                        
                                                        <button type="button" class="btn btn-sm btn-danger delete_category_btn" value="<?= $item['id']; ?>">Delete</button>
                                                        
                                                    </td>
                                                </tr>

                                        <?php
                                            }
                                        } else {
                                            echo "NO record found";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
</div>
<?php
    include("includes/footer.php");
?>