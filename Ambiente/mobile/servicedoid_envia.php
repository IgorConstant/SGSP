<?php
	//Classe de conexão com o banco
	include ("conexao.php");
	
	//biblioteca de email
	require 'PHPMailer/phpMailerAutoload.php';
	
	//Objeto de email
	$mailer = new PHPMailer();
	//Objeto de conexao com o banco
	$pdo = conectar();
	
	//receber os dados do json via POST
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$content = file_get_contents('php://input');
		$data = json_decode($content);
	}
	//Validar JSON
	if(!empty($content) && $data){
		if(!empty($data)){
			//prontuario do aluno
			$prontuario = $data->formulario[0]->prontuario;
			//Demanda
			$motivo = $data->formulario[0]->motivo;
			//prontuario do professor
			$responsavel= $data->formulario[0]->responsavel;
			//Area destino
			$area = $data->formulario[0]->area;
			$data = (array) $data;
			$inserir = "INSERT INTO RELATO (PRONTUARIO_ALUNO, PRONTUARIO_FUNCIONARIO, MENSAGEM, AREA) VALUES('".$prontuario."','".$responsavel."','".$motivo."','".$area."')";
			$pdo->exec($inserir);
			
			//define que será usado SMTP
			$mailer->IsSMTP();
			
			//enviar email em html
			$mailer->IsHTML(true);
			
			//Aceitar caracteres especiais
			$mailer->Charset = 'UTF-8';
			
			//Configurações
			$mailer->SMTPAuth = true;
			$mailer->SMTPSecure = 'ssl';
			
			//nome do servidor  imap.gmail.com  smtp.gmail.com
			$mailer->'smtp.gmail.com';
			
			//porta de saida
			$mailer->Port=993;
			
			//Dados do e-mail de saida
			$mailer->Username = 'sgspmobile@gmail.com';
			$mailer->Password = 'mobile123456';
			
			//E-mail remetente
			$mailer->From = 'sgspmobile@gmail.com';
			
			//Nome do remetente
			$mailer->FromName = 'Igor';
			
			//assunto da mensagem
			$mailer->Subject ='Titulo - Envio confirmado';
			
			//Corpo da mensagem
			$mailer->Body = 'Conteudo do Email';
			
			//Corpo da mensagem em texto
			$mailer->AltBody = ' '.$motivo;
			
			//Destinatario
			$mailer->AddAddress('sgspmobile@gmail.com');
			
			
			if($inserir)&&($mailer->Send()){
				$response = "Sucesso ao Relatar";
			}else{
				$response = "Erro ao Relatar".$mailer->ErrorInfo;
			}
		}else{
			$response = 'Dados vazios';
		}
	}else{
		$response = 'Json Inválido';
	}
  echo $response;
?>