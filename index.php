<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMINA</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
        <!-- menu lateral -->
        <?php require_once('conteudo/menu_lateral.php'); ?>

        <!-- cabeçalho -->
        <?php require_once('conteudo/cabecalho.php'); ?>

    <main>
        <!-- CONTEEUDO -->
        <?php require_once('conteudo/conteudo_principal.php'); ?>

        <section class="conteudo_principal">
            <div class="sobre">
                <h2>Sobre nós:</h2>
                <p>Pensada para quem procura profissionais excepcionais<br> no que fazem.<br>
                Na Remina você encontrará os melhores profissionais do<br> mercado.</p>
                <a href="">Saiba mais</a>
            </div>
        </section>
    </main>

    <!-- rodape -->
    <?php require_once('conteudo/rodape.php'); ?>


        <!-- SCRIPTS -->

        <script src="js/javascript.js"></script>
</body>
</html>