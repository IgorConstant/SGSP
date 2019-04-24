<?php function conectar(){ try{ 
//$pdo = new PDO ("localhost;dbname=id1556425_sgsp","id1556425_root","ruan1937") or die //("Erro na conexao com o banco");

$pdo = new PDO ("mysql:host=localhost;dbname=SGSP_MOBILE;charset=utf8","mobile","mobile") or die ("Erro na conexao com o banco");
$pdo -> exec("SET CHARACTER SET utf8");

}catch(PDOException $e){
	echo $e->getMessage();
	}
	return $pdo;
}
?>
