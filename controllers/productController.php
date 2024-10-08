<?php

use function PHPSTORM_META\type;

include './models/product.php';
class ProductController
{
    public $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function getProducts()
    {
        $products =  $this->product->getProductsInDatabase();

        include './views/home.php';
    }
    public function addFormProduct()
    {
        include "./views/add.php";
    }

    public function createProduct()
    {
        if (isset($_POST['create'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $image = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], 'img/' . $image);
            $success = $this->product->insertProduct($name, $description, $price, $image);
            if ($success) {
                header("Location: ?act=index");
            }
        }
    }
    public function updateFormProduct($id)
    {
        $product = $this->product->getProductById($id);
        include './views/update.php';
    }
    public function editProduct($id)
    {
        if (isset($_POST['edit'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $image = !empty($_FILES['image']['name']) ? $_FILES['image']['name'] : null;
            if ($image) {
                move_uploaded_file($_FILES['image']['tmp_name'], 'img/' . $image);
            }
            $success = $this->product->editProduct($id, $name, $description, $price, $image);
            if ($success) {
                header("Location: ?act=index");
            }
        }
    }
    public function deleteProduct($id)
    {
        $success = $this->product->deleteProduct($id);
        if ($success) {
            header("Location: ?act=index");
        }
    }
}
