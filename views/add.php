<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="?act=create" enctype="multipart/form-data">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="description">Description:</label>
            <input type="text" name="description">
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" name="image">
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="text" name="price">
        </div>

        <button type="submit" name="create">Create</button>
    </form>
</body>

</html>