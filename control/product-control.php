<?php
include_once ("model/Product.php");
$product = new Product();
$list = $product->getList();
$action = isset($_GET['action']) && $_GET['action'] != null ? $_GET['action'] : '';
switch ($action)
{
    case 'insert':
        $_SESSION['category'] = $product->getListCategory();// lấy thông tin các danh mục
        include_once("view/form.php");
        include_once("product-process.php");
        break;
    case 'update':
        $id = isset($_GET['id']) && $_GET['id'] != null ? $_GET['id'] :'';// kiểm tra url có id ko
        $_SESSION['category'] = $product->getListCategory();//// lấy thông tin các danh mục
        $_SESSION['product'] = $product->getOne($id);// lấy thông tin sản phẩm cần update
        include_once("view/form.php");
        include_once("product-process.php");
        break;
    case 'delete':
        $id = isset($_GET['id']) && $_GET['id'] != null ? $_GET['id'] :'';
        $_SESSION['product'] = $product->getOne($id);
        $product->delete($id);
        $_SESSION['flash_message'] = 'Xoá sản phẩm thành công!';
        header("location:index.php");
        break;
    default:
        if (!isset($_GET['p'])) {
            $pages = 1;
        }else{
            $pages = $_GET['p'];
        }
        $_SESSION['product-list'] = $product->getAll();
        //include_once("view/product/list.php");
        break;
}