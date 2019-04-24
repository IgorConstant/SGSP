<?php
	include ("conexao.php");
	$pdo = conectar();
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$content = file_get_contents('php://input');
		$data = json_decode($content);
	}
	if(!empty($content) && $data){
		if(!empty($data)){
			$prontuario = $data->formulario[0]->prontuario;
			$motivo = $data->formulario[0]->motivo;
			$responsavel= $data->formulario[0]->responsavel;
			$area = $data->formulario[0]->area;
			$data = (array) $data;
			$inserir = "INSERT INTO RELATO (PRONTUARIO_ALUNO, PRONTUARIO_FUNCIONARIO, MENSAGEM, AREA) VALUES('".$prontuario."','".$responsavel."','".$motivo."','".$area."')";
			$pdo->exec($inserir);
			if(!$inserir){
				$response = "Erro ao Relatar";
			}else{
				$response = "Sucesso ao Relatar";
			}
		}else{
			$response = 'Dados vazios';
		}
	}else{
		$response = 'Json Inválido';
	}
  echo $response;
?>