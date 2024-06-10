<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alice Martins</title>
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
                            <h2>Alice Martins - Desenvolvedora Full Stack</h2>
                            <span><img src="../img/chapeu.png" alt="" id="icone1"></span>
                            <span><img src="../img/icone_pessoa.png" alt="" id="icone2"></span>
                            <div class="textos">
                            <p>Graduada em Ciência da Computação pela Universidade Federal de Minas Gerais (UFMG)</p>
                            <p>8 anos de experiência na criação de aplicações web robustas e escaláveis.</p>
                            </div>
                        </div>
                    <img src="../img/bandeira.png" alt="" id="bandeira">
                </div>
                <div class="sobre_prof">
                    <div class="sobre_texto">
                        <h2>Sobre Mim</h2>
                        <p>Alice Martins é uma desenvolvedora Full Stack com mais de 8 anos de experiência na criação de aplicações web robustas e escaláveis. Graduada em Ciência da Computação pela Universidade Federal de Minas Gerais (UFMG), Alice possui ampla experiência em diversas tecnologias front-end e back-end, incluindo React, Node.js, e Django. Ela é apaixonada por aprendizado contínuo e frequentemente participa de workshops e cursos online para se manter atualizada com as últimas tendências do mercado.</p>
                    </div>
                    <p id="avaliacao">(50)</p>
                    <img src="../img/estrelas.png" alt="">
                    <a href="https://web.whatsapp.com/send?phone=55912345678" target="_blank">entre em contato</a>
                </div>
            </div>

            <div class="historico">
            <h2>Historico de Projeto & Avaliações</h2>
                <div class="historico_conteudo">
                    <p>Projeto: Sistema de Gestão Hospitalar</p>
                    <p>"Trabalhar com a Alice foi uma experiência incrível. O sistema de gestão hospitalar que ela desenvolveu superou nossas expectativas em termos de funcionalidade e eficiência. A integração de diferentes módulos foi perfeita, e a facilidade de uso do sistema ajudou a otimizar nossos processos internos significativamente." - Dr. Carlos Mendes, Diretor de TI, Hospital Central</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Plataforma de E-commerce</p>
                    <p>"Alice demonstrou um excelente conhecimento técnico e profissionalismo ao criar nossa plataforma de e-commerce. A escalabilidade do sistema e a experiência do usuário foram fantásticas. Recebemos muitos feedbacks positivos dos nossos clientes." - Ana Silva, Gerente de Projetos, Loja Virtual XYZ</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Aplicativo de Redes Sociais</p>
                    <p>"Alice liderou o desenvolvimento do nosso aplicativo de redes sociais com grande competência. O produto final foi um aplicativo robusto e intuitivo que atendeu perfeitamente às necessidades de nossa comunidade." - Marcos Almeida, CEO, Comunidade Conecta</p>
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