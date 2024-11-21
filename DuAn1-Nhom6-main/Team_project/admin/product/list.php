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
    background-color: #f7f7f7;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .container {
    width: 100%;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 10px;
  }

  .container h2 {
    margin-top: 0;
    font-size: 18px;
    font-weight: normal;
    color: #333;
  }

  .add-product {
    text-align: right;
    margin-bottom: 10px;
  }

  .add-product button {
    background-color: #008cff;
    color: #fff;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    color: #333;
  }

  th,
  td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
  }

  th {
    background-color: #f3f4f6;
    font-weight: 600;
  }

  .status {
    color: #fff;
    background-color: #28a745;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: bold;
  }

  .dots {
    font-size: 20px;
    cursor: pointer;
  }

  .product-img {
    width: 40px;
    height: 60px;
    object-fit: cover;
  }
</style>
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
        <div class="container">
          <h2>Sản phẩm</h2>
          <div class="add-product">
            <a href="index.php?act=addsp"><button>+ Thêm sản phẩm</button></a>
          </div>
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>ID danh mục</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Mô tả</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($listproduct as $product) {
                extract($product);
                $sua = "index.php?act=suasp&product_id=".$product_id;
                $xoa = "index.php?act=xoasp&product_id=".$product_id;
                $hinhpath = "../uploads/".$product_img;
                if (is_file($hinhpath)) { 
                  $product_img = "<img src='".$hinhpath."' height='80'>";
                } else {
                  $product_img = "no photo";
                }
                echo '<tr>
                        <td>'.$product_id.'</td>
                        <td>'.$product_name.'</td>
                        <td>'.$category_id.'</td>
                        <td>'.$product_img.'</td>
                        <td>'.$product_price.'</td>
                        <td>'.$product_amount.'</td>
                        <td>'.$product_description.'</td>
                        <td>
                          <a href="'.$sua.'"><input type="button" value="Sửa" class="btn btn-primary"></a>
                          <a href="'.$xoa.'"><input type="button" value="xóa" class="btn btn-success" onclick="return confirm(\'Bạn có chắn chắn muốn xóa ko!!\') "></a>
                        </td>
                      </tr>';
              }
              ?>
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