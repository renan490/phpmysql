<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$con = mysqli_connect('localhost','root','root','Pessoa');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM Pessoa";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Nome</th>
<th>Sobrenome</th>
<th>Idade</th>
<th>Cidade</th>
<th>Trabalho</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Pessoaid'] . "</td>";
    echo "<td>" . $row['Nome'] . "</td>";
    echo "<td>" . $row['Sobrenome'] . "</td>";
    echo "<td>" . $row['Idade'] . "</td>";
    echo "<td>" . $row['Cidade'] . "</td>";
    echo "<td>" . $row['Trabalho'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
<form action="ajaxmysql.html">
    <input type="submit" value="Voltar">
</form>
</html>
