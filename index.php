<?php


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .card-login {
            padding: 30px 0 0 0;
            width: 350px;
            margin: 0 auto;

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="#" class="navbar-brand">
            <img src="logo.png" alt="" width="30px" height="30px" class="d-inline-block align-top">
            Chamado Real
        </a>
    </nav>
    <div class=container>
        <div class="row">
            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <form action="valida_login.php" method="post">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Senha">
                            </div>
                            <?php if (isset($_GET["login"]) && $_GET["login"] == "erro") { ?>
                                <div class="text-danger">
                                    Usuário ou senha inválido
                                </div>
                            <?php } ?>
                            <button class="btn btn-lg btn-info btn-block" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>