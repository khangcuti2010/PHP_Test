<?php
$p = isset($_SESSION['product']) ? $_SESSION['product'] : '';// xác thực và lấy thông tin sản phẩn cần update
$name = $image = $id_category = $price = $content = "";

if (isset($_POST['submit'])) {// nếu có thuộc tính name submit (name của button)
    $id = $p['id'];
    $name = isset($_POST['name']) && $_POST['name'] != null ? $_POST['name'] : $p['name'];// nếu có name mới thì gán vào biến $name, nếu trống thì gán giá trị cũ
    //upload file image
    $file = $_FILES['img'];
    if ($file['name'] == null) {//nếu không chọn file ảnh mới thì sẽ giữ lại file ảnh  cũ

        $image = $p['image'];
    }else{
        if ($file['size'] > 1048576) {
            echo "File không được lớn hơn 1MB";
        }else{
            $image =mt_rand(100000, 999999).$file['name'];
            move_uploaded_file($file['tmp_name'], "image/products/".$image);
        }
    }
    $price = isset($_POST['price']) ? $_POST['price'] : $p['price'];
    $id_category = isset($_POST['id_category']) ? $_POST['id_category'] : $p['id_category'];
    $content = $_POST['content'] && $_POST['content'] != null ? $_POST['content'] :$p['content'];
    include_once("model/product.php");
    $p = new Product();
    if (isset($_GET['id'])) {// Nếu URL có id thì update, không có thì insert
        $p->update($id,$name, $image, $id_category, $price, $content);
        $_SESSION['flash_message'] = 'Update sản phẩm thành công!';
    }else{
        $p->insert($name, $image, $id_category, $price, $content);
        $_SESSION['flash_message'] = 'Insert sản phẩm thành công!';
    }
    header("location:index.php");
}
