<?php
	include 'conexao.inc.php';
	
	function MostraMensagem(){
				
		$query='SELECT * FROM tb_mensagem
				order by id desc limit 1';
		AbrirConexao();
		
			$result=mysql_query($query);
		
		FecharConexao();
				
		$registro=mysql_fetch_array($result);
		
		$nome=$registro['nome'];
		$email=$registro['email'];
		$mensagem=$registro['mensagem'];
		
		$retorno=(' O nome do cliente eh ' .$nome. ', o email: ' .$email. ' e o a mensagem: ' .$mensagem.'');
		return $retorno;
	}
?>	

<html>
	<body>
		<form action="volta.php" method="post">
		<h1>A mensagem do ultimo cliente</h1>
		<tr>
			<?php echo Mostramensagem(); ?>
		</tr>
	</body>
</html>	