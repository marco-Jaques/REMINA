<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruno Oliveira</title>
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
                            <h2>Bruno Oliveira - Especialista em Segurança da Informação</h2>
                            <span><img src="../img/chapeu.png" alt="" id="icone1"></span>
                            <span><img src="../img/icone_pessoa.png" alt="" id="icone2"></span>
                            <div class="textos">
                            <p>certificado em CISSP, CEH e CompTIA Security+</p>
                            <p>especialista em segurança da informação com mais de 10 anos de experiência.</p>
                            </div>
                        </div>
                    <img src="../img/bandeira.png" alt="" id="bandeira">
                </div>
                <div class="sobre_prof">
                    <div class="sobre_texto">
                        <h2>Sobre Mim</h2>
                        <p>Bruno Oliveira é um especialista em segurança da informação com mais de 10 anos de experiência. Ele é certificado em CISSP, CEH e CompTIA Security+. Com um sólido histórico em proteção de dados e análise de vulnerabilidades, Bruno já trabalhou com empresas de grande porte no setor financeiro e de telecomunicações. Ele possui habilidades avançadas em criptografia, auditoria de segurança e implementação de políticas de segurança.</p>
                    </div>
                    <p id="avaliacao">(50)</p>
                    <img src="../img/estrelas.png" alt="">
                    <a href="https://web.whatsapp.com/send?phone=55912345678" target="_blank">entre em contato</a>
                </div>
            </div>

            <div class="historico">
            <h2>Historico de Projeto & Avaliações</h2>
                <div class="historico_conteudo">
                    <p>Projeto: Auditoria de Segurança em Banco de Dados</p>
                    <p>Conduziu uma auditoria completa em um grande banco de dados financeiro, identificando e corrigindo vulnerabilidades críticas.</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Implementação de Sistema de Segurança</p>
                    <p>Desenvolveu e implementou um sistema de segurança abrangente para uma empresa de telecomunicações, incluindo firewalls, sistemas de detecção de intrusão e criptografia de dados.</p>
                </div>
                <img src="../img/estrelas.png" alt="">
                <div class="historico_conteudo">
                    <p>Projeto: Treinamento em Segurança da Informação</p>
                    <p>Criou e ministrou treinamentos em segurança da informação para funcionários de uma multinacional, aumentando a conscientização e a proteção contra ameaças cibernéticas.</p>
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