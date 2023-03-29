<?php

header('Content-Type: text/html; charset=utf-8');
session_start();
if (!empty($_POST)) {

	$servidor = "localhost";
	$utilizador = "root";
	$password = "root";
	$basedados = "php_com_pdo";

	$ligacao = new mysqli($servidor, $utilizador, $password, $basedados) or exit ('Erro de ligação à bd');
	mysqli_select_db($ligacao, $basedados);
	mysqli_set_charset($ligacao, "utf8");

    if (!$ligacao) {
        die('Problemas de Ligação: ' . $mysqli->erro );
    } else {
        $username = mysqli_real_escape_string($ligacao, $_POST['username']);
        $password = sha1($_POST['password']);
		$consulta = "SELECT userid, username FROM users WHERE username = '$username' AND password = '$password' ";
        $login = mysqli_query($ligacao, $consulta);
        if ($login && mysqli_num_rows($login) == 1) {
            
			$registo = mysqli_fetch_array($login, MYSQLI_ASSOC);
			
			$_SESSION['id'] = $registo['userid'];
			$_SESSION['username'] = $registo['username'];
		
			mysqli_free_result($login);
			mysqli_close($ligacao);
		
            echo "<p>Sessão iniciada com sucesso. {$_SESSION['username']}</p>";
            header('Location: /gerenciador_publico/adicionar_tarefas.php ');
        } else {
            
            echo "<p>Utilizador ou password inválidos. <a href=\"index.php\">Tente novamente</a></p>";
        }
    }
}