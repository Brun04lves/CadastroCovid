<?php 

include ("conexao.php");

function save($data){

	global $connect;

	$nome = $data['nome'];
	$endereco = $data['endereco'];
	$cpf = $data ['cpf'];
	$profissao = $data ['profissao'];
	$num_registro = $data ['num_registro'];
	$nome_mae = $data ['nome_mae'];
	$data_nasc = $data ['data_nasc'];
	$num_cns = $data ['num_cns'];
	$num_prontuario = $data ['num_prontuario'];
	$tel1 = $data ['tel1'];
	$tel2 = $data ['tel2'];
	$local_trabalho = $data ['local_trabalho'];
	$cnes = $data ['cnes'];
	$cnpj = $data ['cnpj'];
	$end_estabelecimento = $data ['end_estabelecimento'];


	$query = "INSERT INTO tb_profissionais (nome,endereco,cpf,profissao,num_registro,nome_mae,data_nasc,num_cns,num_prontuario,tel1,tel2,local_trabalho,cnes,cnpj,end_estabelecimento) VALUES ('$nome','$endereco',".$cpf.",'$profissao',".$num_registro.",'$nome_mae',".$data_nasc.",".$num_cns.",".$num_prontuario.",".$tel1.",".$tel2.",'$local_trabalho',".$cnes.",".$cnpj.",'$end_estabelecimento')";



	return mysqli_query($connect,$query);
}



?>