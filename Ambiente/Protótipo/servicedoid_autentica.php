<?php
	include ("conexao.php");
	$pdo = conectar();
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$content = file_get_contents('php://input');
		$data = json_decode($content);
	}
	if(!empty($content) && $data){
		if(!empty($data)){
			$login = $data->formulario[0]->login;
			$senha = $data->formulario[0]->senha;
			$data = (array) $data;
			$sql = "SELECT PRONTUARIO, SENHA FROM LOGIN WHERE PRONTUARIO = '".$login."' AND SENHA = '".$senha."'";
			$res = $pdo->prepare($sql);
			$res->execute();
			$row = $res->fetchAll();
			if ($res->rowCount() > 0){
				$response="Ok";
			}
			else{
				$response="Usuario ou senha inexistente";
			}
		}else{
			$response = 'Dados vazios';
		}
	}else{
		$response = 'Json Inválido';
	}
  echo($response);  
	
	
?>
