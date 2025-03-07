<?php 

function getDogAndPrintImg($url)
{
    echo "<img src='$url' width='150px' heigth='70px' />"  ."<br/>" ."<br/>";
}
$url = 'https://api.thecatapi.com/v1/images/search?limit=10';
$resposta = file_get_contents($url);
$decoded = json_decode($resposta, true);

foreach ($decoded as $dog) {
    getDogAndPrintImg($dog['url']);
}

?>