<?php
/**
 * Created by PhpStorm.
 * User: Tadashi
 * Date: 11/11/2017
 * Time: 09:59
 */

$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx/CalcPreco";
$dados['nCdEmpresa'] = '';
$dados['sDsSenha'] = '';
$dados['nCdServico'] = $_POST['nCdServico'];
$dados['sCepOrigem'] = $_POST['sCepOrigem'];
$dados['sCepDestino'] = $_POST['sCepDestino'];
$dados['nVlPeso'] = $_POST['nVlPeso'];
$dados['nCdFormato'] = $_POST['nCdFormato'];
$dados['nVlComprimento'] = $_POST['nVlComprimento'];
$dados['nVlAltura'] = $_POST['nVlAltura'];
$dados['nVlLargura'] = $_POST['nVlLargura'];
$dados['nVlDiametro'] = $_POST['nVlDiametro'];
$dados['sCdMaoPropria'] = $_POST['sCdMaoPropria'];
$dados['nVlValorDeclarado'] = $_POST['nVlValorDeclarado'];
$dados['sCdAvisoRecebimento'] = $_POST['sCdAvisoRecebimento'];


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

$result = $result->Servicos->cServico;
?>
<pre>
    <?php  var_dump($result); ?>
</pre>
