<?php 

function getPokemonAndPrintImg($url)
{
    $resposta = file_get_contents($url);
    $decoded = json_decode($resposta, true);
    $url_imagem = $decoded['sprites']['front_default'];
    $url_imagem2 = $decoded['sprites']['front_shiny'];
    echo "<img src='$url_imagem'/>";
    echo "<img src='$url_imagem2'/>" . "<br/>";
}
$url = 'https://pokeapi.co/api/v2/pokemon/';
$resposta = file_get_contents($url);
$decoded = json_decode($resposta, true);
$lista_pokemons = $decoded['results'];

foreach ($lista_pokemons as $pokemon) {
    print_r($pokemon['name']. '<br/>');
    getPokemonAndPrintImg($pokemon['url']);
}

?>