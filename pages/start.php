<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermyr - Gerenciador de Notas Fiscais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/start.css">
</head>

<body>

    <?php
    $auth = true;
    include '../components/header.php';
    ?>
    <div class="row main">

        <div class="col col-3">
            <div id="botaoAdicionar">Incluir Nota Fiscal <box-icon name='plus-circle' color="white"></div>

            <div class="menu-lateral">


                <div class="item-menu-lateral"><a href="#"> <box-icon name='send' color="white"></box-icon> Enviar notas selecionadas</a></div>
                <div class="item-menu-lateral"><a href="#"> <box-icon name='printer' color="white"></box-icon> Imprimir notas selecionadas</a></div>
                <div class="item-menu-lateral"><a href="#"> <box-icon name='spreadsheet' color="#ececec"></box-icon> Gerar PDF DANFE</a></div>
                <div class="item-menu-lateral"><a href="#"> <box-icon name='printer' color="#ececec"></box-icon> Imprimir DANFE</a></div>
                <div class="item-menu-lateral"><a href="#"> <box-icon name='send' color="#ececec"></box-icon> Enviar NF-e por e-mail</a></div>
                <div class="item-menu-lateral"><a href="#"> <box-icon name='send' color="#ececec"></box-icon> Enviar notas pendentes</a></div>
                <div class="item-menu-lateral"><a href="#" style="color:#1AAAD8"> <box-icon name='plus-circle' color="#1AAAD8"></box-icon> Mais opções</a></div>

                <div id="informacoes">
                    <h6 class="bold">Informações: </h6>
                    <p>Quantidade de notas emitidas:

                        <?php

                        if (file_exists("../assets/js/notas.json")) {
                            $notasJson = file_get_contents("../assets/js/notas.json");
                            $notas = json_decode($notasJson, true);

                            if (json_last_error() === JSON_ERROR_NONE) {

                                echo sizeof($notas["notas"]);

                            };


                        } else echo "Arquivo de notas não encontrado";


                        ?>


                    </p>
                </div>

            </div>

        </div>

        <div class="col">

            <h4 class="subtitulo">Inicie suas vendas agora mesmo!</h4>


            <div class="container-notas">

                <!-- <div class="nota-card">
                    <div class="row">
                        <div class="col center-nota">
                            <box-icon name='down-arrow-alt' color="#cecece" size="lg"></box-icon>
                        </div>
                        <div class="col dados-nota">
                            <h5 class="nome-cliente">Ambipar</h5>
                            <p>Prestação de serviço</p>
                            <p>12345</p>

                        </div>
                        <div class="col center-nota">

                            <h5 style="color: green"> + R$1560,00</h5>
                            <p>07/06/2024</p>
                        </div>
                        <div class="col-1">
                            <input class="" type="checkbox">
                        </div>
                    </div>
                </div> -->

                <?php

                if (file_exists("../assets/js/notas.json")) {
                    $notasJson = file_get_contents("../assets/js/notas.json");
                    $notas = json_decode($notasJson, true);

                    if (json_last_error() === JSON_ERROR_NONE) {

                        foreach ($notas["notas"] as $nota) {

                            $cliente = $nota["cliente"];
                            $num = $nota["num"];
                            $valor = number_format($nota["valor"], 2, ',', ".");
                            $tipo = $nota["tipo"];
                            $data = $nota["data"];
                            $descricao = $nota["descricao"];
                            $icone = $nota["tipo"] == "S" ? 'down-arrow-alt' : 'up-arrow-alt';
                            $cor = $nota["tipo"] == "S" ? 'red' : 'green';

                            $html = "<div class='nota-card'>
                    <div class='row'>
                        <div class='col center-nota'>
                            <box-icon name='$icone' color='#cecece' size='lg'></box-icon>
                        </div>
                        <div class='col dados-nota'>
                            <h5 class='nome-cliente'>$cliente</h5>
                            <p>$descricao</p>
                            <p>$num</p>
                            
                        </div>
                        <div class='col center-nota'>
                            <h5 style='color: $cor'> + R$$valor</h5>
                            <p>$data</p>
                        </div>
                        <div class=\"col-1\">
                            <input class=\"\" type=\"checkbox\">
                        </div>
                    </div>
                </div>";

                            echo $html;
                        };
                    };
                } else echo "Arquivo de notas não encontrado";


                ?>

            </div>





        </div>
        <div class="col col-3">
            <div id="div-busca">

                <input id="search" type="text" placeholder="Pesquise por CPF/CNPJ, número da nota ou nome do cliente">

                <div class="dropdown">
                    <button id="dropdown-button" class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <box-icon name='filter-alt' translate-middle" color='#1AAAD8'></box-icon>
                    </button>
                    <ul class="dropdown-menu" id="filtro">
                        <li><a class="dropdown-item" href="#">Mais recentes</a></li>
                        <li><a class="dropdown-item" href="#">Mais antigas</a></li>
                        <li><a class="dropdown-item" href="#">Somente ativas</a></li>
                    </ul>
                </div>

            </div>

            <div id="menu-favoritos">

                <h4 class="subtitulo">Atalhos</h4>
                <div id="lista-favoritos">

                    <a href="#" class="item-favorito">
                        <div> <box-icon name='star' type='solid' color="#ececec"> </box-icon> Liberar pedidos</div>
                    </a>
                    <a href="#" class="item-favorito">
                        <div> <box-icon name='star' type='solid' color="#ececec"> </box-icon> Notas</div>
                    </a>
                    <a href="#" class="item-favorito">
                        <div> <box-icon name='star' type='solid' color="#ececec"> </box-icon> Clientes</div>
                    </a>
                    <a href="#" class="item-favorito">
                        <div> <box-icon name='star' type='solid' color="#ececec"> </box-icon> Pedidos de loja</div>
                    </a>

                </div>

            </div>

        </div>

    </div>

    <?php include "../components/footer.php" ?>

</body>

</html>