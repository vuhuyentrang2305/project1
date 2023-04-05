<?php
function index() {
    $prd_id = $_GET['id'];
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY id ASC");
    include_once('Config/close_connect.php');
    if(isset($_SESSION['cart']['prd_id'])){
        $_SESSION['cart']['prd_id']++;
    }else{
        $_SESSION['cart']['prd_id'] = 1; 
    }
    $arr = array();
    $arr['category'] = $cate;
    $arr['product'] =  $_SESSION['cart']['prd_id'];
    return $arr;
}
switch($redirect) {
    case 'cart' : $arr = index(); break;
}
?>