<?php
function load_category()
{
    $Sql = "select * from categorys";
    $category = pdo_query($Sql);
    return $category;
}
function insert_category($category_name)
{
    $sql = "insert into categorys(category_name) values('$category_name')";
    pdo_execute($sql);
   
}
