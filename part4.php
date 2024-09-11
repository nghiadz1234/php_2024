<?php
try {
    // Kết nối với cơ sở dữ liệu
    $pdo = new PDO("mysql:host=localhost;dbname=knphp", 'root', '');

    // Thiết lập chế độ lỗi PDO thành Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Thêm dữ liệu vào bảng users
    $name = "Nguyen Van A";
    $email = "nguyenvana@example.com";
    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'email' => $email]);
    echo "Thêm dữ liệu thành công!<br>";

    // Cập nhật dữ liệu người dùng
    $new_name = "Tran Van B";
    $new_email = "tranvanb@example.com";
    $sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $new_name, 'email' => $new_email, 'id' => 1]);
    echo "Cập nhật dữ liệu thành công!<br>";

    // Xóa dữ liệu người dùng
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => 2]);
    echo "Xóa dữ liệu thành công!<br>";

    // Hiển thị dữ liệu từ bảng users
    $sql = "SELECT id, name, email, created_at FROM users";
    $stmt = $pdo->query($sql);

    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . " - Created At: " . $row["created_at"] . "<br>";
        }
    } else {
        echo "Không có dữ liệu.<br>";
    }

} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

// Đóng kết nối
$pdo = null;
?>