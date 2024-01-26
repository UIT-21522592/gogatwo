<?php 
/* Include necessary component */
include_once("../../config/dbconn.php");

function getOrderHistory()
{
    global $conn;
   
    //$query="SELECT * FROM orders WHERE status != '0'";
    //return mysqli_query($conn, $query);
    $query = "SELECT * FROM orders WHERE status != '0'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function getAllOrders()
{
    // nếu chỉ lấy đơn hàng bằng 0 thì giữ cx được không thì dùng $stmt
    global $conn;
    $query = "SELECT * FROM orders WHERE status='0'";
    $query_run = mysqli_query($conn, $query);
    return $query_run;
}

?>