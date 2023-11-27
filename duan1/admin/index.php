<?php
    // kết nối
    include "../dao/pdo.php";
    include "../dao/danhmuc.php";

    include "view/header.php";
if(isset($_GET['pg'])){
    switch ($_GET['pg']) {
        case 'orders':
            include "view/orders.php";
            break;
        case 'categories':
            include "view/categories.php";
            break;
        case 'categories_add':
            if(isset($_POST['btnadd'])){
                $name = $_POST['name'];
                danhmuc_insert($name);
                $tb = "Bạn đã thêm thành công";
            }
            include "view/categories_add.php";
            break;
        case 'products':
            include "view/products.php";
            break;
        case 'products_add':
            include "view/products_add.php";
            break;
        case 'users':
            include "view/users.php";
            break;
        case 'banners':
            include "view/banners.php";
            break;
        case 'binhluan':
            include "view/binhluan.php";
            break;
        default:
        include "view/home.php";
            break;
    }
}else{
    include "view/home.php";
}


    include "view/footer.php";

?>