<?php
include("conexaoBD.php");
try{
	$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	$idcliente = $_POST["txtidcliente"];
	$nome=$_POST["txtnome"];
    $email=$_POST["txtemail"];
    $endereco=$_POST["txtendereco"];
    $telefone=$_POST["txttelefone"];
    $cpf=$_POST["txtcpf"];
    $cep=$_POST["txtcep"];

	$sql= "UPDATE cliente SET nome = '$nome',email='$email',endereco='$endereco',
	telefone='$telefone',cpf='$cpf',cep='$cep'
	WHERE id_cliente = $idcliente";
	
	// executando sql
	$insere= $conn-> query($sql);
	
	// tratando msg
	
	if($insere){
		echo"<script>alert('alteração efetuada com sucesso!');
		window.open('ForConsultaCliente.php','_self')</script>";
		}
} catch(Exception $e){
	echo "Erro". $e->getMessage();
}

?>