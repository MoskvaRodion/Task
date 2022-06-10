<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_data.css">
    <title>Document</title>
</head>
<body>
<?php
$inform = new PDO("sqlite:Countries.sqlite");
$sql = "SELECT * FROM 'informations'";
$result = $inform->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<table border="2">
    <thead>
        <tr>
            <td>№</td>
            <td>Название страны</td>
            <td>Официальный язык</td>
            <td>Столица</td>
        </tr>
    </thead>
<?php foreach($result as $value){ ?>
    <tr>
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['country_name']; ?></td>
        <td><?php echo $value['language']; ?></td>
        <td><?php echo $value['capital']; ?></td>
    </tr>
<?php } ?>
</table>
</body>
</html>

