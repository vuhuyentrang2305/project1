<?php 
function index(){
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY id ASC");
    $sql = "SELECT * FROM product WHERE id = '$id'";
    $query = mysqli_query($connect, $sql);
    $sql_prd_featured = "SELECT * FROM product WHERE featured = 1 ORDER BY id DESC LIMIT 6 ";
    $query_prd_featured = mysqli_query($connect,  $sql_prd_featured);
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['category'] = $cate;
    $arr['product'] = $query;
    $arr['featured'] = $query_prd_featured;
    return $arr;
}
switch($redirect) {
    case 'product': $arr = index(); break;
}
?>