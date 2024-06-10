<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diego Ferreira</title>
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
                            <h2>Diego Ferreira - Desenvolvedor mobile</h2>
                            <span><img src="../img/chapeu.png" alt="" id="icone1"></span>
                            <span><img src="../img/icone_pessoa.png" alt="" id="icone2"></span>
                            <div class="textos">
                            <p>Ele é formado em Sistemas de Informação pela Universidade Estadual de Campinas (UNICAMP).</p>
                            <p>6 anos de experiência em desenvolvimento de aplicativos para Android e iOS.</p>
                            </div>
                        </div>
                    <img src="../img/bandeira.png" alt="" id="bandeira">
                </div>
                <div class="sobre_prof">
                    <div class="sobre_texto">
                        <h2>Sobre Mim</h2>
                        <p>Diego Ferreira é um desenvolvedor mobile com 6 anos de experiência em desenvolvimento de aplicativos para Android e iOS. Ele é formado em Sistemas de Informação pela Universidade Estadual de Campinas (UNICAMP) e possui forte conhecimento em Swift, Kotlin, e Flutter. Diego é conhecido por criar aplicativos intuitivos e eficientes, com foco na experiência do usuário.</p>
                    </div>
                    <p id="avaliacao">(50)</p>
                    <img src="../img/estrelas.png" alt="">
                    <a href="https://web.whatsapp.com/send?phone=55912345678" target="_blank">entre em contato</a>
                </div>
            </div>

            <div class="historico">
            <h2>Historico de Projeto & Avaliações</h2>
                <div class="historico_conteudo">
                    <p>Projeto: App de Fitness</p>
                    <p>"Diego criou um aplicativo de fitness excepcional, com uma interface amigável e funcionalidades que nossos usuários adoram. A integração com wearables foi um diferencial importante." - Helena Rocha, CEO, FitLife Apps</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Aplicativo Bancário</p>
                    <p>"O aplicativo bancário desenvolvido por Diego foi um sucesso. Sua atenção aos detalhes de segurança e usabilidade fez toda a diferença para nossos clientes." - Eduardo Costa, Gerente de Produtos, Banco XYZ</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Plataforma de Educação</p>
                    <p>"A plataforma mobile para educação que Diego criou transformou nossa oferta de ensino a distância. A interface é intuitiva e os recursos interativos melhoraram muito o engajamento dos alunos." - Patrícia Nunes, Diretora de TI, EducaTech</p>
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