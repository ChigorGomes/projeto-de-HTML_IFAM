
<?php
include("conexaoBd.php");
try{
	$tipo= $_POST   ["txttipo"];
	$mensagem= $_POST  ["txtmensagem"];
    
	
	$sql="INSERT INTO MENSAGEM VALUES(0,'$tipo','$mensagem')"; 
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






