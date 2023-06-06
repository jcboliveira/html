<?php
$db = new SQLite3('test.db');
echo "<h3>Tabela de Viaturas </h3>";
$sql = "select * from  Viaturas;\n";
$result = $db->query($sql);
echo "<table>\n<th> Id </th><th> Marca </th><th> Preço </th>\n";
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "<tr><td>" . $row['id'] . '</td><td>' . $row['marca'] . '</td><td>' . $row['preco'] . "</td></tr>\n";
}
echo "</table>";
unset($db);
?>