<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['username'];
        $senha = $_POST['senha'];

        //$conn = Conexao::getInstance();
        $conn = new PDO('mysql:host=localhost;dbname=Anki2', 'root', '');

        $sql = "select CASE
           WHEN count(*) = 0 THEN 0
           ELSE 1
       END as result 
       from anki2.usuario u 
       where u.username=:username 
       and u.password=md5(concat(:password,:username))";
        $stmt = $conn->prepare( $sql );
        $stmt->bindParam( ':username', $login);
        $stmt->bindParam( ':password', $senha);
        $result = $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($rows[0]['result'] == 1 )
        {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            unset ($_SESSION['error']);
        }
        else{
            unset ($_SESSION['login']);
            unset ($_SESSION['senha']);
            $_SESSION['error'] += 1;
        }
        header('location:index.php');
     }else{
        echo '<form method="POST" action="login" id="formlogin" name="formlogin">
                    <legend>Sign In</legend>
                    <br />
                    <label for="username">Usuario: </label>
                    <input type="text" name="username" id="username"/><br />
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha"><br />
                    <input type="submit" value="Sign In"/>
        </form>';
        if(array_key_exists('error', $_SESSION)){
            echo $_SESSION['error'];
        };
    }
?>

