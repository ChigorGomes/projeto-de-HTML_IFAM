<?php
include("conexaoBD.php");
try{
	$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	$idproduto = $_POST["txtidproduto"];
	$NomeProduto=$_POST["txtNomeProduto"];
    $fornecedor=$_POST["txtfornecedor"];
    $preco=$_POST["txtpreco"];
   

	$sql= "UPDATE produto SET NomeProduto = '$NomeProduto',fornecedor='$fornecedor',preco='$preco'
	WHERE idproduto = $idproduto";
	
	// executando sql
	$insere= $conn-> query($sql);
	
	// tratando msg
	
	if($insere){
		echo"<script>alert('alteração efetuada com sucesso!');
		window.open('FormConsultaProduto.php','_self')</script>";
		}
} catch(Exception $e){
	echo "Erro". $e->getMessage();
}

?>