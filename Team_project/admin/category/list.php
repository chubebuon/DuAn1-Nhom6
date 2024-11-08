<main class="col-md-9 col-lg-10">
<div class="form-section">
    <h1>Quản lý danh mục</h1>
    <table class="table" width="100%">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>hành động</th>
        </thead>
        <tbody>
            <?php
            foreach ($category as $c) {
                extract($c);
                echo '
        <tr>
        <td>' . $category_id . '</td>
          <td>' . $category_name . '</td>
        <td>
        <a href="" class="btn btn-success">xóa</a>
        <a href="" class="btn btn-primary">sửa</a>
        <a href="index.php?act=addm" class="btn btn-primary">thêm mới</a>
        </td>
        </tr>
        ';
            }
            ?>






        </tbody>
    </table>

</div>

</main>
