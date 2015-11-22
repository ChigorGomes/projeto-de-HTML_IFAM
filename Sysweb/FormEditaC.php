<?php
include("conexaoBD.php");
try{
	$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	
	$idcategoria = $_POST["txtidcategoria"];
	$nomeCategoria=$_POST["txtnomeCategoria"]
	$descricao =$_POST["txtdescricao"];
	$figura =$_POST["txtfigura"];
	
	

	$sql= "UPDATE categoria SET nomeCategoria = '$nomeCategoria',descricao='$descricao',figura='$figura' 
	WHERE id_categoria = $idcategoria";
	
	// executando sql
	$insere= $conn-> query($sql);
	
	// tratando msg
	
	if($insere){
		echo"<script>alert('alteração efetuada com sucesso!');
		window.open('FormConsultaCategoria.php','_self')</script>";
		}
} catch(Exception $e){
	echo "Erro". $e->getMessage();
}

?>