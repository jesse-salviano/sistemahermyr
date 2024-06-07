<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/loginpage.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        $auth = false;
        include '../components/header.php';
    ?>

    <main class="principal">
        <div>
            <h1 class="bold" id="destaque">Minha Conta</h1>


            <div id="text">
                <p>Utilize seu usuário e senha</p>
            </div>

            <div class="mb-3" id="inputUser">
                <label id="labelInputUser" for="inputUser" class="form-label">Usuário ou E-mail</label>
                <input type="text" class="form-control" id="inputUser">
            </div>
            <div class="mb-3">
                <label id="labelInputPassword" for="inputPassword" class="form-label">Senha</label>
                <input type="password" class="form-control" id="inputPassword">
            </div>
            <div id="extras">
                <p id="forgetPassword">Esqueceu sua senha?</p>
                <a href="http://localhost/hermyr/pages/registerPage.php">
                    <p id="dontHaveAccont">Não possui uma conta? Faça agora mesmo!</p>
                </a>
            </div>
           <a href="start.php"> <button class="Button-RegisterPage btn btn-primary">Entrar</button></a>
        </div>


        </div>
    </main>

    <?php include '../components/footer.php' ?>
</body>

</html>