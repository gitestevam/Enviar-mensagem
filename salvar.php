<?php
	include 'conexao.inc.php';
	
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$mensagem=$_POST['mensagem'];
	
	AbrirConexao();
	
	$query=" INSERT INTO tb_mensagem
					(nome, email, mensagem)
					VALUE
					('$nome ',' $email ',' $mensagem');";
	
	$result=mysql_query($query);
	
	FecharConexao();
	
	header('Location: mostramensagem.php');
	exit;
?>	