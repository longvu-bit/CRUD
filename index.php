<!--
 Common => tạo các file dùng chúng: connect_database
 Controllers => file xử lý dữ liệu
 Models => kết nối với database thông qua connect_database  trong common
 views => hiển thị giao diện người dùng
 -->

<?php
include 'controllers/productController.php';
// router
$act = isset($_GET['act']) ? $_GET['act'] : 'index';
//  act = about
//  isset($_GET['act']) =>  đúng => $act = $_GET['act'] => $act = about
//  http://localhost/FA24-XUONG-PHP1 => isset($_GET['act']) => sai => $act = index
$productController = new ProductController();
switch ($act) {
    case 'index':
        $productController->getProducts();
        break;
    case 'add':
        $productController->addFormProduct();
        break;

    case 'create':
        $productController->createProduct();
        break;
    case 'update':
        $id = $_GET['id'];
        $productController->updateFormProduct($id);
        break;
    case 'edit':
        $id = $_GET['id'];
        $productController->editProduct($id);
        break;
    case 'delete':
        $id = $_GET['id'];
        $productController->deleteProduct($id);
        break;
    default:
        echo "Doesn't found action";
        break;
}
?>