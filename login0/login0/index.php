<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" href="newcss/style.css"/>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <section id="content">
            <form method="post" action="liga.php">
                <h1>Login</h1>
                <div>
                    <input type="text" placeholder="Usuário" name="username" />
                </div>
                <div>
                    <input type="password" placeholder="Palavra passe" name="password" />
                </div>
                <div>
                    <input type="submit" value="Login" />
                    <a href= "cadastrar.php">Cadastrar Usuário</a>
                </div>
            </form>
        </section>
    </div>
</body>
</html>