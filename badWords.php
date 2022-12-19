<?php

$paragrafo = $_POST["paragrafo"];
$censura = $_POST["censura"];

echo 'Paragrafo originale: ' . $paragrafo . '<br>';
echo 'Parola da censusare: ' . $censura . '<br><br>';
echo 'Frase censurata: ' . str_ireplace($censura, 'xxx', $paragrafo);

?>