

<?php
include("conexaoBd.php");
try{
	$NomeProduto= $_POST ["txtNomeProduto"];
	$fornecedor= $_POST  ["txtfornecedor"];
    $preco= $_POST       ["txtpreco"];
	
	
	$sql="INSERT INTO produto VALUES(0,'$NomeProduto','$fornecedor','$preco')"; 
	$inseriu= $conn-> query($sql);
	
	if($inseriu){
		echo "<script>
		alert ('cadastro realizado com sucesso!!!);
		window.open('ForConsultaCliente.php','_self);
		</script>";
		
		}
   }catch(Exception $e){
	echo "Erro:".$e->getMessage();
	exit;
}



?>






