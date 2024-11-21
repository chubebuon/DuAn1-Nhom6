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
        .category-container {
            display: flex;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin-top: 10px;
           
        }
        .category-form {
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
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 sidebar">
            <h3 class="text-center text-primary"><i class="fas fa-user-circle"></i> ADMIN</h3>
            <a href="index.php" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="donhang.php"><i class="fas fa-shopping-cart"></i> Đơn hàng</a>
            <a href="danhMuc.php"><i class="fas fa-list"></i> Danh mục</a>
            <a href="#products"><i class="fas fa-box"></i> Sản phẩm</a>
            <a href="#posts"><i class="fas fa-file-alt"></i> Bài viết</a>
            <a href="#analytics"><i class="fas fa-chart-line"></i> Thống kê</a>
            <a href="#users"><i class="fas fa-users"></i> Thành viên</a>
            <a href="#comments"><i class="fas fa-comments"></i> Bình luận</a>
        </nav>

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
            <div class="category-container">
    <div class="category-form">
        <div class="form-header">
            <a href="#" style="color: #007bff; text-decoration: none;">Danh mục</a> / Thêm danh mục
        </div>
        
        <div class="form-group">
            <label for="category-name">Tên danh mục</label>
            <input type="text" id="category-name" placeholder="Tên danh mục">
        </div>
        
        <div class="form-group">
            <label for="status">Trạng thái</label>
            <select id="status">
                <option>Hiển thị</option>
                <option>Ẩn</option>
            </select>
        </div>
    </div>
    
    <div class="image-upload">
        <label for="file-upload">Hình ảnh (JPG, PNG)</label>
        <input type="file" id="file-upload">
        <button>Đăng</button>
    </div>
</div>
            
        </main>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

