<?php
include('Sysweb/conexaoBd.php');
try{
	$nome= $_POST["txtNome"];
	$email= $_POST["txtEmail"];
	$senha= $_POST['txtSenha'];
	$sql= "INSERT into usuario(NOME,SENHA,EMAIL) values('$nome','$senha','$email')";

	$insere = $conn-> query($sql);

	if($insere){
		echo "<script> alert('Dados inseridos com sucesso!');
		window.open('home.php','_self')</script>";
	}
}catch(Exception $e){
	echo 'Erro'. $e;
}
?>