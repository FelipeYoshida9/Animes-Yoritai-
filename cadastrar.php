<?php
session_start();
include("conexao.php");
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);
$password2 = mysqli_real_escape_string($conexao, $_POST['password2']);



?>