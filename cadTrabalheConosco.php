<?php
include('Sysweb/conexaoBd.php');
 try{
	 $nome= $_POST['tx_nome'];
	 $email= $_POST['txtemail'];
	 $telefone= $_POST['txttelefone'];
	 $radio=$_POST['rdsexo'];
	 $nascimento=$_POST['txtnascimento'];
	 $escolaridade= $_POST['escolaridade'];
	 $curriculo= $_POST['file'];
	 $empresa=$_POST['txtempresa'];
	 $cargo= $_POST['txtcargo'];
	 $comentario=$_POST['txtcomentario'];
	 $dataAdmissao= $_POST['txtdataadmissao'];
	 $dataDemissao= $_POST['txtdemissao'];	
	$nomeFinal = time().'.pdf';
	if(move_uploaded_file($curriculo['tmp_name'],$nomeFinal)){
		$tamanhoImg= filesize($nomeFinal);
		
		$mysqlImg= addslashes(fread(fopen($nomeFinal,"r"),$tamanhoImg));
		$sql = "INSERT INTO curriculo(NOME,DATANASCIMENTO,ESTADOCIVIL,SEXO,RUA,NUMERO,BAIRRO,CIDADE,CEP,TELEFONE,EMAIL,DESCRICAO,IMAGEM) values('$nome','$data','$estado_civil','$radio','$endereco','$numero','$bairro','$estado','$cep','$telefone','$email','$comentario','$curriculo')"; 
		
	}
	
	$insere = $conn->query($sql);
	if($insere){
		echo "<script>alert('Dados inseridos com sucesso!')</script>";
	}
	 }catch(Exception $e){
	 echo "Erro". $e->getMessage();
 }	
?>