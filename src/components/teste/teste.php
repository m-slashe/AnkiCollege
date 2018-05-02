<?php

	$conn = Conexao::getInstance();	//Pega instância da conexão existente

	$sql = "select :teste from dual";

	$stmt = $conn->prepare( $sql );

	$teste = 'teste';

	//Parametros para o bindParam
	//PDO::PARAM_BOOL
	//PDO::PARAM_NULL
	//PDO::PARAM_INT
	//PDO::PARAM_STR (default)
	//PDO::PARAM_LOB
	$stmt->bindParam( ':teste', $teste );			

	$result = $stmt->execute();

	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);	//FETCH_ASSOC retorna apenas o map (Key=>Value)
	 
	if ( ! $result )
	{
	    var_dump( $stmt->errorInfo() );
	    exit;
	}

	var_dump( $row );



	