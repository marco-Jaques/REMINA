<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMINA - funcionarios</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_funcionarios.css">
</head>
<body>
<!-- menu lateral -->
<?php require_once('conteudo/menu_lateral.php'); ?>

<!-- cabeçalho -->
<?php require_once('conteudo/cabecalho.php'); ?>

<main>

<section class="site">
    <div class="aba_funcionario">
    <div class="projetos">
        <div class="filtro">
            <div class="filtro_botoes">
                <button class="btn" onclick="filterElements('Todos')">Todos</button>
                <button class="btn" onclick="filterElements('categoria1')">Desenvolvedor Full Stack</button>
                <button class="btn" onclick="filterElements('categoria2')">Segurança da Informação</button>
                <button class="btn" onclick="filterElements('categoria3')">Desenvolvedora Front-end</button>
                <button class="btn" onclick="filterElements('categoria4')">Desenvolvedor Mobile</button>
                <button class="btn" onclick="filterElements('categoria5')">Desenvolvedor Back-End</button>
            </div>
        </div>

        <div class="objects">
            <div class="box categoria1">
                <div class="box_content">
                    <h2>Alice Martins - Desenvolvedora<br> Full Stack</h2>
                    <a href="perfis/perfil1.php">Saiba Mais!</a>
                </div>
            </div>

            <div class="box categoria2">
                <div class="box_content">
                    <h2>Bruno Oliveira - Especialista<br> em Segurança da Informação</h2>
                    <a href="perfis/perfil2.php">Saiba Mais!</a>
                </div>
            </div>

            <div class="box categoria3">
                <div class="box_content">
                    <h2>Carla Souza - Desenvolvedora<br> Front-end</h2>
                    <a href="perfis/perfil3.php">Saiba Mais!</a>
                </div>
            </div>

            <div class="box categoria1">
                <div class="box_content">
                    <h2>Gabriela Lima - Desenvolvedora<br> Full Stack</h2>
                    <a href="perfis/perfil4.php">Saiba Mais!</a>
                </div>
            </div>

            <div class="box categoria4">
                <div class="box_content">
                    <h2>Diego Ferreira - Desenvolvedor<br> Mobile</h2>
                    <a href="perfis/perfil5.php">Saiba Mais!</a>
                </div>
            </div>

            <div class="box categoria5">
                <div class="box_content">
                    <h2>Elisa Campos - Desenvolvedora<br> Back-End</h2>
                    <a href="perfis/perfil6.php">Saiba Mais!</a>
                </div>
            </div>

            <div class="box categoria2">
                <div class="box_content">
                    <h2>Felipe Rocha - Especialista em<br> Segurança da Informação</h2>
                    <a href="perfis/perfil7.php">Saiba Mais!</a>
                </div>
            </div>

            <div class="box categoria4">
                <div class="box_content">
                    <h2>Manoel Gomes - Desenvolvedor<br> Mobile</h2>
                    <a href="perfis/perfil8.php">Saiba Mais!</a>
                </div>
            </div>

            <div class="box categoria3">
                <div class="box_content">
                    <h2>Mariana Ribeiro - Desenvolvedora<br> Front-end</h2>
                    <a href="perfis/perfil9.php">Saiba Mais!</a>
                </div>
            </div>

            <div class="box categoria5">
                <div class="box_content">
                    <h2>Rafael Silva - Desenvolvedor<br> Back-End</h2>
                    <a href="perfis/perfil10.php">Saiba Mais!</a>
                </div>
            </div>

        </div>


    </div>
    </div>

</section>

</main>

    <!-- rodape -->
    <?php require_once('conteudo/rodape.php'); ?>



        <!-- SCRIPTS -->
        <script src="js/javascript.js"></script>

</body>
</html>