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
    <link rel="icon" type="image/png" href="images/logo_arescold_grande.png">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <?php foreach ($dados as $dado){ if ($dado['id']==$id) {?> 
    <title>Detalhes do Produto - <?php echo $dado['nome']; ?></title>
</head>
<body>

<header style="background-color: white;">
      
        <div class="logo">
            <a href="index.php">
                <img src="images/logo_arescold.png" alt="" class="tamanhologo">
            </a>
        </div>

        <div class="dropdown">
            <button class="botao_menu">Menu
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="drop_link">
                <a href="#Home">Home</a>
                <a href="#Servicos">Serviços</a>
                <a href="#Sobre">Sobre Nós</a>
                <a href="#Produtos">Produtos</a>
                <a href="#Contato">Contato</a>
            </div>
        </div>

        <nav class="menu">
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#Servicos">Serviços</a></li>
                <li><a href="#Sobre">Sobre Nós</a></li>
                <li><a href="#Produtos">Produtos</a></li>
                <li><a href="#Contato">Contato</a></li>
            </ul>
        </nav>
            
</header>

<div style="background-color: aliceblue;">
    <section class="container">
        <div class="flex detalhes">
            
            <div class="div_img">
                <img src="<?php echo $dado['imagem']; ?>" alt="Imagem do <?php echo $dado['nome']; ?>" class="img_detalhe">
            </div>

            <div class="texto_detalhe">
                <p class="font_tamanho titulo_detalhe"><?php echo $dado['nome']; ?>
                    <img src="images/linha.svg" class="linha4">
                </p>
            </div>
        </div>
        <hr class="borda" style="border-color:rgba(2, 19, 250, 0.5);">
        <div>
            <h3 class="titulo_desc">Detalhe do Produto</h3>
            <p class="desc_detalhe">
                <?php echo $dado['descricao'];?>
            </p>
        </div>    
        <?php }}?>
    </section>
<hr class="linha_borda">
<?php include 'footer.html';?>
</div>
</body>
</html>
