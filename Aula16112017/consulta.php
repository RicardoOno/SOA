<?php
/**
 * Created by PhpStorm.
 * User: Tadashi
 * Date: 11/11/2017
 * Time: 09:59
 */

$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx/CalcPrazo";
$dados['nCdServico'] = $_POST['codServico'];
$dados['sCepOrigem'] = $_POST['cepOrigem'];
$dados['sCepDestino'] = $_POST['cepDestino'];


//Trata ps dadps ára formato de GET
$dados = http_build_query($dados);

//Inicia o curl para a url em questão com os dados

$url = curl_init($url . '?' . $dados);

//Configura o curl
curl_setopt($url, CURLOPT_RETURNTRANSFER, true);

// executa o culr com parametros anteriores
$result = curl_exec($url);

//Pega o xml de retorno e transforma em um objeto simplexml
$result = simplexml_load_string($result);
$result = $result->Servicos->cServico->DataMaxEntrega;
?>
<pre>
    <?php echo $result ?>
</pre>
