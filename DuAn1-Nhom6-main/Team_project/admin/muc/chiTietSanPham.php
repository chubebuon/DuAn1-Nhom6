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
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            font-size: 18px;
            color: #333;
        }
        .status {
            color: red;
            font-weight: bold;
        }
        .product-detail {
            display: flex;
            margin-top: 20px;
        }
        .product-image img {
            width: 100px;
            height: auto;
            border-radius: 5px;
        }
        .product-info {
            margin-left: 20px;
        }
        .product-info h2 {
            font-size: 16px;
            color: #333;
            margin: 0;
        }
        .product-info .price {
            color: #e91e63;
            font-weight: bold;
            margin-top: 5px;
        }
        .order-status {
            margin-top: 20px;
        }
        .order-status label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .order-status select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        .order-status button {
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .order-status button:hover {
            background-color: #0056b3;
        }
        .customer-info {
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .customer-info .info {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }
        .total {
            font-size: 18px;
            color: #e91e63;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
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
            <div class="container">
        <div class="header">
            <h1>Chi tiết đơn hàng</h1>
            <span class="status">Chưa xác nhận</span>
        </div>

        <div class="product-detail">
            <div class="product-image">
                <img src="product.jpg" alt="Product Image">
            </div>
            <div class="product-info">
                <h2>Đất Rừng Phương Nam - Phiên Bản Điện Ảnh</h2>
                <p class="price">126,000₫ x 3</p>
            </div>
        </div>

        <div class="order-status">
            <label for="status">Trạng thái đơn hàng:</label>
            <select id="status">
                <option value="waiting">Chờ xác nhận</option>
                <option value="confirmed">Đã xác nhận</option>
                <option value="shipping">Đang giao hàng</option>
                <option value="completed">Đã hoàn thành</option>
                <option value="canceled">Đã hủy</option>
            </select>
            <button onclick="updateStatus()">Cập nhật</button>
        </div>

        <div class="customer-info">
            <div class="info"><strong>Tên khách hàng:</strong> <span>Nguyễn Lê Anh Khoa</span></div>
            <div class="info"><strong>Số điện thoại:</strong> <span>0336216546</span></div>
            <div class="info"><strong>Địa chỉ giao hàng:</strong> <span>Quận Mỹ Đình, Hà Nội</span></div>
            <div class="info"><strong>Thời gian:</strong> <span>08:50 07-12-2023</span></div>
            <div class="info"><strong>Tổng tiền hàng:</strong> <span>378,000₫</span></div>
            <div class="info"><strong>Phí vận chuyển:</strong> <span>Miễn phí</span></div>
            <div class="info"><strong>Ghi chú:</strong> <span>Hello 2023</span></div>
        </div>

        <div class="total">
            Thành tiền: 378,000₫
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
