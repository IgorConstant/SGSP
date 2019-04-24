<?php
include ("conexao.php");
	$pdo = conectar();
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$content = file_get_contents('php://input');
		$data = json_decode($content);
	}
	if(!empty($content) && $data){
		if(!empty($data)){
			$data = (array) $data;
			$prontuario_aluno = $data[0];//prontuario do aluno
			$sql = "SELECT N_A, N_C, DATA_CADASTRO, NIVEL FROM v_busca_mobile WHERE PRONTUARIO =".$prontuario_aluno;
			$res = $pdo->prepare($sql);
			$res->execute();
			$row = $res->fetchAll();
			if ($res->rowCount() > 0){
				$nome_aluno = $row[0]['N_A'];
				$nome_curso = $row[0]['N_C'];
				$semestre = $row[0]['DATA_CADASTRO'];
				$nivel = $row[0]['NIVEL'];
				$arr = array('N_A' =>$nome_aluno,'N_C'=>$nome_curso,'DATA_CADASTRO'=>$semestre, 'NIVEL'=>$nivel);
				$response = json_encode($arr);
				/*$response =<<[{"N_A":$nome_aluno,"N_C":$nome_curso,"DATA_CADASTRO":$semestre,"NIVEL":$nivel}]";
				*/
				echo $response;
				
			}
			else{
				$response = "Não foi encontrado";
			}
			
			echo $response;
		}else{
			$response = 'Dados vazios';
		}
	}else{
		$response = 'Json Inválido';
	}
?>