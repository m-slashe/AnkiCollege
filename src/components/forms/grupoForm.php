<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$conn = Conexao::getInstance();
	$sql = "insert into grupo(nome, criacao, descricao) values(:nome, current_timestamp(), :descricao)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam(':nome', $_POST["Nome"]);
	$stmt->bindParam(':descricao', $_POST["Descricao"]);
	$result = $stmt->execute();
	//echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<form method="post" action="formGroup">
	<div>
	<label for="Nome">Nome</label>
	<input type="text" id="Nome" name="Nome" required>
	</div>
	<div>
	<label for="Descricao">Descrição</label>
	<textarea id="Descricao" name="Descricao"></textarea>
	</div>
	<div>
	<input type="submit" name="ok">
	</div>
</form>


