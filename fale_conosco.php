<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fale conosco</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fale_estilo.css">
</head>

<body>
	<!-- menu lateral -->
	<?php require_once('conteudo/menu_lateral.php'); ?>

	<!-- cabeçalho -->
	<?php require_once('conteudo/cabecalho.php'); ?>
	<main>
		<section class="site">
			<div class="formulario">
				<h1>FALE CONOSCO</h1>
				<form action="https://formsubmit.co/reminaempress64@gmail.com" method="POST">
					<div class="input-box">
						<input type="text" nome="name" placeholder="Digite seu nome" required>
						<input type="email" name="email" placeholder="Digite seu e-mail" required>
					</div>

					<div class="textarea-box">
						<textarea cols="30" rows="10" nome="message" placeholder="Digite sua mensagen" required></textarea>

						<button type="submit*">ENVIAR</button>

						<input type="hidden" nome="_subject" value="Novo Contatol" *>
						<input type="text" name="_honey" style="display:none">
						<input type="hidden" name="_captcha" value="false">
					</div>
				</form>
			</div>
		</section>
	</main>
	<!-- rodape -->
	<?php require_once('conteudo/rodape.php'); ?>
	<!-- SCRIPTS -->
	<script src="js/javascript.js"></script>
</body>

</html>