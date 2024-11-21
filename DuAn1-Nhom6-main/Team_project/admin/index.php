<?php
include 'header.php';
include '../model/pdo.php';
include '../model/category.php';
include '../model/product.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listdm':
            $category = load_category();
            include "category/list.php";
            break;
        case 'adddm':
           
            if (isset($_POST['themmoi'])) {
                $errors = array(); // Initialize errors array
            
                // Validate category name
                if (empty($_POST['category_name'])) {
                    $errors['category_name'] = 'Bạn cần nhập tên';
                } elseif (!(strlen($_POST['category_name']) >= 6 && strlen($_POST['category_name']) <= 32)) {
                    $errors['category_name'] = 'Bạn cần nhập tên đủ độ dài từ 6-32 kí tự';
                } else {
                    $category_name = $_POST['category_name'];
                }
            
                // Check for errors
                if (!empty($errors)) {
                    // Display errors
                    foreach ($errors as $key => $error) {
                        echo "<p style='color:red;'>{$error}</p>";
                    }
                } else {
                    // Proceed with file upload and category insertion only if no errors
                    $category_img = $_FILES['category_img']['name'];
                    $load = "../uploads/";
                    $img = $load . basename($_FILES["category_img"]["name"]);
            
                    if (move_uploaded_file($_FILES["category_img"]["tmp_name"], $img)) {
                        // File uploaded successfully
                    } else {
                        echo "<p style='color:red;'>Sorry, there was an error uploading your file.</p>";
                    }
            
                    // Insert category into database
                    insert_category($category_name, $category_img);
                    $thongbao = "Thêm mới thành công";
                }
            }
            
            include 'category/add.php';
            break;
        case 'deletedm':
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                delete_category($_GET['category_id']);
            }
            $category = load_category();
            include 'category/list.php';
            break;
        case 'suadm':
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                $category = sua_category($_GET['category_id']);
            }
            include 'category/update.php';
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $category_id = $_POST['category_id'];
                $category_name = $_POST['category_name'];
                $category_img = $_FILES['category_img']['name'];
                $load = "../uploads/";
                $img = $load . basename($_FILES["category_img"]["name"]);
                if (move_uploaded_file($_FILES["category_img"]["tmp_name"], $img)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                update_category($category_id, $category_name, $category_img);
                $thongbao = "cập nhật thành công";
            }
            $category = load_category();
            include 'category/list.php';
            break;


            // Product


        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                var_dump($_POST);
                $product_name = $_POST['product_name'];
                $category_id = $_POST['category_id'];
                $product_img = $_FILES['product_img']['name'];
                $product_price = $_POST['product_price'];
                $product_amount = $_POST['product_amount'];
                $product_description = $_POST['product_description'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
                if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)) {
                } else {
                }
                insert_product($product_name, $category_id, $product_img, $product_price, $product_amount, $product_description);

                $thongbao = "Thêm thành công";
            }
            $listcategory = load_category();
            include 'product/add.php';
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $category_id = $_POST['category_id'];
            } else {
                $kyw = '';
                $category_id = 0;
            }
            $listcategory = load_category();
            $listproduct = loadall_product($kyw, $category_id);
            include 'product/list.php';
            break;
        case 'xoasp':
            if (isset($_GET['product_id']) && ($_GET['product_id'])) {
                delete_product($_GET['product_id']);
            }
            $listproduct = loadall_product("", 0);
            include 'product/list.php';
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'])) {
                $product = loadone_product($_GET['id']);
            }
            $listcategory = load_category();
            include 'product/update.php';
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $product_id = $_POST['product_id'];
                $product_name = $_POST['product_name'];
                $category_id = $_POST['category_id'];
                $product_img = $_FILES['product_img']['name'];
                $product_price = $_POST['product_price'];
                $product_amount = $_POST['product_amount'];
                $product_description = $_POST['product_description'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['product_img']['name']);
                if (move_uploaded_file($_FILES['product_img']['tmp_name'], $target_file)) {
                } else {
                }
                update_product($product_id, $product_name, $category_id, $product_img, $product_price, $product_amount, $product_description);
                $thongbao = "Cập nhật thành công";
            }
            $listcategory = load_category();
            $listproduct = loadall_product("", 0);
            include 'product/list.php';
            break;



        default:
            include "home.php";
            break;
    }
}
include 'home.php';
include 'footer.php';
