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
            width: 100%;
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
            <div class="form-section">
                <h4>Tài khoản / Thêm tài khoản</h4>
                <form>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="fullname">Họ và tên</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Họ và tên">
                    </div>
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="username" placeholder="Tên đăng nhập">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" placeholder="Mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Xác nhận mật khẩu</label>
                        <input type="password" class="form-control" id="confirm_password" placeholder="Xác nhận mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" class="form-control" id="phone" placeholder="Số điện thoại">
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </main>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
