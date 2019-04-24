<?php

	//Classe de conexão com o banco
	include ("conexao.php");

	//Objeto de conexão com o banco
	$pdo = conectar();

	//Receber dados do JSON via POST
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$content = file_get_contents('php://input');
		$data = json_decode($content);
	}
	
	//Receber dados do JSON via POST
	if(!empty($content) && $data){
		if(!empty($data)){
			$login = $data->formulario[0]->login;
			$senha = $data->formulario[0]->senha;
			$data = (array) $data;
			$sql = "SELECT PRONTUARIO, SENHA, PERFIL FROM LOGIN WHERE PRONTUARIO = '".$login."' AND SENHA = '".$senha."' AND PERFIL = 'professor'";
			$res = $pdo->prepare($sql);
			$res->execute();
			$row = $res->fetchAll();
			if ($res->rowCount() > 0){
				$response="Ok";
			}
			else{
				$response="Usuario não cadastrado ou senha incorreta";
			}
		}else{
			$response = 'Dados vazios';
		}
	}else{
		$response = 'Json Inválido';
	}
  echo($response);  
	
	
?>