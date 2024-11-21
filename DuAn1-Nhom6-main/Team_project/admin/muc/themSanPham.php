<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 600px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 20px;
        }

        .form-section, .side-section {
            width: 100%;
        }

        h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
            display: block;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
        }

        .form-group textarea {
            resize: vertical;
            height: 80px;
        }

        .file-input {
            margin-bottom: 15px;
        }

        .button-submit {
            padding: 10px 20px;
            border: 1px solid #007bff;
            background-color: #007bff;
            color: white;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-section">
        <h2>Sản phẩm / Thêm sản phẩm</h2>
        <div class="form-group">
            <label for="productName">Tên sản phẩm</label>
            <input type="text" id="productName" placeholder="Tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="regularPrice">Giá bán thường (đ)</label>
            <input type="text" id="regularPrice" placeholder="Giá bán thường">
        </div>
        <div class="form-group">
            <label for="discountPrice">Giá khuyến mãi (đ)</label>
            <input type="text" id="discountPrice" placeholder="Giá khuyến mãi">
        </div>
        <div class="form-group">
            <label for="quantity">Số lượng (nhập số)</label>
            <input type="number" id="quantity" placeholder="Số lượng">
        </div>
        <div class="form-group">
            <label for="shortDescription">Mô tả ngắn</label>
            <textarea id="shortDescription" placeholder="Mô tả ngắn"></textarea>
        </div>
    </div>

    <div class="side-section">
        <div class="file-input">
            <label for="productImage">Hình ảnh (JPG, PNG)</label>
            <input type="file" id="productImage" accept=".jpg, .png">
        </div>
        <div class="form-group">
            <label for="category">Chọn danh mục</label>
            <select id="category">
                <option>Chưa có danh mục</option>
                <!-- Add other options as needed -->
            </select>
        </div>
        <div class="button-submit">Đăng</div>
    </div>
</div>

</body>
</html>
