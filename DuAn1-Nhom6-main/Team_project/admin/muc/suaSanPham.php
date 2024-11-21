<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    <style>
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

    <script>
        function updateStatus() {
            const statusElement = document.querySelector('.status');
            const select = document.getElementById('status');
            const status = select.options[select.selectedIndex].text;
            statusElement.textContent = status;
        }
    </script>
</body>
</html>
