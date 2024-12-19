<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập hệ thống</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-color: #f7f7f7;
        }

        .login-form {
            width: 100%;
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-form h2 {
            margin-bottom: 20px;
            font-size: 18px;
            color: #333;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-form button:hover {
            background: #0056b3;
        }

        .dashboard {
            width: 100%;
            max-width: 1200px;
            margin-top: 30px;
        }

        .dashboard .sidebar {
            float: left;
            width: 20%;
            background: #2c3e50;
            color: #fff;
            height: 300px;
            padding: 15px;
            border-radius: 8px;
        }

        .dashboard .content {
            float: right;
            width: 75%;
            height: 300px;
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content .stats {
            display: flex;
            justify-content: space-between;
        }

        .content .stats .card {
            flex: 1;
            margin: 0 5px;
            padding: 20px;
            color: #fff;
            text-align: center;
            border-radius: 8px;
        }

        .card.red { background: #e74c3c; }
        .card.blue { background: #3498db; }
        .card.green { background: #2ecc71; }
        .card.yellow { background: #f1c40f; }
    </style>
</head>
<body>
    <!-- Form đăng nhập -->
    <div class="login-form">
        <h2>Đăng nhập hệ thống</h2>
        <input type="text" placeholder="Số điện thoại" required>
        <input type="password" placeholder="Mật khẩu" required>
        <button>Đăng nhập</button>
    </div>

    <!-- Giao diện quản trị -->
    <div class="dashboard">
        <div class="sidebar">
            <h3>Quản trị hệ thống</h3>
            <ul>
                <li>Quản lý tài khoản</li>
                <li>Quản lý Banner</li>
                <li>Quản lý nội dung</li>
                <li>Danh mục sản phẩm</li>
            </ul>
        </div>

        <div class="content">
            <h3>Quản trị nội dung</h3>
            <div class="stats">
                <div class="card red">
                    <p>12</p>
                    <p>Sản phẩm</p>
                </div>
                <div class="card blue">
                    <p>3</p>
                    <p>Bài viết tin tức</p>
                </div>
                <div class="card green">
                    <p>5</p>
                    <p>Người nhận</p>
                </div>
                <div class="card yellow">
                    <p>2</p>
                    <p>Tài khoản người dùng</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
