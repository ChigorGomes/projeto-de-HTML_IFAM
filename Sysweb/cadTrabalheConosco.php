<?php
include('../Sysweb/conexaoBd.php');
 try{
	 $nome= $_POST['tx_nome'];
	 $email= $_POST['txtemail'];
	$telefone=$_POST['txttelefone'];
	$radio= $_POST['rdsexo'];
	$nascimento=$_POST['txtnascimento'];
	$escolaridade= $_POST['escolaridade'];
	$curriculo= $_FILES['file'];
	$empresa=$_POST['txtempresa'];
	$cargo= $_POST['txtcargo'];
	$atribuicoes=['txtcomentario'];
	$data_admissao=$_POST['txtdataadmissao'];
	$data_demissao= $_POST['txtdemissao'];
	$empresa_anterior= $_POST['txtpn_empresa'];
	$cargo_anterior= $_POST['txtpn_cargo'];
	$atribuicoes_anterior= $_POST['txtAtrib'];
	$data_admissao_anterior= $_POST['txtpn_admissao'];
	$data_demissao_anterior= $_POST['txtpn_demissao'];
	
	$nomeFinal = time().'.pdf';
	if(move_uploaded_file($curriculo['tmp_name'],$nomeFinal)){
		$tamanhoImg= filesize($nomeFinal);
		
		$mysqlImg= addslashes(fread(fopen($nomeFinal,"r"),$tamanhoImg));
		$sql = "INSERT INTO trabalhe(NOME,EMAIL,TELEFONE,SEXO,DATANASCIMENTO,FORMACAO,CURRICULO,EMPRESA,CARGO,ATRIBUICOES,DATAADMISSAO,DATADEMISSAO,PEN_EMPRESA,PEN_CARGO,PEN_ATRIBUICOES,PEN_DATAADMISSAO) 
		values('$nome','$email','$telefone','$radio','$nascimento','$escolaridade','$curriculo',
		'$empresa','$cargo','$atribuicoes','$data_admissao','$data_demissao','$empresa_anterior',
		'$cargo_anterior','$atribuicoes_anterior','$data_admissao_anterior','$data_demissao_anterior')"; 
		
	}
	
	$insere = $conn->query($sql);
	if($insere){
		echo "<script>alert('Dados inseridos com sucesso!')</script>";
	}
	 }catch(Exception $e){
	 echo "Erro". $e->getMessage();
 }	
?>