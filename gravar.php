<?php

$nome        = $_POST['nome'];
$email       = $_POST['email'];
$estadoCivil = $_POST['estadoCivil'];
$sexo        = $_POST['sexo'];

include_once 'conexao.php';

$sql = "INSERT INTO clientes VALUES(null, '$nome', '$email', '$estadoCivil', '$sexo')";

if(mysqli_query($con, $sql)){
    echo "Cliente gravado com sucesso!";
}else{
    echo "Erro ao gravar Cliente.";
    echo mysqli_error($con);
}

mysqli_close($con);

/* echo "<pre>";
echo print_r($_POST);
echo "</pre>"; */
?>

<br>
<a href="index.html"></a>