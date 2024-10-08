<?php
include 'models\Database.php';
class Product
{

    public $connect;
    public function __construct()
    {
        $this->connect = Database();
    }

    // lấy danh sach sản phẩm
    public function getProductsInDatabase()
    {
        $sql = "SELECT * FROM product";
        // Thưc thi câu sql với database
        $products = $this->connect->query($sql)->fetchAll();
        return $products;
    }

    // thêm sản phẩm
    public function insertProduct($name, $description, $price, $image)
    {
        $sql = "INSERT INTO product(name, description, price, image) VALUES('$name', '$description', '$price', '$image')";
        $result =  $this->connect->exec($sql);
        return $result;
    }

    // lấy sản phẩm theo ID
    public function getProductById($id)
    {
        $sql = "SELECT * FROM product WHERE id = $id";
        $result = $this->connect->query($sql)->fetch();
        return $result;
    }

    // Chỉnh sửa sản phẩm 
    public function editProduct($id, $name, $description, $price, $image)
    {
        if (isset($image)) {
            $sql = "UPDATE product SET name='$name', description='$description', price='$price', image='$image' WHERE id = $id";
        } else {
            $sql = "UPDATE product SET name='$name', description='$description', price='$price' WHERE id = $id";
        }

        if ($this->connect->exec($sql)) {
            return true;
        }
    }
    // xóa sản phẩm 
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM product WHERE id = $id";
        if ($this->connect->exec($sql)) {
            return true;
        }
    }
}
