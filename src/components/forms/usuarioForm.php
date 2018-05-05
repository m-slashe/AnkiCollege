<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$conn = Conexao::getInstance();
	$sql = "insert into usuario(nome, sobrenome, email, username, password) values(:nome, :sobrenome, :email, :username, :password)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam(':nome', $_POST["Nome"]);
	$stmt->bindParam(':sobrenome', $_POST["Sobrenome"]);
	$stmt->bindParam(':email', $_POST["eMail"]);
	$stmt->bindParam(':username', $_POST["Username"]);
	$stmt->bindParam(':password', $_POST["Password"]);
	$result = $stmt->execute();
	//echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<form method="post" action="formUser">
	<div>
	<label for="Nome">Nome</label>
	<input type="text" id="Nome" name="Nome" required>
	</div>
	<div>
	<label for="Sobrenome">Sobrenome</label>
	<input type="text" id="Sobrenome" name="Sobrenome" required>
	</div>
	<div>
	<label for="eMail">E-Mail</label>
	<input type="email" id="eMail" name="eMail" required>
	</div>
	<div>
	<label for="Username">Username</label>
	<input type="text" id="Username" name="Username" required>
	</div>
	<div>
	<label for="Password">Password</label>
	<input type="password" id="Password" name="Password" required>
	</div>
	<div>
	<input type="submit" name="ok">
	</div>
</form>


