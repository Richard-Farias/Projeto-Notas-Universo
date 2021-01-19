<?php
	include('Desempenho_UniversoConexao.php' );

	
	$codDisciplina = $_POST["codDisciplina"];
	$nomeDisciplina = $_POST["nomeDisciplina"];
	$dataV1 = $_POST["dataV1"];
	$dataV2 = $_POST["dataV2"];
	$notaV1 = $_POST["notaV1"];
	$notaV2 = $_POST["notaV2"];
	$dataVT = $_POST["dataVT"];
	$notaVT = $_POST["notaVT"];
	
	$sql = "INSERT INTO tb_desempenho_universo VALUES ";
	$sql.= "('$codDisciplina','$nomeDisciplina','$dataV1','$notaV1','$dataV2','$notaV2','$dataVT','$notaVT')";
	
	 $result = mysqli_query($conecta,$sql);
	if($result){
		echo "Connected successfully";

	}else{
		echo "Error";
	}

	//$consultar = mysqli_query($conecta,"SELECT * FROM tb_desempenho_universo");

?>


 	
 
