<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariana Ribeiro</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css"> 
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo_perfil.css">
</head>
<body>
<!-- menu lateral -->
<?php require_once('../conteudo/menu_lateral_perfis.php'); ?>

<!-- cabeçalho -->
<?php require_once('../conteudo/cabecalho.php'); ?>

<main>
    <section class="site">
        <div id="altura">
            <div class="perfil">
                <div>
                    <img src="../img/icone_prof.png" alt="" id="imagem">
                        <div class="perfil_conteudo">
                            <h2>Mariana Ribeiro - Desenvolvedora Front-end</h2>
                            <span><img src="../img/chapeu.png" alt="" id="icone1"></span>
                            <span><img src="../img/icone_pessoa.png" alt="" id="icone2"></span>
                            <div class="textos">
                            <p>Graduada em Ciência da Computação pela Universidade Federal de Minas Gerais (UFMG)</p>
                            <p>4 anos de experiência em construir interfaces de usuário eficientes e intuitivas.</p>
                            </div>
                        </div>
                    <img src="../img/bandeira.png" alt="" id="bandeira">
                </div>
                <div class="sobre_prof">
                    <div class="sobre_texto">
                        <h2>Sobre Mim</h2>
                        <p>Mariana Ribeiro é uma desenvolvedora front-end com 4 anos de experiência em construir interfaces de usuário eficientes e intuitivas. Formada em Design de Interfaces pela Universidade Federal de Santa Catarina (UFSC), Mariana possui habilidades avançadas em HTML, CSS, JavaScript, e frameworks como Angular e Svelte. Ela é dedicada à criação de experiências de usuário envolventes e acessíveis.</p>
                    </div>
                    <p id="avaliacao">(50)</p>
                    <img src="../img/estrelas.png" alt="">
                    <a href="https://web.whatsapp.com/send?phone=55912345678" target="_blank">entre em contato</a>
                </div>
            </div>

            <div class="historico">
            <h2>Historico de Projeto & Avaliações</h2>
                <div class="historico_conteudo">
                    <p>Projeto: Aplicativo de Delivery</p>
                    <p>"O aplicativo de delivery criado por Mariana é rápido e intuitivo. A interface amigável facilitou muito para nossos clientes fazerem pedidos." - João Martins, CEO, FastDelivery</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Plataforma de Streaming</p>
                    <p>"A interface de usuário da plataforma de streaming desenvolvida por Mariana é dinâmica e responsiva. Os usuários adoram a experiência de navegação e visualização de vídeos." - Renata Silva, Gerente de Produto, StreamWorld</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Website Corporativo</p>
                    <p>"O website corporativo desenvolvido por Mariana é moderno e compatível com todos os dispositivos. Recebemos muitos elogios pela nova aparência e funcionalidade." - Bruno Costa, Diretor de TI, TechCorp</p>
                </div>
                <img src="../img/estrelas.png" alt="">
            </div>
        </div>

    </section>

</main>
    <!-- rodape -->
    <?php require_once('../conteudo/rodape.php'); ?>

<script src="../js/javascript.js"></script>

</body>
</html>