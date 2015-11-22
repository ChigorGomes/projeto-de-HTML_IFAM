<?php
include('../Sysweb/conexaoBd.php');
	try{
		$nome= $_POST['tx_nome'];
		$email= $_POST['tx_email'];
		$comentario= $_POST['tx_mensagem'];
		
		
		$sql = "INSERT INTO Contato(nome,email,mensagem) values('$nome','$email','$comentario')"; 
	$insere = $conn->query($sql);
	
	if($insere){
		echo "<script>alert('Dados inseridos com sucesso!')</script>";
	}
	}catch(Exception $e){
		 echo "Erro". $e->getMessage();
	}
	

?>