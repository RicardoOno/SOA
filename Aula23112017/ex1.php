<?php

$url = "https://maps.googleapis.com/maps/api/place/autocomplete/json";
$dados['input']= $_GET['local'];
$dados['key'] = 'AIzaSyDC0uLwfB0vj6-SN0TnncyoiAzuKpH2SeI';


$json = file_get_contents('https://maps.googleapis.com/maps/api/place/autocomplete/json?key='. $dados['key'] .'&input='. urlencode($dados['input']));



$dados_processados = json_decode($json);

var_dump($dados_processados);

  foreach($dados_processados->predictions as $local)
  {

      echo "<h1>".$local->description."</h1>";
      echo "<p> place_id:<b>".$local->place_id."</b></p>";

  }


?>