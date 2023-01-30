<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Document</title>
</head>
<body class="fundo" ng-app="">
    
    <?php include('header.html')?>

    <div class="container">

        <div class="flex">
            <img src="images/energia_solar.png" alt="energia solar" class="imagem_energia">
            
            <div>
            
            <p class="padding font_tamanho">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <img src="images/linha.svg" class="linha">

            </div>
        </div>

        <div class="visao">

            <div class="imagens">
            </div>

            <div class="imagens">
            </div>

            <div class="imagens">
            </div>

        </div>

        <div class="texto_visao">

            <div class="texto">
                Visão <br>
                Texto
            </div>

            <div class="texto">
            &nbsp;&nbsp;Visão <br>
            &nbsp;&nbsp;Texto
            </div>

            <div class="texto">
            &nbsp;Valores <br>
            &nbsp;Texto
            </div>

        </div>

        <div id="produtos">

            <div id="titulo">
                <h1 class="titulo">Produtos</h1>
                <img src="images/linha.svg" class="linha2">
            </div>

            <nav class="menu alinhar">
                <ul>
                    <li><input type="radio" ng-model="opcao" value="arcondicionado">Ar condicionado</li>
                    <li><input type="radio" ng-model="opcao" value="inverter">Ar condicionado Inverter</a></li>
                    <li><input type="radio" ng-model="opcao" value="multisplit">Multi Split</a></li>
                    <li><input type="radio" ng-model="opcao" value="energiasolar">Energia solar</a></li>
                </ul>
            </nav>

            <div ng-switch="opcao" class="produtos">
                <div ng-switch-when="arcondicionado" class="produtos">
                    <div class="imagens_prod">IMAGENS 1</div>
                    <div class="imagens_prod">IMAGENS 1</div>
                    <div class="imagens_prod">IMAGENS 1</div>
                    <div class="imagens_prod">IMAGENS 1</div>
                    <div class="imagens_prod">IMAGENS 1</div>
                </div>

                <div ng-switch-when="inverter" class="produtos">
                    <div class="imagens_prod">IMAGENS 2</div>
                    <div class="imagens_prod">IMAGENS 2</div>
                    <div class="imagens_prod">IMAGENS 2</div>
                    <div class="imagens_prod">IMAGENS 2</div>
                    <div class="imagens_prod">IMAGENS 2</div>
                </div>

                <div ng-switch-when="multisplit" class="produtos">
                    <div class="imagens_prod">IMAGENS 3</div>
                    <div class="imagens_prod">IMAGENS 3</div>
                    <div class="imagens_prod">IMAGENS 3</div>
                    <div class="imagens_prod">IMAGENS 3</div>
                    <div class="imagens_prod">IMAGENS 3</div>
                </div>

                <div ng-switch-when="energiasolar" class="produtos">
                    <div class="imagens_prod">IMAGENS 4</div>
                    <div class="imagens_prod">IMAGENS 4</div>
                    <div class="imagens_prod">IMAGENS 4</div>
                    <div class="imagens_prod">IMAGENS 4</div>
                    <div class="imagens_prod">IMAGENS 4</div>
                </div>
            </div>



    </div>

<?php include 'footer.html'?>
</body>
</html>