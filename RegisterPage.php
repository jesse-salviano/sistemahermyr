<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/RegisterPage.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'components/header.php' ?>

    <main class="principal">
        <h1 class="bold" id="title-h1">Comece o seu teste Grátis</h1>

    <div class="grid-container">
        <div class="grid-text">
        <p>Faça do Hermyr o maior aliado do seu negócio</p>
        </div>
        <div class="grid-inputs">
            <label id="labelInputUser">Usuário (sem caracteres especiais)</label>
            <input type="text" class="inputUser">
            <label id="labelInputEmail">E-mail</label>
            <input type="text" class="inputEmail">
            <label id="labelInputPassword">Senha</label>
            <input type="text" class="inputPassword">
            <button id="singIn">
            <input type="radio" class="input-radio-terms"value="yes" id="terms"> 
            <label class="label-radio-terms" for="terms"><div class="radio-btn"></div><span>Declaro Ter Lido E Aceito Os Termos De Serviço e Políticos</span></span></label>

        </div>
    </div>

    </main>

    <?php include 'components/footer.php' ?>
    
</body>
</html>