<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

$con = mysqli_connect('localhost','root','root','Pessoa');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$nome_usuario = $_POST['id'];

// sql to delete a record
$deletar = "DELETE FROM Pessoa WHERE Pessoaid='$nome_usuario'";

if ($con->query($deletar) === TRUE) {
    echo "Gravação deletada com sucesso";
} else {
    echo "Erro em deletar gravação " . $con->error;
}

mysqli_close($con);
?>
</body>
<form action="ajaxmysql.html">
    <input type="submit" value="Voltar">
</form>
</html>
