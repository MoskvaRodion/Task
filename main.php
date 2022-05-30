<?php
$inform = new PDO("sqlite:Countries.sqlite");

$sql = "SELECT * FROM 'informations' LIMIT 10";

$result = $inform->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $item){
    echo $item['country_name'] . + "-" . $item['language']. + "-" . $item['Capital'];
}
?>   