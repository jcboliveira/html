<?php
// cria o objecto
$db = new SQLite3('test.db');

// o echo pertime criar html directamente do PHP
echo "<h3>Tabela de Viaturas </h3>";
// query de select a ser aplicada na Bd

$sql = "select * from  Viaturas;\n";
// aplica a query e guarda os resultados em $result
$result = $db->query($sql);

echo "<table>\n<th> Id </th><th> Marca </th><th> Preço </th>\n";
// percorre toda a tabela resultante da query
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    // cria a linha da tabela. Notar a criação da string em HTML
    echo "<tr><td>" . $row['id'] . '</td><td>' . $row['marca'] . '</td><td>' . $row['preco'] . "</td></tr>\n";
}

echo "</table>";
// fecha o objecto
unset($db);
?>