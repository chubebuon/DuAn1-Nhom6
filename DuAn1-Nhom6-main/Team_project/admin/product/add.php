<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <main class="col-md-9 col-lg-10">
                <!-- Header -->
                <div class="header">
                    <!-- Search Bar -->
                    <div class="search-bar">
                        <input type="text" placeholder="Tìm kiếm">
                    </div>
                    <!-- User Info -->
                    <div class="user-info">
                        <i class="fas fa-envelope"></i>
                        <span>Tin nhắn</span>
                        <i class="fas fa-bell ml-3"></i>
                        <span>Thông báo</span>
                        <div class="dropdown ml-3">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="https://via.placeholder.com/30" class="rounded-circle" alt="User">
                                Tuan Anh
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form Section -->
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="product-container">
                        <div class="product-form">
                            <div class="form-header">
                                <a href="#" style="color: #007bff; text-decoration: none;">Sản phẩm</a> / Thêm sản phẩm
                            </div>
                            <div class="">
                                <label>Danh mục</label>
                                <select name="category_id">
                                    <?php foreach($listcategory as $category){
                                        extract($category);
                                       
                                        echo '<option value="'.$category_id.'">'.$category_name.'</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" name="product_name">
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input type="text" name="product_price">
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input type="text" name="product_amount">
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea name="product_description" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="image-upload">
                            <label>Hình ảnh (JPG, PNG)</label>
                            <input type="file" name="product_img">
                        </div>
                    </div>
                    <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm mới">
                    <a href="index.php?act=listsp" class="btn btn-danger">Danh sách</a>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>

            </main>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<style>
        /* Sidebar styling */
        .sidebar {
            background-color: #f8f9fa;
            min-height: 100vh;
            padding-top: 20px;
        }

        .sidebar a {
            color: #333;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            font-size: 16px;
        }

        .sidebar a:hover {
            background-color: #e9ecef;
            color: #007bff;
        }

        .sidebar .active {
            color: #007bff;
            font-weight: bold;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .header {
            background-color: #fff;
            padding: 15px 20px;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header .search-bar {
            flex-grow: 1;
            margin: 0 20px;
        }

        .header .search-bar input {
            width: 1000%;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }

        .header .user-info {
            display: flex;
            align-items: center;
        }

        .header .user-info i,
        .header .user-info img {
            margin-right: 10px;
        }

        .form-section {
            padding: 20px;
            background-color: #f4f6f9;
            min-height: 100vh;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f9f9fb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .product-container {
            display: flex;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin-top: 10px;

        }

        .product-form {
            flex: 2;
            padding-right: 20px;
            border-right: 1px solid #e0e0e0;
        }

        .form-header {
            font-size: 16px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
        }

        .form-group select {
            appearance: none;
        }

        .image-upload {
            flex: 1;
            padding-left: 20px;
        }

        .image-upload label {
            font-size: 14px;
            color: #333;
            margin-bottom: 10px;
            display: block;
        }

        .image-upload input[type="file"] {
            display: block;
            margin-bottom: 10px;
        }

        .image-upload button {
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .image-upload button:hover {
            background-color: #0056b3;
        }
    </style>

</html>