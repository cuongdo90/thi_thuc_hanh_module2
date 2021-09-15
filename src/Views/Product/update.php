<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Sửa mặt hàng</title>
</head>
<body>
<h2>EDIT </h2>
<form method="post">
    <table>
        <tr>
            <td><label for="product-name">Tên hàng:</label></td>
            <td><textarea type="text" id="product-name" name="name" cols="21"><?php echo $product['name'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td><label for="product-sector">Loại hàng:</label></td>
            <td><textarea type="text" id="product-sector" name="sector" cols="21"><?php echo $product['sector'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="product-price">Giá</label></td>
            <td><input type="text" id="product-price" name="price" value= <?php echo $product['price'] ?>></td>
        </tr>
        <tr>
            <td><label for="product-color">Số lượng</label></td>
            <td><input type="text" id="product-quantity" name="quantity" value= <?php echo $product['quantity'] ?>></td>
        </tr>
        <tr>
            <td><label for="product-description">Mô tả</label></td>
            <td><textarea type="text" id="product-description" name="description"
                          cols="21"><?php echo $product['description'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: right">
                <button type="submit" class="btn btn-success">Sửa mặt hàng</button>
                <a href="index.php" type="button" class="btn btn-success">Thoát</a></td>
        </tr>
    </table>
</form>
</body>
</html>