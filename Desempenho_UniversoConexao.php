<?php
//variáveis de conexão
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$banco = 'db_desempenho_universo';


	$conecta = mysqli_connect($host,$user,$pass,$banco);

	$dados = mysqli_select_db($conecta,'db_desempenho_universo');

	// teste de conexão
	if(mysqli_errno($conecta))
		{echo"Erro conexão";
		}else
		 {
			echo " ";
		}

		/*$codDisciplina = $_POST["codDisciplina"];
		$nomeDisciplina = $_POST["nomeDisciplina"];
		$dataV1 = $_POST["dataV1"];
		$dataV2 = $_POST["dataV2"];
		$notaV1 = $_POST["notaV1"];
		$notaV2 = $_POST["notaV2"];
		$dataVT = $_POST["dataVT"];
		$notaVT = $_POST["notaVT"];
		
		$sql = "INSERT INTO tb_desempenho_universo VALUES ";
		$sql.= "('$codDisciplina','$nomeDisciplina','$dataV1','$notaV1','$dataV2','$notaV2','$dataVT','$notaVT')";
		//$result = mysql_query($sql);
	
		//$input = "INSERT INTO  tb_desempenho_universo(cod_disciplina,nome_disciplina,data_v1,nota_v1
		//data_v2,nota_v2,data_vt,nota_vt )VALUES ('$codDisciplina','$nomeDisciplina','$dataV1,'$notaV1','$dataV2','$notaV2','$dataVT','$notaVT')";
	
		$result = mysqli_query($conecta,$sql);
		if($result){
			echo "Connected successfully";
	
		}else{
			echo "Error";
		}/*
	 
?>	