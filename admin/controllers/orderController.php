<?php
/*Include neccesary component in here */
include_once("../../config/dbconn.php");
include_once("../models/Order.php");
/*Ending include component */


if(isset($_POST['update_order_btn'])){
    $track_no = $_POST['tracking_no'];
    $order_status = $_POST['order_status'];

    $update_order_query = "UPDATE orders SET status='$order_status' WHERE tracking_no='$track_no'";
    $update_order_query_run = mysqli_query($conn, $update_order_query);
    redirect("viewOrderDetail.php?t=$track_no", "Order status updated successfully");
}elseif(isset($_POST[""])){

}
else{
    // If meet an unknow action return to index
    // Inform that meet an unknow action
    echo "
    <script type='text/JavaScript'>
    alert('Meet an unkow action');

    </script>
    ";

    header("../view/index.php");

}
?>