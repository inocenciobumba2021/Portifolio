<?php

try {
	$pdo = new PDO("mysql:dbname=portifolio; host=localhost", "root", "");
//	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);//faz com que os dados sejam retornados em objetos
} catch (PDOException $e) {
	echo "Erro ao se conectar com a base de dados".$e->getMessage();
}
catch (Exception $e) {
	echo " Erro generico ".$e->getMessage();
}
?>