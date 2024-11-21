<?php
include './model/pdo.php';
include './model/product.php';
include './model/category.php';
$product_new = loadall_product_home();
$category_new = load_category();

include_once "view/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'chitietsp':
            if (isset($_GET['product_id']) && ($_GET['product_id']) > 0) {
                $product_id = $_GET['product_id'];
                $onesp = loadone_product($_GET['product_id']);
                $dm = load_product_cungloai($product_id, $category_id);
                include 'view/chitetsp.php';
            } else {
                include 'view/home.php';
            }
            break;
        case 'danhmuc':
            if (isset($_GET['category_id']) && ($_GET['category_id'])) {
                $category_id = $_GET['category_id'];
                $dssp =  loadall_product_category($category_id);
                $category_name = load_category_name($category_id);
            }
            include 'view/danhmuc.php';
            break;

        default:
            include_once "view/home.php";
            break;
    }
}



include_once "view/home.php";
include_once "view/footer.php";
