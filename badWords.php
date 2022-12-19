<?php

$paragrafo = $_POST["paragrafo"];
$censura = $_POST["censura"];

echo 'Paragrafo originale: ' . $paragrafo . '<br>';
echo 'Parola da censusare: ' . $censura . '<br>';
echo 'lunghezza frase:' . strlen($paragrafo) . "<br><br>";
$badWord = str_ireplace($censura, 'xxx', $paragrafo);
echo 'Frase censurata: ' . $badWord . '<br>';
echo 'lunghezza frase censusata: ' .strlen($badWord);

?>