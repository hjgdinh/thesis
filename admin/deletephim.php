<?php
    include('connect.php');

    // Kiểm tra xem có tham số id được truyền vào không
    if (!isset($_GET['id'])) {
        header('Location: index.php');
        exit();
    }

    // Lấy id của phim từ tham số truyền vào
    $id = $_GET['id'];

    // Kiểm tra phim có tồn tại trong cơ sở dữ liệu không
    $stmt = $conn->prepare("SELECT * FROM movies WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $movie = $result->fetch_assoc();

    if (!$movie) {
        header('Location: index.php');
        exit();
    }

    // Xóa ảnh cũ nếu tồn tại
    if (isset($movie['image']) && file_exists($movie['image'])) {
        unlink($movie['image']);
    }

    // Xóa phim khỏi cơ sở dữ liệu
    $stmt = $conn->prepare("DELETE FROM movies WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Chuyển hướng về trang chủ
    header('Location: index.php');
    exit();
?>
