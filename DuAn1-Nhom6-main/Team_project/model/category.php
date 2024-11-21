<?php
function load_category()
{
    $Sql = "select * from categories";
    $category = pdo_query($Sql);
    return $category;
}
function insert_category($category_name, $category_img)
{
    $sql = "insert into categories(category_name,category_img) values('$category_name','$category_img')";

    pdo_execute($sql);
}

function delete_category($category_id)
{
    $sql = "delete from  categories where category_id=" . $category_id;
    pdo_execute($sql);
}
function sua_category($category_id)
{
    $sql = "select *from categories where category_id=" . $category_id;
    $category = pdo_query_one($sql);
    return $category;
}

function update_category($category_id, $category_name, $category_img)
{
    if ($category_img != "")
        $sql = "update categories set category_name='" . $category_name . "', category_img='" . $category_img . "' where category_id=" . $category_id;
    else
        $sql = "update categories set category_name='" . $category_name . "', category_img='" . $category_img . "' where category_id=" . $category_id;
    pdo_execute($sql);
}
