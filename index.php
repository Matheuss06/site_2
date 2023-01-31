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
            &nbsp;&nbsp;Missão <br>
            &nbsp;&nbsp;Texto
            </div>

            <div class="texto">
            &nbsp;Valores <br>
            &nbsp;Texto
            </div>

        </div>

             <div id="titulo">
                <h1 class="titulo">Serviços</h1>
                <img src="images/linha.svg" class="linha2">
            </div>

        <div id="produtos">

            <div id="titulo">
                <h1 class="titulo">Produtos</h1>
                <img src="images/linha.svg" class="linha2">
            </div>

            <nav class="menu alinhar">
                <ul>
                    <li><input type="radio" ng-model="opcao" value="arcondicionado">Ar condicionado</li>
                    <li><input type="radio" ng-model="opcao" value="inverter">Ar condicionado Inverter</li>
                    <li><input type="radio" ng-model="opcao" value="multisplit">Multi Split</li>
                    <li><input type="radio" ng-model="opcao" value="energiasolar">Energia solar</li>
                </ul>
            </nav>

            <div ng-switch="opcao" class="produtos">
                <div ng-switch-when="arcondicionado" class="produtos">
                    <div><img src="images/ar_elgin.jfif" alt="Ar Condicionado Elgin" class="imagens_prod"></div> <!-- https://www.sodimac.com.br/sodimac-br/product/870675/eco-plus-gera%C3%A7ao-ii-12000-f-unidade-interna/870675/ -->
                    <div><img src="images/ar_consul.webp" alt="Ar Condicionado Consul" class="imagens_prod"></div> <!-- https://www.consul.com.br/ar-condicionado-split-9000-btus-consul-frio-maxi-refrigeracao-e-maxi-economia/p?idsku=2004696&utm_source=google&utm_medium=organic&utm_content=shopping -->
                    <div><img src="images/ar_philco.webp" alt="Ar Condicionado Philco" class="imagens_prod"></div> <!-- https://www.magazineluiza.com.br/ar-condicionado-split-hi-wall-philco-9-000-btus-frio-220v/p/fe39h231ak/ar/arsp/?&seller_id=climario -->
                    <div><img src="images/ar_lg.webp" alt="Ar Condicionado LG" class="imagens_prod"></div> <!-- https://www.magazineluiza.com.br/ar-condicionado-split-hi-wall-inverter-lg-dual-compact-9000-btu-h-frio-s4nq09wa5ac-eb2gamz-220-volts/p/ba651dkjgj/ar/arar/?&seller_id=friopecas -->
                    <div><img src="images/ar_electrolux.jpg" alt="Ar Condicionado" class="imagens_prod"></div> <!-- https://www.casasbahia.com.br/ar-condicionado-split-inverter-electrolux-hi-wall-techno-9000-btus-frio-qi09f-12819109/p/12819109?utm_medium=Cpc&utm_source=google_freelisting&IdSku=12819109&idLojista=19937&tipoLojista=3P -->
                </div>

                <div ng-switch-when="inverter" class="produtos">
                    <div><img src="images/inveter_samsung.jpg" alt="Ar Condicionado inveter samsung" class="imagens_prod"></div> <!-- https://www.kabum.com.br/produto/348190/ar-condicionado-split-samsung-digital-inverter-12-000-btus-frio?srsltid=Ad5pg_HeXEWuGhb8qDDCP6sU_JrknEd8vQE0hXFHbwMla14NkACb4Mfkm_s -->
                    <div><img src="images/inveter_tcl.webp" alt="Ar Condicionado inveter tcl" class="imagens_prod"></div> <!-- https://www.gazin.com.br/produto/4707/ar-condicionado-split-hi-wall-tcl-9000-btus-filtro-hd-e-modo-eco-frio?voltagem=220-volts&seller_id=6 -->
                    <div><img src="images/inveter_midea.png" alt="Ar Condicionado inveter midea" class="imagens_prod"></div> <!-- https://www.strar.com.br/ar-condicionado-split-hi-wall-springer-midea-inverter-xtreme-save-connect-9-000-btu-h-frio-220v/p?idsku=1052 -->
                    <div><img src="images/inveter_lg.webp" alt="Ar Condicionado inveter lg" class="imagens_prod"></div> <!-- https://www.magazineluiza.com.br/ar-condicionado-split-lg-12000-btus-dual-inverter-voice-frio-220v-s4-q12ja315/p/ce5672f170/ar/arsp/?&seller_id=continentalcenter -->
                    <div><img src="images/inveter_elgin.avif" alt="Ar Condicionado inveter elgin" class="imagens_prod"></div> <!-- https://www.magazineluiza.com.br/ar-condicionado-split-lg-12000-btus-dual-inverter-voice-frio-220v-s4-q12ja315/p/ce5672f170/ar/arsp/?&seller_id=continentalcenter -->
                </div>

                <div ng-switch-when="multisplit" class="produtos">
                    <div><img src="images/multisplit_lg.avif" alt="Ar Condicionado Multisplit lg" class="imagens_prod"></div> <!-- https://www.casasbahia.com.br/ar-condicionado-multi-split-inverter-lg-18000-btus-2x-evap-hw-12000-quente-frio-220v-1553528148/p/1553528148?utm_medium=Cpc&utm_source=google_freelisting&IdSku=1553528148&idLojista=10497&tipoLojista=3P -->
                    <div><img src="images/multisplit_fujitsu.png" alt="Ar Condicionado Multisplit fujitsu" class="imagens_prod"></div> <!-- https://www.poloar.com.br/ar-condicionado-multi-split-fujitsu-48000-btu-h-1x-7000-e-2x-24000-quente-frio-220v/p?idsku=986 -->
                    <div><img src="images/multisplit_daikin.avif" alt="Ar Condicionado Multisplit daikin" class="imagens_prod"></div> <!-- https://www.arcerto.com/produto/ar-condicionado-multi-split-inverter-daikin-18000-btuh-quente-e-frio-12-12-220v/ -->
                    <div><img src="images/multisplit_midea.webp" alt="Ar Condicionado Multisplit midea" class="imagens_prod"></div> <!-- https://www.magazineluiza.com.br/ar-condicionado-multi-tri-split-hw-inverter-springer-midea-3x9000-btus-quente-frio-220v-38mbta27m5/p/hadg89ej5e/ar/arar/?&seller_id=centralar -->
                    <div><img src="images/multisplit_samsung.webp" alt="Ar Condicionado Multisplit samsung" class="imagens_prod"></div> <!-- https://www.americanas.com.br/produto/6906645622?opn=YSMESP&offerId=63a3065f401db3b86b404c69&srsltid=Ad5pg_Fifhyzw0pVp6NVH0Rq5VeaMJLKjSDuRfzXXlT8mqreZrk2ZJsEJ2E -->
                </div>

                <div ng-switch-when="energiasolar" class="produtos">
                    <div><img src="images/energiasolar_venda.jpg" alt="Energia Solar" class="imagens_prod"></div> <!-- https://www.neosolar.com.br/loja/kit-energia-solar-fotovoltaico-930wp-24.html -->
                    <div><img src="images/energiasolar_venda.jpg" alt="Energia Solar" class="imagens_prod"></div>
                    <div><img src="images/energiasolar_venda.jpg" alt="Energia Solar" class="imagens_prod"></div>
                    <div><img src="images/energiasolar_venda.jpg" alt="Energia Solar" class="imagens_prod"></div>
                    <div><img src="images/energiasolar_venda.jpg" alt="Energia Solar" class="imagens_prod"></div>
                </div>
        </div>

       

    </div>

<?php include 'footer.html'?>
</body>
</html>