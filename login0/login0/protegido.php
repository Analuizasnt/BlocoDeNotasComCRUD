<?php
header('Content-Type: text/html; charset=utf-8');
require 'verifica_login.php';
?>
 
<h1>Página protegida!</h1>
<p>Olá; <u><?php echo $_SESSION['username']; ?></u>, esta página está protegida</p>
<p><a href="logout.php">Terminar sessão</a></p>