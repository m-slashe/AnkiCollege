<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$conn = Conexao::getInstance();
	$sql = "insert into usuario_grupo(usuarioId, grupoId, permissaoId) values(:usuario, :grupo, :permissao)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam(':usuario', $_POST["Usuario"]);
	$stmt->bindParam(':grupo', $_POST["Grupo"]);
	$stmt->bindParam(':permissao', $_POST["Permissao"]);
	$result = $stmt->execute();
	//echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn = Conexao::getInstance();
$users = $conn->query('select * from usuario');
$grupos = $conn->query('select * from grupo');
$permissoes = $conn->query('select * from permissao');
?>

<form method="post" action="formUserGroup">
	<div>
		<label for="Usuario">Usuario</label>
		<select id="Usuario" name="Usuario">
			<?php 	
				foreach ($users as $user) {
					var_dump($user);
					echo "<option value = '".$user['usuarioId']."'>".$user['username']."</option>";
				}
			?>
		</select>
	</div>
	<div>
		<label for="Grupo">Grupo</label>
		<select id="Grupo" name="Grupo">
			<?php 	
				foreach ($grupos as $grupo) {
					echo "<option value = '".$grupo['grupoId']."'>".$grupo['nome']."</option>";
				}
			?>
		</select>
	</div>
	<div>
		<label for="Permissao">Permissao</label>
		<select id="Permissao" name="Permissao">
			<?php 	
				foreach ($permissoes as $permissao) {
					echo "<option value = '".$permissao['permissaoId']."'>".$permissao['descricao']."</option>";
				}
			?>
		</select>
	</div>
	<div>
		<input type="submit" name="ok">
	</div>
</form>


