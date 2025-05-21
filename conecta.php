<?php

$servidor='localhost';
$usuario='root';
$senha='';
$bancodedados='db_mysqli';

$mysqli= new mysqli($servidor,$usuario,$senha,$bancodedados);

if (mysqli_connect_errno())
{
	die ('Houve o seguinte erro:'.mysqli_connect_errno());
	exit();

}


?>