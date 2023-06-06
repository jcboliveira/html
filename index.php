<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="./CSS/sample.css" />
    <script type="text/javascript" src="./scripts/sample.js"></script>
</head>

<body>
    <form onsubmit="return testForm ()">
        <span class="texto">Marca:</span>: <input id="marca" type="text" name="marca" />
        <span class="texto">Preço:</span>: <input id="preco" type="number" name="preco" />
        <input type="submit" />
    </form>

    
    <?php
    // 
    $db = new SQLite3('test.db');
     
    $marca = $_GET["marca"];
    $preco = $_GET["preco"];
    if ($marca != null) {
        $db->exec("INSERT INTO Viaturas(marca, preco) VALUES($marca, $preco)");
    }
    unset($db);
    ?>
</body>

</html>