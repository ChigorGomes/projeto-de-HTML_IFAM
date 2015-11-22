

<?php
include("conexaoBd.php");
try{
	$nome= $_POST      ["txtnome"];
	$email= $_POST     ["txtemail"];
    $endereco= $_POST  ["txtendereco"];
	$telefone= $_POST  ["txttelefone"];
	$cpf= $_POST       ["txtcpf"];
	$cep= $_POST       ["txtcep"];
	
	$sql="INSERT INTO cliente VALUES(0,'$nome','$email','$endereco','$telefone','$cpf','$cep')"; 
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






