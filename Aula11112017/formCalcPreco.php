<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/styles.css" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="container">
<h1>Aula de SOAP - 01</h1>
<h4 class="right-align">Data: 11/11/2017</h4>
<form method="post" action="consultaCalcPreco.php" class="col s12 formCep z-depth-2">
    <div class="row">
        <div class="input-field col s6">
            <input placeholder="Digite o CEP de origem" name="sCepOrigem" id="sCepOrigem" type="text" class="validate">
            <label for="sCepOrigem">CEP de Origem</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Digite o CEP de Destino" id="sCepDestino" name="sCepDestino" type="text" class="validate">
            <label for="sCepDestino">CEP de Destino</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Digite o codigo do Serviço. 04014" id="nCdServico" name="nCdServico" type="number" class="validate">
            <label for="nCdServico">Codigo do Serviço</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Digite o peso" id="nVlPeso" name="nVlPeso" type="number" class="validate">
            <label for="nVlPeso">Peso da encomenda (kg)</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Digite o peso" id="nCdFormato" name="nCdFormato" type="number" class="validate">
            <label for="nCdFormato">Formato da encomenda (1, 2 ou 3)</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Digite comprimento em cm" id="nVlComprimento" name="nVlComprimento" type="number" class="validate">
            <label for="nVlComprimento">Comprimento (cm)</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Digite a altura em cm" id="nVlAltura" name="nVlAltura" type="number" class="validate">
            <label for="nVlAltura">Altura (cm)</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Digite a largura em cm" id="nVlLargura" name="nVlLargura" type="number" class="validate">
            <label for="nVlLargura">Largura (cm)</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Digite o diametro em cm" id="nVlDiametro" name="nVlDiametro" type="number" class="validate">
            <label for="nVlDiametro">Diametro (cm)</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Entrega de mão propria?" id="sCdMaoPropria" name="sCdMaoPropria" type="text" class="validate">
            <label for="sCdMaoPropria">Entrega em mão propria? (S ou N)</label>
        </div>
        <div class="input-field col s6">
            <input id="nVlValorDeclarado" name="nVlValorDeclarado" type="number" class="validate" value="0">
            <label for="nVlValorDeclarado">Valor declarado?</label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Aviso de recebimento" id="sCdAvisoRecebimento" name="sCdAvisoRecebimento" type="text" class="validate">
            <label for="sCdAvisoRecebimento">Aviso de recebimento (S ou N)</label>
        </div>
    </div>
    <button class="btn waves-effect waves-light deep-orange lighten-1" type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
    </button>
    <button class="btn waves-effect waves-light grey lighten-1" type="reset" name="action">Limpar
    </button>
</form>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>