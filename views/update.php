<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form method="POST" action="?act=edit&id=<?= $product['id'] ?>" enctype="multipart/form-data">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?= $product['name'] ?>">
        </div>
        <div>
            <label for=" description">Description:</label>
            <input type="text" name="description" value="<?= $product['description'] ?>">
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" name="image">
            <img width="100" src="img/<?= $product['image'] ?>" alt="">
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="text" name="price" value="<?= $product['price'] ?>">
        </div>
        <button type="submit" name="edit">Edit</button>
    </form>
</body>

</html>