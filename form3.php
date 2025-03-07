<?php 

function getDogAndPrintImg($url) //A função irá simplesmente escrever a imagem, igual no HTML
{
    echo "<img src='$url' width='150px' heigth='70px' />"  ."<br/>" ."<br/>";
}

$url = 'https://api.thecatapi.com/v1/images/search?limit=10'; //Pegar a variável
$resposta = file_get_contents($url); //Deixar de maneira que o PHP entenda
$decoded = json_decode($resposta, true); //Deixar a resposta manipulável

foreach ($decoded as $dog) //O FOREACH vai simplesmente passar por todas as imagens
{
    getDogAndPrintImg($dog['url']);
}

?>