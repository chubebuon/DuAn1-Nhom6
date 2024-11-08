<?php

include "header.php";
include "../model/pdo.php";
include "../model/category.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "addm":
            if (isset($_POST['them']) && ($_POST['them'])) {
                $category_name = $_POST['category_name'];
                insert_category($category_name);
                $thongbao = "thêm mới thanh công";
            }
            include "category/add.php";
            header("Location:category/list.php");
            break;
        case 'listdm':
            $Sql = "select * from categorys";
            $category = pdo_query($Sql);
            include "category/list.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
} 

