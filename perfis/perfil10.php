<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafael Silva</title>
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
                            <p>Graduado em Engenharia de Software pela Universidade Federal de Pernambuco (UFPE)</p>
                            <p>6 anos de experiência em construir sistemas escaláveis e robustos.</p>
                            </div>
                        </div>
                    <img src="../img/bandeira.png" alt="" id="bandeira">
                </div>
                <div class="sobre_prof">
                    <div class="sobre_texto">
                        <h2>Sobre Mim</h2>
                        <p>Rafael Silva é um desenvolvedor back-end com 6 anos de experiência em construir sistemas escaláveis e robustos. Graduado em Engenharia de Software pela Universidade Federal de Pernambuco (UFPE), Rafael possui expertise em Python, Java, e Node.js. Ele é especializado em criar APIs eficientes e em otimizar o desempenho de servidores.</p>
                    </div>
                    <p id="avaliacao">(50)</p>
                    <img src="../img/estrelas.png" alt="">
                    <a href="https://web.whatsapp.com/send?phone=55912345678" target="_blank">entre em contato</a>
                </div>
            </div>

            <div class="historico">
            <h2>Historico de Projeto & Avaliações</h2>
                <div class="historico_conteudo">
                    <p>Projeto: API de Pagamentos</p>
                    <p>"A API de pagamentos desenvolvida por Rafael é extremamente eficiente e segura. A integração foi tranquila e o desempenho nas transações é excelente." - Lucas Carvalho, CTO, PaySolutions</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Sistema de Gestão de Inventário</p>
                    <p>"O sistema de gestão de inventário criado por Rafael melhorou muito nosso controle de estoque e operações logísticas. A solução foi robusta e fácil de implementar." - Paula Monteiro, Gerente de Logística, LogiMax</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Plataforma de Análise de Dados</p>
                    <p>"A plataforma de análise de dados desenvolvida por Rafael nos permite processar grandes volumes de dados em tempo real. Sua expertise foi fundamental para o sucesso do projeto." - Tiago Mendes, Diretor de TI, DataInsight</p>
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