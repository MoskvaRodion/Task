<?php
$inform = new PDO("sqlite:Countries.sqlite");
$sql = "SELECT * FROM 'informations' LIMIT 10";
$result = $inform->query($sql)->fetchAll(PDO::FETCH_ASSOC);


echo "<pre>";
print_r($result);
echo "</pre>";
?>
<table>
    <thead>
        <tr>
            <td>№</td>
            <td>Название страны</td>
            <td>Официальный язык</td>
            <td>Столица</td>
        </tr>
    </thead>
<?php foreach($data as $value){ ?>
    <tr>
        <td><?php echo $value['Id']; ?></td>
        <td><?php echo $value['country_name']; ?></td>
        <td><?php echo $value['language']; ?></td>
        <td><?php echo $value['capital']; ?></td>
    </tr>
<?php } ?>
</table>
