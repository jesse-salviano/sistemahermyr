<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/registerpage.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    $auth = false;
    include '../components/header.php';
    ?>

    <main class="principal">
        <h1 class="bold" id="destaques">Comece o seu teste Grátis</h1>

        <div class="row">
            <div class="col-md-6" id="text">
                <p>Faça do Hermyr o maior aliado do seu negócio</p>
            </div>
            <div class="col-md-6">
                <div class="grid-inputs">
                    <div class="mb-3">
                        <label id="labelInputUser" for="inputUser" class="form-label">Usuário (sem caracteres especiais)</label>
                        <input type="text" class="form-control" id="inputUser">
                    </div>
                    <div class="mb-3">
                        <label id="labelInputEmail" for="inputEmail" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="inputEmail">
                    </div>
                    <div class="mb-3">
                        <label id="labelInputPassword" for="inputPassword" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="terms">
                        <label class="form-check-label" for="terms">Declaro Ter Lido E Aceito Os Termos De Serviço e Políticos</label>
                    </div>
                    <button class="Button-RegisterPage btn btn-primary">Registrar-se</button>
                </div>
            </div>
    </main>

    <?php include '../components/footer.php' ?>
</body>

</html>