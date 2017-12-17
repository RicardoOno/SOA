<!-- https://maps.googleapis.com/maps/api/place/details/json?key=AIzaSyDC0uLwfB0vj6-SN0TnncyoiAzuKpH2SeI&placeid=ChIJJRd6gVQNz5QRlpt7oiL1zz0 -->

<?php

$url = "https://maps.googleapis.com/maps/api/place/autocomplete/json";
$dados['input']= $_GET['local'];
$dados['key'] = 'AIzaSyDC0uLwfB0vj6-SN0TnncyoiAzuKpH2SeI';

$json['input'] = file_get_contents('https://maps.googleapis.com/maps/api/place/autocomplete/json?key='. $dados['key'] .'&input='. urlencode($dados['input']));

$dados_processados['input'] = json_decode($json['input']);

  foreach($dados_processados['input']->predictions as $local['input'])
  {

      echo "<h1>".$local['input']->description."</h1>";
      echo "<p> place_id:<b>".$local['input']->place_id."</b></p>";

  }


$json['detail'] = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?key='. $dados['key'] .'&placeid='. $local['input']->place_id);

// $json['detail'] = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?key=AIzaSyDC0uLwfB0vj6-SN0TnncyoiAzuKpH2SeI&placeid=ChIJJRd6gVQNz5QRlpt7oiL1zz0');

$dados_processados['detail'] = json_decode($json['detail']);

if(isset($dados_processados['detail']->result->rating)){
	echo '<h3>Rating Geral: '. $dados_processados['detail']->result->rating .'</h3>';
}
if(isset($dados_processados['detail']->result->reviews)){
foreach ($dados_processados['detail']->result->reviews as $local['detail']) {
	echo '<h1> Nome: '.$local['detail']->author_name.'</h1>';
	echo '<p> Rating: '. $local['detail']->rating.'</p>';
	echo '<p> Comentario:'. $local['detail']->text.'</p>';
}
}

echo '<h1>Horario de Funcionamento</h1>';
foreach ($dados_processados['detail']->result->opening_hours->weekday_text as $data){
		echo $data .'<br>';
	}

?>
