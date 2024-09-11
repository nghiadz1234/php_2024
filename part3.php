<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'knphp');

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    // Thêm dữ liệu vào bảng users
    $name = "Nguyen Van A";
    $email = "nguyenvana@example.com";
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công!<br>";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }

    // Cập nhật dữ liệu trong bảng users
    $new_name = "Tran Van B";
    $new_email = "tranvanb@example.com";
    $sql = "UPDATE users SET name='$new_name', email='$new_email' WHERE id=1";
    if ($conn->query($sql) === TRUE) {
        echo "Cập nhật dữ liệu thành công!<br>";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }

    // Xóa dữ liệu từ bảng users
    $sql = "DELETE FROM users WHERE id=2";
    if ($conn->query($sql) === TRUE) {
        echo "Xóa dữ liệu thành công!<br>";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }

    // Hiển thị dữ liệu từ bảng users
    $sql = "SELECT id, name, email, created_at FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . " - Created At: " . $row["created_at"] . "<br>";
        }
    } else {
        echo "Không có dữ liệu.<br>";
    }

    // Đóng kết nối
    $conn->close();
    ?>
    
</body>
</html>