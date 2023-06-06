<?php
$db = new SQLite3('test.db');
// criação da tabela Viaturas
$db->exec("CREATE TABLE Viaturas(id INTEGER PRIMARY KEY, marca TEXT, preco INT)");
$db->exec("INSERT INTO Viaturas(marca, preco) VALUES('Fiat', 21644)");
$db->exec("INSERT INTO Viaturas(marca, preco) VALUES('Toyota', 35445)");
$db->exec("INSERT INTO Viaturas(marca, preco) VALUES('Cupra', 29090)");
unset($db);
?>