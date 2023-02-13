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
<body class="fundo" ng-app="meuApp" ng-controller="Controlador">
    
    <?php include('header.html')?>

    <div class="container">

        <div class="flex">

            <div>
            <img src="images/energia_solar.png" alt="energia solar" class="imagem_energia">
            </div>

            <div>
                <p class="padding font_tamanho">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit.
                <img src="images/linha.svg" class="linha">
                </p>
            </div>
        </div>

        <div class="visao">

            <div class="imagens">
                <img src="images/visao.png" alt="Visão" class="imagens">
                <div class="texto">
                <h4> Visão</h4>    
                    <p class="texto_p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente recusandae magnam nostrum numquam repudiandae laudantium delectus asperiores. 
                    </p>
                </div>
            </div>

            <div class="imagens">
                <img src="images/alvo.png" alt="Missão" class="imagens">
                <div class="texto">
                    <h4> Missão</h4>    
                    <p class="texto_p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente recusandae magnam nostrum numquam repudiandae laudantium delectus asperiores. 
                   </p>
                </div>
            </div>

            <div class="imagens">
                <img src="images/dinheiro.png" alt="Valores" class="imagens">
                <div class="texto">
                    <h4> Valores</h4>
                    <p class="texto_p">   
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente recusandae magnam nostrum numquam repudiandae laudantium delectus asperiores. 
                    </p> 
                </div>
            </div>
        </div>

        <div id="titulo" class="flex">
            <h1 class="titulo">Serviços <img src="images/linha.svg" class="linha2"></h1> 
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

        <div class="flex margin">

            <div>
                <span class="flex imagemdiv"><h1 class="titulo alinhar">Sobre nós<img src="images/linha.svg" class="linha2"></h1></span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt distinctio rem nihil, reiciendis cupiditate saepe accusantium quidem animi? Fugit laboriosam delectus vitae ad maxime beatae accusamus voluptatem assumenda debitis laborum.</p>
            </div>

            <img src="images/logo_arescold.png" alt="logotipo">
        </div>
            
        <div id="produtos">

            <div id="titulo" class="flex">
            <h1 class="titulo">Produtos <img src="images/linha.svg" class="linha2"></h1> 
            </div>

            <div class="produtos w50">
                    <div ng-mouseover="funcaoArCondicionado()" class="selecionar">Ar condicionado</div>
                    <div ng-mouseover="funcaoInverter()" class="selecionar">Ar condicionado Inverter</div>
                    <div ng-mouseover="funcaoMultiSplit()" class="selecionar">Multi Split</div>
                    <div ng-mouseover="funcaoEnergiaSolar()" class="selecionar">Energia solar</div>
            </div>

            
                <div ng-show="arcondicionado" class="produtos">
                    <div><img src="images/ar_elgin.jfif" alt="Ar Condicionado Elgin" class="imagens_prod"></div> 
                    <div><img src="images/ar_consul.webp" alt="Ar Condicionado Consul" class="imagens_prod"></div> 
                    <div><img src="images/ar_philco.webp" alt="Ar Condicionado Philco" class="imagens_prod"></div> 
                    <div><img src="images/ar_lg.webp" alt="Ar Condicionado LG" class="imagens_prod"></div> 
                    <div><img src="images/ar_electrolux.jpg" alt="Ar Condicionado" class="imagens_prod"></div>
                </div>

                <div ng-show="inverter" class="produtos">
                    <div><img src="images/inveter_samsung.jpg" alt="Ar Condicionado inveter samsung" class="imagens_prod"></div> 
                    <div><img src="images/inveter_tcl.webp" alt="Ar Condicionado inveter tcl" class="imagens_prod"></div>
                    <div><img src="images/inveter_midea.png" alt="Ar Condicionado inveter midea" class="imagens_prod"></div>
                    <div><img src="images/inveter_lg.webp" alt="Ar Condicionado inveter lg" class="imagens_prod"></div>
                    <div><img src="images/inveter_elgin.avif" alt="Ar Condicionado inveter elgin" class="imagens_prod"></div> 
                </div>

                <div ng-show="multisplit" class="produtos">
                    <div><img src="images/multisplit_lg.avif" alt="Ar Condicionado Multisplit lg" class="imagens_prod"></div>
                    <div><img src="images/multisplit_fujitsu.png" alt="Ar Condicionado Multisplit fujitsu" class="imagens_prod"></div>
                    <div><img src="images/multisplit_daikin.avif" alt="Ar Condicionado Multisplit daikin" class="imagens_prod"></div> 
                    <div><img src="images/multisplit_midea.webp" alt="Ar Condicionado Multisplit midea" class="imagens_prod"></div> 
                    <div><img src="images/multisplit_samsung.webp" alt="Ar Condicionado Multisplit samsung" class="imagens_prod"></div> 
                </div>

                <div ng-show="energiasolar" class="produtos">
                    <div><img src="images/energiasolar_venda.jpg" alt="Energia Solar" class="imagens_prod"></div> <!-- https://www.neosolar.com.br/loja/kit-energia-solar-fotovoltaico-930wp-24.html -->
                    <div><img src="images/energiasolar_venda.jpg" alt="Energia Solar" class="imagens_prod"></div>
                    <div><img src="images/energiasolar_venda.jpg" alt="Energia Solar" class="imagens_prod"></div>
                    <div><img src="images/energiasolar_venda.jpg" alt="Energia Solar" class="imagens_prod"></div>
                    <div><img src="images/energiasolar_venda.jpg" alt="Energia Solar" class="imagens_prod"></div>
                </div>
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
</html>