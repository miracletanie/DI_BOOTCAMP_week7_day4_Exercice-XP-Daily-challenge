<?php

$json_data = file_get_contents("data.json");
$data = json_decode($json_data, true);

foreach ($data['Data'] as $item) {
    echo "Name: " . $item['Name'] . "<br>";
    echo "Age: " . $item['Age'] . "<br>";
    echo "City: " . $item['City'] . "<br>";
    echo "<br>";
}
?>