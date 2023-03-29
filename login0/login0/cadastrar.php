<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
    <div class="container">
        <section id="content">
            <form method="post" action="novo_registro.php">
                <h1>Cadastrar</h1>
                <div>
                    <input type="text" placeholder="Nome de usuário" name="username" 
                    pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </div>
                <div>
                    <input type="password" placeholder="Palavra passe" name="password" 
                    pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" 
                    required="required" />
                </div>
                <div>
                    <input type="submit" value="Cadastrar" />
                </div>
            </form>

        </section>
    </div>
</body>

</html>