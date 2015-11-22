

<?php
include("conexaoBd.php");
try{
	$nome= $_POST   ["txtnome"];
	$login= $_POST  ["txtlogin"];
    $senha= $_POST  ["txtsenha"];
	
	$sql="INSERT INTO administrador VALUES(0,'$nome','$login','$senha')"; 
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






