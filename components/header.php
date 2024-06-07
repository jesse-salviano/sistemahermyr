<?php if ($auth) {
    echo ('
    <header class="header">

        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

        <div class="div-header" id="div-logo">
            <a href="http://localhost/hermyr/index.php">
                <div id="logo"></div>
            </a>
        </div>
        <div class="container text-center" id="div-links">
            <div class="row">
                <div class="col">
                        <a href="#" class="header-link">Clientes</a>
                </div>
                <div class="col">
                        <a href="#" class="header-link">Pedidos</a>
                </div>
                <div class="col">
                     <a href="#" class="header-link">Suporte</a>
                </div>

                <div class="col">
                    <a href="#" class="header-link">Fornecedores</a>
                </div>
            </div>
        </div>
        <div id="div-acesso" class="div-header">
            <div class="row">
                <div class="col">
                    <a href="#" class="header-link"><box-icon name="bell" color="#1AAAD8"></box-icon></a>
                </div>
                <div class="col">
                    <a href="#" class="header-link"><box-icon name="user" color="#1AAAD8"></box-icon></a>
                </div>
                <div class="col">
                    <a href="#" class="header-link"><box-icon name="cog" color="#1AAAD8"></box-icon></a>
                </div>
                <div class="col">
                    <a href="http://localhost/hermyr/index.php" class="header-link"><box-icon name="log-out" color="#1AAAD8"></box-icon></a>
                </div>
            </div>
        </div>
    </header>');
} else {

    echo ('

    <header class="header">
        <div class="div-header" id="div-logo">
            <a href="http://localhost/hermyr/index.php">
                <div id="logo">
                </div>
            </a>
        </div>
        <div class="container text-center" id="div-links">
            <div class="row">
                <div class="col">
                    <a href="#" class="header-link">Funcionalidade</a>
                </div>
                <div class="col">
                    <a href="#" class="header-link">Planos e preços</a>
                </div>
                <div class="col">
                    <a href="#" class="header-link">Fale Conosco</a>
                </div>
            </div>
         </div>
        <div id="div-acesso" class="div-header">
            <a id="experimente" class="bold" href="http://localhost/hermyr/pages/registerPage.php">Experimente Grátis</a>
            <a href="http://localhost/hermyr/pages/loginPage.php" id="entrar" class="bold"> Entrar </a> 
        </div>
    </header>');
}
