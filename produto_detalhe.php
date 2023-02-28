<?php 
include 'banco.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icons google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <!-- Icons FontAwesome -->
    <script src="https://kit.fontawesome.com/687b2e222f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <?php foreach ($dados as $dado){ if ($dado['id']==$id) {?> 
    <title>Detalhes do Produto <?php echo $dado['nome']; ?></title>
</head>
<body>

<header>   
        <div class="logo">
            <img src="images/logo_arescold.png" alt="" class="tamanhologo">
        </div>

        <nav class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php/#Servicos">Serviços</a></li>
                <li><a href="index.php#Sobre">Sobre Nós</a></li>
                <li><a href="index.php#Produtos">Produtos</a></li>
                <li><a href="index.php#Contato">Contato</a></li>
            </ul>
        </nav>
</header>
<hr>
    <section>
        <div class="flex">
            
            <div style="width: 30%;">
                <img src="<?php echo $dado['imagem']; ?>" alt="Imagem do <?php echo $dado['nome']; ?>" class="img_detalhe">
            </div>

            <div class="texto_detalhe">
                <p class="font_tamanho titulo_detalhe"><?php echo $dado['nome']; ?>
                    <img src="images/linha.svg" class="linha">
                </p>
                </h2>

                <div>
                    <h3 class="preco_detalhe">
                        R$ <?php echo number_format(($dado['preco']),2,',','.');?>
                    </h3>

                    <p>Até 12x
                     de <span class="promo">R$<?php echo number_format(($dado['preco']/12),2,',','.');?></span> 
                    sem juros
                    </p>
                </div>
            
                <div style="text-align: center; margin-top: 50px;">
                    <button class="botao_detalhe">COMPRAR</button>
                </div>
            </div>
        </div>
<hr>
        <div>
            <h3 class="titulo_desc">Detalhe do Produto</h3>
            <p class="desc_detalhe">
                <?php echo $dado['descricao'];?>
            </p>
        </div>    
        <?php }}?>
    </section>
<hr>
<?php include 'footer.html';?>
</body>
</html>
