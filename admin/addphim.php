<?php
    include('connect.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Lấy dữ liệu từ form
        $name = $_POST['name'];
        $episode = $_POST['episode'];

        if (!file_exists('uploads/')) {
            // Nếu không tồn tại, tạo thư mục mới
            mkdir('uploads/');
        }
        // Kiểm tra xem tệp ảnh có được tải lên không
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
            // Xử lý tệp ảnh
            $targetDirectory = "uploads/";
            $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Kiểm tra kiểu tệp ảnh cho phép (vd: jpeg, png, gif)
            $allowedExtensions = array("jpeg", "jpg", "png", "gif");
            if (!in_array($imageFileType, $allowedExtensions)) {
                echo "Chỉ cho phép tải lên các tệp ảnh có định dạng JPEG, JPG, PNG, GIF.";
                exit();
            }

            // Di chuyển và lưu trữ tệp ảnh
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                // Lưu trữ tệp ảnh thành công

                // Thêm phim vào cơ sở dữ liệu
                $stmt = $conn->prepare("INSERT INTO movies (name, image, episode) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $name, $targetFile, $episode);
                $stmt->execute();

                // Chuyển hướng về trang chủ
                header('Location: index.php');
                exit();
            } else {
                // Lưu trữ tệp ảnh thất bại
                echo "Đã xảy ra lỗi khi lưu trữ tệp ảnh.";
                exit();
            }
        } else {
            // Không có tệp ảnh được tải lên
            echo "Vui lòng chọn một tệp ảnh để tải lên.";
            exit();
        }
    }
?>