<?php

include ('conecta.php');

$id=0;
$nome=$_POST['nome'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];

$sql=$mysqli->prepare("insert into cadastro values (?,?,?,?,?)");

$sql->bind_param("issss",$id,$nome,$email,$password,$password2);
$sql->execute();
$sql->store_result();
$result=$sql->affected_rows;

if ($result > 0)
{
	echo "<script>
	    alert('Dados cadastrados com sucesso!');
	    window.location.href='inicio.php';
	</script>
	";
	
}

else
	

{
	echo "<script>
	    alert('Erro!');
	    window.location.href='index2.php';
	</script>
	";
	
}

?>