<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <h1>Quản lý phim</h1>

    <!-- Form thêm phim -->
    <h2>Thêm phim</h2>
    <form method="POST" action="addphim.php" enctype="multipart/form-data">
        <label for="name">Tên phim:</label>
        <input type="text" name="name" required>
        <br>
        <label for="image">Ảnh:</label>
        <input type="file" name="image" required>
        <br>
        <label for="episode">Tập:</label>
        <input type="number" name="episode" required>
        <br>
        <input type="submit" value="Thêm">
    </form>

    <!-- Danh sách phim -->
    <?php
    include('connect.php');

    // Truy vấn danh sách phim
    $sql = "SELECT * FROM movies";
    $result = $conn->query($sql);

    // Kiểm tra và lấy dữ liệu từ kết quả truy vấn
    $movies = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $movies[] = $row;
        }
    }

    // Đóng kết nối
    $conn->close();
    ?>

    <?php if (isset($movies) && !empty($movies)) : ?>
        <h2>Danh sách phim</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Tên phim</th>
                <th>Ảnh</th>
                <th>Tập</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($movies as $movie) : ?>
                <tr>
                    <td><?php echo $movie['id']; ?></td>
                    <td><?php echo $movie['name']; ?></td>
                    <td><img style="width:80px" src="<?php echo $movie['image']; ?>" alt="<?php echo $movie['image']; ?>"></td>
                    <td><?php echo $movie['episode']; ?></td>
                    <td><a href="editphim.php?id=<?php echo $movie['id']; ?>">Sửa</a></td>
                    <td><a href="deletephim.php?id=<?php echo $movie['id']; ?>">Xóa</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <h2>Không có phim trong danh sách</h2>
    <?php endif; ?>
</body>

</html>