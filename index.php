<!DOCTYPE html>
<html>

<head>
    <!-- carregar o CSS -->
    <link type="text/css" rel="stylesheet" href="./CSS/sample.css" />
    <!-- carregar o javascript -->
    <script type="text/javascript" src="./scripts/sample.js"></script>
</head>

<body>
    <!-- form que chama a função testform em javascript. Se o return for false não realiza o submit
     se o return for true realiza o submit
     O submit chama a mesma página com get. Ou seja o URL passa a ser http://localhost?marca=xxx&preco=yyy -->
    <form onsubmit="return testForm ()">
        <span class="texto">Marca:</span>: <input id="marca" type="text" name="marca" />
        <span class="texto">Preço:</span>: <input id="preco" type="number" name="preco" />
        <input type="submit" />
    </form>


    <?php
    // O PHP corre sempre que a página é chamada
    // cirar o objeto SQlite3 
    $db = new SQLite3('test.db');

    // verificar o valor de marca e preco enviados por GET
    $marca = $_GET["marca"];
    $preco = (int) $_GET["preco"];

    // como a página pode ser chamada sem ser por get vindo do form, verifica esse facto
    if ($marca != null) {
        // coloca os valores na Bd
        $sql = "INSERT INTO Viaturas(marca, preco) VALUES('$marca', '$preco')";
        $db->exec($sql);
    }
    
    //liberta o objecto
    unset($db);
    ?>
</body>

</html>