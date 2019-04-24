<?php
function conectar(){
	try{
		$pdo = new PDO ("mysql:host=localhost;dbname=sgsp","root","") or die ("Erro na Conexão");
	
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	return $pdo;
}
	

?>