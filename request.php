<?php

$inform = new PDO("sqlite:Countries.sqlite");
$Country = $_POST["Country"];
$Language = $_POST["Language"];
$Capital = $_POST["Capital"];
$sql = "INSERT INTO users (country_name, language, capital) VALUES ($Country, $Language, $Capital)";
$result = $inform->exec($sql);
?>