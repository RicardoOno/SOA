<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="container">
    <h1>Aula de SOAP - 01</h1>
    <h4 class="right-align">Data: 18/11/2017</h4>
    <form method="POST" action="expressao.php" class="col s12 formCep z-depth-2">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Numero 1" name="num1" id="num1" type="text" class="validate">
                <label for="num1">Numero 1</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Numero 2" name="num2" id="num2" type="text" class="validate">
                <label for="num2">Numero 2</label>
            </div>
            <select name="expre">
                <option value="%2B">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </div>

        <button class="btn waves-effect waves-light deep-orange lighten-1" type="submit">Enviar
            <i class="material-icons right">send</i>
        </button>
        <button class="btn waves-effect waves-light grey lighten-1" type="reset" >Limpar
        </button>
    </form>



    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>