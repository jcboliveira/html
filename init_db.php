<?php
// cria o objeto, se o ficheiro não existir test.db, este é criado. Verificar as condições de permissões no readme
$db = new SQLite3('test.db');
// criação da tabela Viaturas: id: inteiro aut number, marca tipo string, preco tipo inteiro
$db->exec("CREATE TABLE Viaturas(id INTEGER PRIMARY KEY, marca TEXT, preco INT)");
// insere alguns valores na Bd
$db->exec("INSERT INTO Viaturas(marca, preco) VALUES('Fiat', 21644)");
$db->exec("INSERT INTO Viaturas(marca, preco) VALUES('Toyota', 35445)");
$db->exec("INSERT INTO Viaturas(marca, preco) VALUES('Cupra', 29090)");
// liberta o objecto
unset($db);
?>