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

// Kiểm tra phương thức gửi dữ liệu lên
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $name = $_POST['name'];
    $episode = $_POST['episode'];

    // Kiểm tra nếu có tệp ảnh mới được tải lên
    if ($_FILES['image']['name']) {
        // Đường dẫn thư mục lưu trữ tệp ảnh
        $uploadDir = 'uploads/';

        // Tên tệp ảnh tải lên
        $imageName = $_FILES['image']['name'];

        // Đường dẫn tệp ảnh tạm thời trên máy chủ
        $tempImagePath = $_FILES['image']['tmp_name'];

        // Tạo đường dẫn và tên tệp ảnh mới
        $newImagePath = $uploadDir . basename($imageName);

        // Xóa ảnh cũ nếu tồn tại
        if (isset($movie['image']) && file_exists($movie['image'])) {
            unlink($movie['image']);
        }

        // Di chuyển tệp ảnh vào thư mục lưu trữ
        if (move_uploaded_file($tempImagePath, $newImagePath)) {
            // Cập nhật đường dẫn ảnh trong cơ sở dữ liệu
            $stmt = $conn->prepare("UPDATE movies SET name = ?, image = ?, episode = ? WHERE id = ?");
            $stmt->bind_param("sssi", $name, $newImagePath, $episode, $id);
            $stmt->execute();

            // Chuyển hướng về trang chủ
            header('Location: index.php');
            exit();
        } else {
            // Xử lý lỗi di chuyển tệp ảnh
            // ...
        }
    } else {
        // Không có tệp ảnh mới được tải lên
        // Bỏ qua cập nhật cột "image"
        $stmt = $conn->prepare("UPDATE movies SET name = ?, episode = ? WHERE id = ?");
        $stmt->bind_param("ssi", $name, $episode, $id);
        $stmt->execute();

        // Chuyển hướng về trang chủ
        header('Location: index.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sửa phim</title>
</head>

<body>
    <h1>Sửa phim</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <label for="name">Tên phim:</label>
        <input type="text" name="name" value="<?php echo $movie['name']; ?>" required>
        <br>
        <label for="current_image">Ảnh hiện tại:</label>
        <br>
        <img src="<?php echo isset($movie['image']) ? $movie['image'] : ''; ?>" alt="Current Image" style="max-width: 200px;">
        <br>
        <label for="image">Chọn ảnh mới:</label>
        <input type="file" name="image">
        <br>
        <label for="episode">Tập:</label>
        <input type="text" name="episode" value="<?php echo $movie['episode']; ?>" required>
        <br>
        <input type="submit" value="Cập nhật">
    </form>
</body>

</html>