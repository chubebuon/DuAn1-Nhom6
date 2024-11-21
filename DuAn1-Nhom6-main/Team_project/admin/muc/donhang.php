
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
        /* Styling for status buttons */
        .status {
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }

        .status.pending {
            background-color: #f8d7da;
            color: #721c24;
        }

        .status.confirmed {
            background-color: #ffeeba;
            color: #856404;
        }

        .status.in-progress {
            background-color: #d4edda;
            color: #155724;
        }

        /* Styling for action buttons */
        .btn-view {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
        }

        .btn-view:hover {
            background-color: #218838;
        }

        .btn-edit {
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
        }

        .btn-edit:hover {
            background-color: #5a6268;
        }

        /* Styling for Export button */
        .btn-export {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 3px;
            font-weight: bold;
        }

        .btn-export:hover {
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

            <!-- Orders Table Section -->
            <div class="table-container">
                <h4>Danh sách đơn hàng</h4>
                <button style="float: right;" class="btn btn-export"><i class="fas fa-file-excel"></i> Xuất Excel</button>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên khách hàng</th>
                            <th>Ngày đặt</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                            <th>Chỉnh sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nguyễn Lê Anh Khoa</td>
                            <td>08:50 07-12-2023</td>
                            <td>378,000đ</td>
                            <td><span class="status pending">Chờ xác nhận</span></td>
                            <td>
                                <button class="btn btn-view btn-sm">Xem</button>
                                <a href="./chiTietSanPham.php"><button class="btn btn-edit btn-sm btn-danger">Sửa</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Nguyễn Lê Anh Khoa</td>
                            <td>08:48 07-12-2023</td>
                            <td>306,000đ</td>
                            <td><span class="status in-progress">Đang giao</span></td>
                            <td>
                                <button class="btn btn-view btn-sm">Xem</button>
                                <a href="./chiTietSanPham.php"><button class="btn btn-edit btn-sm btn-danger">Sửa</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mai Hảo Hảo</td>
                            <td>22:12 06-12-2023</td>
                            <td>180,000đ</td>
                            <td><span class="status confirmed">Đã xác nhận</span></td>
                            <td>
                                <button class="btn btn-view btn-sm">Xem</button>
                                 <a href="./chiTietSanPham.php"><button class="btn btn-edit btn-sm btn-danger">Sửa</button></a>
                            </td>
                        </tr>
                        <!-- Thêm nhiều hàng hơn nếu cần -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
