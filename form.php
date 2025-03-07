<h1 id="titulo">PokéPesquisa</h1>
<p>Digite o nome de um Pokémon!</p>
<form action="" method="get">
    <input type="text" name = "pokemon" value="<?php $pokemon = $_GET['pokemon'];?>">
</form>

<link href='./style.css' rel='stylesheet'>

<?php 
$pokemon = $_GET['pokemon'];
$url = 'https://pokeapi.co/api/v2/pokemon/' . $pokemon;
$resposta = file_get_contents($url);
//var_dump($resposta);
$decoded = json_decode($resposta, true); //o JSON_DECODED serve transformar em um array e o true para não transformar em objeto e sim no array
//var_dump($decoded);
$url_imagem = $decoded['sprites']['front_default'];
$url_imagem2 = $decoded['sprites']['front_shiny'];
//echo $url_imagem;

echo "<img src='$url_imagem'/>";
echo "<img src='$url_imagem2'/>" . "<br/>";
echo "Aqui está o " .$pokemon ." que você pediu!";


?>