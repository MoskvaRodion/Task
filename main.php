<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_main.css">
    <title>Task</title>
</head>
<body>
<div>
<form action="request.php" method="post">
        <input type="text" name="Country" required placeholder="Введите страну" size="18" />
        <input type="text" name="Language" placeholder="Введите язык" size="18" />
        <input type="text" name="Capital" placeholder="Введите столицу" size="18" />
        <button type="submit" name="Add">Добавить</button> 
</form>
</div>
<div class="data">
    <?php
        include('data_loader.php');
    ?>
</div>
</body>
</html>