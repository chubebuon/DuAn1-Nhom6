
<div class="container">
    <div class="row">
        <form action="index.php?act=addm" method="post">
            <div class="mb-3 mt-3">
                <label for="category_name" class="form-label">CATEGORY:</label>
                <input type="text" class="form-control" id="category_name"  name="category_name">
            </div>
            <button type="submit" name="them" class="btn btn-info">Thêm mới </button>

            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>

    </div>