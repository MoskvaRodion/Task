<?php
$inform = new PDO("sqlite:Countries.sqlite");
$sql = "SELECT * FROM 'informations' LIMIT 10";
$result = $inform->query($sql)->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
?>   