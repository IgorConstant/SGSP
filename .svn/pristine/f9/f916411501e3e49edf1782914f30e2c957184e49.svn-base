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
	
	//Validando Json
	if(!empty($content) && $data){
		if(!empty($data)){
			$data = (array) $data;
			//prontuario do aluno
			$prontuario_aluno = $data[0];
			//Buscando informaçoes do aluno requerido
			$sql = "SELECT N_A, N_C, date_format(DATA_CADASTRO,'%d/%m/%y') as DATA_CADASTRO, NIVEL FROM v_busca_mobile WHERE PRONTUARIO =".$prontuario_aluno;
			$res = $pdo->prepare($sql);
			$res->execute();
			$row = $res->fetchAll();
			if ($res->rowCount() > 0){
				$nome_aluno = $row[0]['N_A'];
				$nome_curso = $row[0]['N_C'];
				$semestre = $row[0]['DATA_CADASTRO'];
				$nivel = $row[0]['NIVEL'];
				//Array de informaçoes para montar o json
				$arr = array('N_A' =>$nome_aluno,'N_C'=>$nome_curso,'DATA_CADASTRO'=>$semestre, 'NIVEL'=>$nivel);
				//Montando Json retorno
				$response = json_encode($arr);
				echo $response;
				
			}else{
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