<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB</title>
</head>
<style>
    /* Định dạng cho body */
    body {
        font-family: Arial, sans-serif; /* Phông chữ */
        background-color: #2e2e2e; /* Màu nền tối */
        color: #f0f0f0; /* Màu chữ sáng */
        margin: 20px; /* Khoảng cách xung quanh */
    }

    /* Định dạng tiêu đề */
    h1 {
        text-align: center; /* Căn giữa tiêu đề */
        color: #f0f0f0; /* Màu chữ sáng */
    }

    /* Định dạng nút thêm sản phẩm */
    button {
        margin-bottom: 20px; /* Khoảng cách dưới nút */
        padding: 10px 15px; /* Khoảng cách bên trong nút */
        background-color: #555; /* Màu nền nút xám tối */
        color: white; /* Màu chữ trắng */
        border: none; /* Bỏ viền */
        border-radius: 5px; /* Bo góc */
        cursor: pointer; /* Con trỏ khi di chuột */
    }

    /* Định dạng bảng */
    table {
        width: 100%; /* Chiều rộng 100% */
        border-collapse: collapse; /* Gộp viền */
    }

    /* Định dạng tiêu đề bảng */
    th {
        background-color: #444; /* Màu nền cho tiêu đề bảng */
        color: #f0f0f0; /* Màu chữ sáng */
        padding: 10px; /* Khoảng cách bên trong */
    }

    /* Định dạng ô bảng */
    td {
        padding: 10px; /* Khoảng cách bên trong */
        border: 1px solid #666; /* Đường viền nhạt cho các ô */
        background-color: #333; /* Màu nền ô tối */
        color: #f0f0f0; /* Màu chữ sáng */
    }

    /* Định dạng hình ảnh trong bảng */
    td img {
        width: 100px; /* Chiều rộng hình ảnh */
        height: auto; /* Giữ tỷ lệ hình ảnh */
    }

    /* Định dạng liên kết trong ô hành động */
    a {
        text-decoration: none; /* Bỏ gạch chân */
        color: #007bff; /* Màu chữ cho liên kết */
    }

    a:hover {
        text-decoration: underline; /* Gạch chân khi di chuột */
        color: #66b3ff; /* Màu chữ liên kết khi hover */
    }


</style>
<body>
    <h1>Admin Dashboard</h1>
    <button><a href="?act=add">Add</a></button>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><img width="100" src="./img/<?= $product['image'] ?>" alt=""></td>
                    <td><?= $product['price'] ?></td>
                    <td>
                        <a href="?act=update&id=<?= $product['id'] ?>"> Update</a>
                        <a onclick="return confirm('Are you sure')" href="?act=delete&id=<?= $product['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>

</html>