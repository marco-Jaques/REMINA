<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carla Souza</title>
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
                            <h2>Carla Souza - Desenvolvedora Front-End</h2>
                            <span><img src="../img/chapeu.png" alt="" id="icone1"></span>
                            <span><img src="../img/icone_pessoa.png" alt="" id="icone2"></span>
                            <div class="textos">
                            <p>Formada em Design de Interfaces pela Universidade de São Paulo (USP)</p>
                            <p>desenvolvedora front-end com mais de 7 anos de experiência</p>
                            </div>
                        </div>
                    <img src="../img/bandeira.png" alt="" id="bandeira">
                </div>
                <div class="sobre_prof">
                    <div class="sobre_texto">
                        <h2>Sobre Mim</h2>
                        <p>Carla Souza é uma desenvolvedora front-end com mais de 7 anos de experiência na criação de interfaces de usuário modernas e responsivas. Formada em Design de Interfaces pela Universidade de São Paulo (USP), ela possui habilidades avançadas em HTML, CSS, JavaScript, e frameworks como React e Angular. Carla é dedicada a criar experiências de usuário envolventes e intuitivas, focando sempre em performance e acessibilidade.</p>
                    </div>
                    <p id="avaliacao">(50)</p>
                    <img src="../img/estrelas.png" alt="">
                    <a href="https://web.whatsapp.com/send?phone=55912345678" target="_blank">entre em contato</a>
                </div>
            </div>

            <div class="historico">
            <h2>Historico de Projeto & Avaliações</h2>
                <div class="historico_conteudo">
                    <p>Projeto: Dashboard de Análise de Dados</p>
                    <p>"O dashboard desenvolvido por Carla transformou a forma como visualizamos nossos dados. A interface é intuitiva e os gráficos interativos facilitam muito a análise de métricas importantes." - Laura Pinheiro, Gerente de Marketing, MarketAnalytics</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Portal de Cursos Online</p>
                    <p>"O portal de cursos online criado por Carla oferece uma experiência de usuário excepcional. A navegação é fluida, e as funcionalidades interativas mantêm os alunos engajados." - Fernanda Ribeiro, Coordenadora de EAD, EduMaster</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Aplicativo de Reservas de Eventos</p>
                    <p>"O aplicativo de reservas de eventos desenvolvido por Carla é rápido e fácil de usar. A interface responsiva proporciona uma ótima experiência tanto em desktops quanto em dispositivos móveis." - Ricardo Gomes, CEO, EventBook</p>
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