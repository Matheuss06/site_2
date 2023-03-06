<!DOCTYPE html>
<html lang="pt-BR" id="topo">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icons google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <!-- Icons FontAwesome -->
    <script src="https://kit.fontawesome.com/687b2e222f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Ares Cold</title>
</head>
<body ng-app="meuApp" ng-controller="Controlador">
   
    <a href="#topo">
        <span class="quadrado">
            <span class="material-symbols-outlined">expand_less</span>
        </span>
    </a>
    
    <?php include('header.html')?>

        <section class="flex fundo">

            <article>
                <img src="images/energia_solar.png" alt="energia solar" class="imagem_energia">
            </article>

            <article>
                <p class="padding font_tamanho">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit.
                <img src="images/linha.svg" class="linha">
                </p>
            </article>
        </section>

        
        <section class="visao cor_azul">

            <article class="imagens">
                <img src="images/visao.png" alt="Visão" class="imagens">
                    <div class="texto">
                        <h4>Visão</h4>    
                        <p class="texto_p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente recusandae magnam nostrum numquam repudiandae laudantium delectus asperiores. 
                        </p>
                    </div>
            </article>

            <article class="imagens">
                <img src="images/alvo.png" alt="Missão" class="imagens">
                    <div class="texto">
                        <h4>Missão</h4>    
                        <p class="texto_p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente recusandae magnam nostrum numquam repudiandae laudantium delectus asperiores. lorem
                        </p>
                    </div>
            </article>

            <article class="imagens">
                <img src="images/dinheiro.png" alt="Valores" class="imagens">
                    <div class="texto">
                        <h4> Valores</h4>
                        <p class="texto_p">   
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente recusandae magnam nostrum numquam repudiandae laudantium delectus asperiores. 
                        </p> 
                    </div>
            </article>
        </section>

        <div id="Servicos">
            <h1 class="titulo">Serviços<img src="images/linha.svg" class="linha2"></h1> 
        </div>

            <div class="servicos">
                 <ul>
                    <li><img src="images/instalacao.jpg" alt="" class="img_servico"></li>
                    <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni minima dolor blanditiis totam excepturi ipsam alias et natus voluptate, aperiam nemo. Iure voluptas sapiente provident nam laudantium, modi sed at?</p></li>
                    <li><img src="images/instalacao.jpg" alt="" class="img_servico"></li>
                    <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium sapiente ea deserunt consectetur modi quas perspiciatis accusamus libero aspernatur minus sint laboriosam, fugit aliquam et vel! Dignissimos atque exercitationem dolorem!</p></li>
                    <li><img src="images/instalacao.jpg" alt="" class="img_servico"></li>
                    <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quidem quibusdam quis, repellat quod aperiam dolor nostrum in optio dolorum ex quos esse omnis ipsa sed eaque maiores beatae voluptate?</p></li>
                </ul>
              
                <ul>
                    <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolores dolorem placeat nobis beatae nesciunt maxime omnis asperiores mollitia odio ab molestias maiores amet possimus blanditiis rem quidem, error fuga!</p></li>
                    <li><img src="images/instalacao.jpg" alt="" class="img_servico"></li>
                    <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolores dolorem placeat nobis beatae nesciunt maxime omnis asperiores mollitia odio ab molestias maiores amet possimus blanditiis rem quidem, error fuga!</p></li>
                    <li><img src="images/instalacao.jpg" alt="" class="img_servico"></li>
                    <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolores dolorem placeat nobis beatae nesciunt maxime omnis asperiores mollitia odio ab molestias maiores amet possimus blanditiis rem quidem, error fuga!</p></li>
                    <li><img src="images/instalacao.jpg" alt="" class="img_servico"></li>
                </ul>
            </div>

        <div class="flex2 margin cor_azul">

            <div id="Sobre">
                <span class="flex texto_sobre tamanhosb">
                    <h1 class="titulo alinhar">
                        Sobre nós
                        <img src="images/linha.svg" class="linha2">
                    </h1>
                </span>

                <p class="sobre_p">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt distinctio rem nihil, reiciendis cupiditate saepe accusantium quidem animi? Fugit laboriosam delectus vitae ad maxime beatae accusamus voluptatem assumenda debitis laborum.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta natus laboriosam nemo minus quidem nesciunt, sequi, quo quaerat ratione numquam magnam sint quia voluptatibus dolorem officiis quis quisquam placeat obcaecati.
                </p>
            </div>

            <span class="tamanhosb">
                <img src="images/logo_arescold_preto.png" alt="logotipo" style="margin: 25px;">
            </span>
        </div>
            
        <div id="Produtos">

            <div id="titulo" class="flex">
                <h1 class="titulo">
                    Produtos 
                    <img src="images/linha.svg" class="linha2">
                </h1> 
            </div>

            <div class="flex w50">
                    <div ng-mouseover="funcaoArCondicionado()" class="selecionar">Ar condicionado</div>
                    <div ng-mouseover="funcaoInverter()" class="selecionar">Ar condicionado Inverter</div>
                    <div ng-mouseover="funcaoMultiSplit()" class="selecionar">Multi Split</div>
                    <div ng-mouseover="funcaoEnergiaSolar()" class="selecionar">Energia solar</div>
            </div>

            
                <div ng-show="arcondicionado" class="produtos">
                    <div><a href="produto_detalhe.php?id=1"><img src="images/ar_elgin.png" alt="Ar Condicionado Elgin" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=2"><img src="images/ar_consul.png" alt="Ar Condicionado Consul" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=3"><img src="images/ar_philco.png" alt="Ar Condicionado Philco" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=4"><img src="images/ar_lg.png" alt="Ar Condicionado LG" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=5"><img src="images/ar_electrolux.png" alt="Ar Condicionado" class="imagens_prod"></div></a>
                </div>

                <div ng-show="inverter" class="produtos">
                    <div><a href="produto_detalhe.php?id=6"><img src="images/inveter_samsung.png" alt="Ar Condicionado inveter samsung" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=7"><img src="images/inveter_tcl.png" alt="Ar Condicionado inveter tcl" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=8"><img src="images/inveter_midea.png" alt="Ar Condicionado inveter midea" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=9"><img src="images/inveter_lg.png" alt="Ar Condicionado inveter lg" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=10"><img src="images/inveter_elgin.png" alt="Ar Condicionado inveter elgin" class="imagens_prod"></div></a>
                </div>

                <div ng-show="multisplit" class="produtos">
                    <div><a href="produto_detalhe.php?id=11"><img src="images/multisplit_lg.png" alt="Ar Condicionado Multisplit lg" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=12"><img src="images/multisplit_fujitsu.png" alt="Ar Condicionado Multisplit fujitsu" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=13"><img src="images/multisplit_daikin.png" alt="Ar Condicionado Multisplit daikin" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=14"><img src="images/multisplit_midea.png" alt="Ar Condicionado Multisplit midea" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=15"><img src="images/multisplit_samsung.png" alt="Ar Condicionado Multisplit samsung" class="imagens_prod"></div></a>
                </div>

                <div ng-show="energiasolar" class="produtos">
                    <div><a href="produto_detalhe.php?id=16"><img src="images/energiasolar_venda.png" alt="Energia Solar" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=17"><img src="images/energia_solar_solo.webp" alt="Kit Energia Solar" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=18"><img src="images/caixa_energiasolar.webp" alt="Combo Energia Solar" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=19"><img src="images/placasolar_black.webp" alt="Kit 6 Placas de Energia Solar" class="imagens_prod"></div></a>
                    <div><a href="produto_detalhe.php?id=20"><img src="images/placasolar_duas.webp" alt="Placa de Energia Solar" class="imagens_prod"></div></a>
                </div>

    <script>
        var app = angular.module('meuApp', []);
        app.controller('Controlador', function($scope){
            $scope.arcondicionado = true;
            $scope.inverter = false;
            $scope.multisplit = false;
            $scope.energiasolar = false;

            $scope.funcaoArCondicionado = function(){
                $scope.arcondicionado = true;
                $scope.inverter = false;
                $scope.multisplit = false;
                $scope.energiasolar = false;
            }

            $scope.funcaoInverter = function(){
                $scope.inverter = true;
                $scope.arcondicionado = false;
                $scope.multisplit = false;
                $scope.energiasolar = false;
            }

            $scope.funcaoMultiSplit = function(){
                $scope.multisplit = true;
                $scope.arcondicionado = false;
                $scope.inverter = false;
                $scope.energiasolar = false;
            }

            $scope.funcaoEnergiaSolar = function(){
                $scope.energiasolar = true;
                $scope.arcondicionado = false;
                $scope.inverter = false;
                $scope.multisplit = false;
            }
        })
    </script>

<?php include 'footer.html'?>

</body>

<script>
    window.scroll({
        top: 0,
        behavior: 'smooth'
    })
</script>

</html>