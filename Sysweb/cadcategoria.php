
<?php
include("conexaoBd.php");
try{
	$nomeCategoria= $_POST["txtnomeCategoria"];
	$descricao= $_POST["txtdescricao"];
	$figura= $_POST   ["txtfigura"];
	
    
	
	$sql="INSERT INTO categoria VALUES(0,'$nomeCategoria','$descricao','$figura')"; 
	$inseriu= $conn-> query($sql);
	
	if($inseriu){
		echo "<script>
		alert ('cadastro realizado com sucesso!!!);
		window.open('formCadusuario.php','_self);
		</script>";
		}
   }catch(Exception $e){
	echo "Erro:".$e->getMessage();
	exit;
}



?>






