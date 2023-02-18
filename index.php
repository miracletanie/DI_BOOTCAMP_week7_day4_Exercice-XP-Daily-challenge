<?php


/**
le nom du fichier que tu as cree est my_data.JSON
je vois dans le code que tu as mis un fichier data.json
soit tu as copié le code quelque part sans tester
soit tu ne sais pas ce que tu as fait.

*/
$json_data = file_get_contents("data.json");
$data = json_decode($json_data, true);

foreach ($data['Data'] as $item) {
    echo "Name: " . $item['Name'] . "<br>";
    echo "Age: " . $item['Age'] . "<br>";
    echo "City: " . $item['City'] . "<br>";
    echo "<br>";
}
?>
