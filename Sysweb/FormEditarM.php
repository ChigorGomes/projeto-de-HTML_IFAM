<?php
include("conexaoBD.php");
try{
	$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	$idmensagem = $_POST["txtidmensagem"];
	$tipo = $_POST["txttipo"];
	$mensagem =$_POST["txtmensagem"];
	
	

	$sql= "UPDATE mensagem SET tipo = '$tipo',mensagem='$mensagem'
	WHERE id_mensagem = $idmensagem";
	
	// executando sql
	$insere= $conn-> query($sql);
	
	// tratando msg
	
	if($insere){
		echo"<script>alert('alteração efetuada com sucesso!');
		window.open('formConsultaMensagem.php','_self')</script>";
		}
} catch(Exception $e){
	echo "Erro". $e->getMessage();
}

?>