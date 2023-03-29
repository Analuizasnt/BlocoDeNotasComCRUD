<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Cadastro de Usuário</title>
<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

</head>
<body>
<?php
	$servidor = "localhost";
	$utilizador = "root";
	$password = "root";
	$basedados = "php_com_pdo";
     
	$ligacao = mysqli_connect($servidor, $utilizador, $password, $basedados) or exit ('Erro de ligação à bd');
	mysqli_select_db($ligacao, $basedados);
	mysqli_set_charset($ligacao, "utf8");
     
     $username = mysqli_real_escape_string($ligacao, $_POST['username']);
     $password = mysqli_real_escape_string($ligacao, $_POST['password']);
     $password = SHA1($password);
  
     $query    = "INSERT INTO users (username, password) 
             VALUES('$username', '$password')";
     
     $resultado = mysqli_query($ligacao, $query);

	   if($linhas){
       $mysqli_result->num_rows($resultado);
    } 
     if(($linhas) !=0) {
       die('Erro na inserção: ' . $mysqli->erro );
       exit();
      }
      else {
              mysqli_close($ligacao);
              
      ?>
                <script type="text/javascript">
                   $(function() 
                      {
                     $( "#dialog" ).dialog();
                     var delay = 1000;  
                     setTimeout(function() {window.location = "index.php"}, delay);
                   });
                 </script>
                 <div id="dialog" title="Registro de login">
                     <p>Cadastro adicionado com sucesso</p>
                     <hr>
                     <p>Redirecionado para login</p>
                 </div>
                 
     <?php 
	 };  
?>            
</body>
</html>