<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabriela Lima</title>
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
                            <h2>Gabriela Lima - Desenvolvedora Full Stack</h2>
                            <span><img src="../img/chapeu.png" alt="" id="icone1"></span>
                            <span><img src="../img/icone_pessoa.png" alt="" id="icone2"></span>
                            <div class="textos">
                            <p>Formada em Ciência da Computação pela Pontifícia Universidade Católica do Rio de Janeiro (PUC-Rio)</p>
                            <p>4 anos de experiência na criação de aplicações web robustas e escaláveis.</p>
                            </div>
                        </div>
                    <img src="../img/bandeira.png" alt="" id="bandeira">
                </div>
                <div class="sobre_prof">
                    <div class="sobre_texto">
                        <h2>Sobre Mim</h2>
                        <p>Gabriela Lima é uma desenvolvedora full stack com 4 anos de experiência na criação de aplicações web completas e escaláveis. Formada em Ciência da Computação pela Pontifícia Universidade Católica do Rio de Janeiro (PUC-Rio), Gabriela possui habilidades avançadas em tecnologias front-end e back-end, incluindo HTML, CSS, JavaScript, React, Node.js e Express. Ela é apaixonada por criar soluções integradas que proporcionam uma excelente experiência de usuário e um desempenho robusto no servidor.</p>
                    </div>
                    <p id="avaliacao">(50)</p>
                    <img src="../img/estrelas.png" alt="">
                    <a href="https://web.whatsapp.com/send?phone=55912345678" target="_blank">entre em contato</a>
                </div>
            </div>

            <div class="historico">
            <h2>Historico de Projeto & Avaliações</h2>
                <div class="historico_conteudo">
                    <p>Projeto: Plataforma de E-learning</p>
                    <p>"A plataforma de e-learning desenvolvida por Gabriela é extremamente eficiente e fácil de usar. A integração de diversas funcionalidades em um único sistema ajudou a aumentar o engajamento dos alunos." - Pedro Mendes, Diretor de TI, EduTech</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Sistema de Gestão de Tarefas</p>
                    <p>"O sistema de gestão de tarefas criado por Gabriela melhorou significativamente nossa produtividade. A interface é intuitiva e o desempenho do sistema é excelente." - Carla Souza, Gerente de Projetos, TaskMaster</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Aplicativo de Redes Sociais</p>
                    <p>"O aplicativo de reservas de restaurantes desenvolvido por Gabriela é rápido e confiável. A integração com APIs de terceiros para confirmação de reservas foi um grande diferencial." - Ana Paula Ferreira, CEO, BookMyTable</p>
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