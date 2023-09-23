<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="/save" method="post">
            <label>UPC</label>
            <input type="text" name="UPC" placeholder="UPC">
            <br>
            <label>name</label>
            <input type="text" name="name" placeholder="name">
            <br>
            <label>quantity</label>
            <input type="text" name="quantity" placeholder="quantity">
            <br>
            <label>price</label>
            <input type="text" name="price" placeholder="price">
            <br>
            <label>expiry_date</label>
            <input type="text" name="expiry_date" placeholder="expiry_date">
            <br>
            <label>created_at</label>
            <input type="text" name="created_at" placeholder="created_at" >
            <br>
            <input type="submit" value="save">

    </form>
    <h1>Product listing</h1>
    <table border="1">
        <tr>
            <th>UPC</th>
            <th>name</th>
            <th>quantity</th>
            <th>price</th>
            <th>expiry_date</th>
            <th>created_at</th>
            <th>action</th>

        </tr>
        <?php foreach ($product as $pr): ?>
            <tr>
                <td><?= $pr['UPC'] ?></td>
                <td><?= $pr['name'] ?></td>
                <td><?= $pr['quantity'] ?></td>
                <td><?= $pr['price'] ?></td>
                <td><?= $pr['expiry_date'] ?></td>
                <td><?= $pr['created_at'] ?></td>
                <td><a href="/delete/<?= $pr['id']?>">delete</a>|| <a href="/edit/ <?= $pr['id'] ?>">edit</a> </td>
            </tr>
       
            <?php endforeach; ?>
    </table>
</body>
</html>