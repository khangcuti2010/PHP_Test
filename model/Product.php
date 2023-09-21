<?php
include_once("library/data.php");

class Product extends Data
{
    public function getList(){ //hàm lấy danh sách
        $db = new Data();
        $db->query("SELECT * FROM products");
        return $db->getAll();
    }

    public function getOne($id){ // hàm lấy 1 sản phẩm cụ thể
        $db = new Data();
        $db->query("SELECT * FROM products WHERE id = $id");
        return $db->getOneFirst();
    }

    public function getListCategory(){
        $db = new Data();
        $db->query("SELECT * FROM category");
        return $db->getAll();
    }

    public function insert($name,$image,$id_category,$price,$content){
        $db = new Data();
        $db->exec("INSERT INTO `products`(`name`, `id_category`, `image`, `price`, `content`) VALUES('$name','$id_category','$image','$price','$content')");
    }

    public function update($id,$name,$image,$id_category,$price,$content){
        $db = new Data();
        $db->exec("UPDATE `products` SET `name` = '$name', `image` ='$image', `id_category` ='$id_category', `price`= '$price', `content` ='$content' WHERE `id` = $id");
    }

    public function delete($id){
        $p = isset($_SESSION['product']) ? $_SESSION['product'] : '';
        $filePath = 'image/products/'.$p['image'];
        if (file_exists($filePath)) {
            if (unlink($filePath)) {
                echo "Tệp tin đã được xóa thành công.";
            } else {
                echo "Không thể xóa tệp tin.";
            }
        } else {
            echo "Tệp tin không tồn tại.";
        }
        $db = new Data();
        $db->exec("DELETE FROM products WHERE id = '$id'");
    }

}