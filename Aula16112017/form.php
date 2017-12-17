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
    <form method="post" action="consulta.php" class="col s12 formCep z-depth-2">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Digite o CEP de origem" name="cepOrigem" id="cepOrigem" type="text" class="validate">
                <label for="cepOrigem">CEP de Origem</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Digite o CEP de origem" name="cepDestino" id="cepOrigem" type="text" class="validate">
                <label for="cepDestino">CEP de Destino</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Digite o CEP de origem" name="codServico" id="cepOrigem" type="text" class="validate">
                <label for="codServico">Codigo</label>
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