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

$nome_usuario = $_POST['nome'];
$sobrenome_usuario = $_POST['sobrenome'];
$idade_usuario = $_POST['idade'];
$cidade_usuario = $_POST['cidade'];
$trabalho_usuario = $_POST['trabalho'];


$inserir = "INSERT INTO Pessoa (Nome, Sobrenome, Idade, Cidade, Trabalho)
VALUES ('$nome_usuario', '$sobrenome_usuario', '$idade_usuario', '$cidade_usuario', '$trabalho_usuario')";

if (mysqli_query($con, $inserir)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $inserir . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
</body>
<form action="ajaxmysql.html">
    <input type="submit" value="Voltar">
</form>

</html>
