<?php
/**
 * Created by PhpStorm.
 * User: Tadashi
 * Date: 11/11/2017
 * Time: 09:59
 */

//$expressao = $_POST['num1'].$_POST['expre'].$_POST['num2'];
//echo file_get_contents('http://api.mathjs.org/v1/?expr='.$expressao);

$url = "http://api.mathjs.org/v1/?expr=";
$dados['num1'] = $_POST['num1'];
$dados['expre'] = $_POST['expre'];
$dados['num2'] = $_POST['num2'];


//Trata ps dadps ára formato de GET
$dados = http_build_query($dados);
echo $dados;

//Inicia o curl para a url em questão com os dados
$url = curl_init($url . '?' . $dados);


$json_str = '{"expr": '. $dados['num1'] .'}';
echo json_decode($json_str);
//Configura o curl
curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
// executa o culr com parametros anteriores
$result = curl_exec($url);

//Pega o xml de retorno e transforma em um objeto simplexml
$result = urlencode($result);

?>
