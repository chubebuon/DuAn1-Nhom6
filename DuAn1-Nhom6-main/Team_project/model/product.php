<?php
function insert_product($product_name, $category_id, $product_img, $product_price, $product_amount, $product_description)
{
    $sql = "insert into product(product_name,category_id,product_img,product_price,product_amount,product_description) values('$product_name', '$category_id', '$product_img', '$product_price', '$product_amount', '$product_description')";
    pdo_execute($sql);
}
function delete_product($product_id)
{
    $sql = "delete from product where product_id=" . $product_id;
    pdo_execute($sql);
}
function loadall_product_home()
{
    $sql = "select * from product where 1 order by product_id desc limit 0,6";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function loadall_product($kyw = "", $category_id = 0)
{
    $sql = "select * from product where 1";
    if ($kyw != "") {
        $sql .= " and product_name like '%" . $kyw . "%'";
    }
    if ($category_id > 0) {
        $sql .= " and category_id = '" . $category_id . "'";
    }
    $sql .= " order by product_id desc";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function load_category_name($category_id)
{
    if ($category_id > 0) {
        $sql = "select * from category where category_id=" . $category_id;
        $category = pdo_query_one($sql);
        extract($category);
        return $category_name;
    } else {
        return "";
    }
}
function loadone_product($product_id)
{
    $sql = "select * from product where product_id=" . $product_id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_product_cungloai($product_id, $category_id)
{
    $sql = "select * from product where category_id=" . $category_id . " AND product_id<>" . $product_id;
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function update_product($product_id, $product_name, $category_id, $product_img, $product_price, $product_amount, $product_description)
{
    if ($product_img != "")
        $sql = "update product set product_name='" . $product_name . "', category_id='" . $category_id . "', product_img='" . $product_img . "', product_price='" . $product_price . "', product_amount='" . $product_amount . "', product_description='" . $product_description . "' where product_id=" . $product_id;
    else
        $sql = "update product set product_name='" . $product_name . "', category_id='" . $category_id . "', product_price='" . $product_price . "', product_amount='" . $product_amount . "', product_description='" . $product_description . "' where product_id=" . $product_id;
    pdo_execute($sql);
}

function loadall_product_category($category_id)
{
    $sql = "select *from product where category_id=" . $category_id;
    $listsp = pdo_query($sql);
    return $listsp;
}
