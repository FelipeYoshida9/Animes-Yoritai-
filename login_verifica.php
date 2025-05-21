<?php

session_start();

include ("conecta.php");

$email=$_POST['email'];
$senha=$_POST['senha'];

$sql=mysqli_query("select * from cadastro where email = '$email' and senha = '$senha'");

$row=mysqli_num_rows($sql);

if ($row > 0)

{

    $_SESSION['cadastro'] = true;
	echo "<script>window.location.href='inicio.php';</script>";

}
else
{
    echo "<script>
	alert ('E-mail ou senha errados!');
	window.location.href='home.html';
	</script>";

}

?>