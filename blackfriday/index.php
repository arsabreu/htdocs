<!DOCTYPE html>
<html>
<head>
	<title>Black Friday Shopping Cidade</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>



<?php
require 'db_connection.php';
?>


	<header class="conteiner-header">
		<a href="https://www.shoppingcidade.com.br" class="header-link"><img src="img/black-friday-landing-cadastro-email_01.png" class="conteiner-header-img"></a>
	</header>

	<main>
		<p class="fr-form"><span class="cadastro">Cadastre-se agora</span> para receber<br>as melhores ofertas em primeira mão</p>
		<div class="formulario">



		<form action="insert.php" method="post">
			<label for="email">
				<input type="email" name="email" id="email" maxlength="99" placeholder="Digite seu e-mail" autofocus>
			</label>
			<div class="button"><input type="submit" name="cadastrar" value="CADASTRAR"></div>
		</form>








	


		</div>
		<p class="fr-carrosel">Confira algumas das lojas que terão ofertas incriveis na Black Friday</p>
		<!--<article class="carrosel">
			<img src="#" alt="#" title="#">
			<img src="#" alt="#" title="#">
			<img src="#" alt="#" title="#">
			<img src="#" alt="#" title="#">
		</article>-->
		
		<article class="categorias">
			<div class="logo-img-conteiner">
            <div class="logo-img"><a href="https://www.shoppingcidade.com.br/beleza.html" target="_blank"><img src="img/black-friday-landing-cadastro-email_16.png" alt="Beleza" title="Beleza" class="categorias-img"></a></div>

                <div class="logo-img"><a href="https://www.shoppingcidade.com.br/calcados.html" target="_blank"><img src="img/black-friday-landing-cadastro-email_18.png" alt="Calçados" title="Calçados" class="categorias-img"></a></div>

                <div class="logo-img"><a href="https://www.shoppingcidade.com.br/livros.html" target="_blank"><img src="img/black-friday-landing-cadastro-email_20.png" alt="Livros" title="Livros" class="categorias-img"></a></div>

                <div class="logo-img"><a href="https://www.shoppingcidade.com.br/infantil.html" target="_blank"><img src="img/black-friday-landing-cadastro-email_22.png" alt="Infantil" title="Infantil" class="categorias-img"></a></div>

                <div class="logo-img"><a href="https://www.shoppingcidade.com.br/casa.html" target="_blank"><img src="img/black-friday-landing-cadastro-email_24.png" alt="Casa" title="Casa" class="categorias-img"></a></div>

                <div class="logo-img"><a href="https://www.shoppingcidade.com.br/alimentacao.html" target="_blank"><img src="img/black-friday-landing-cadastro-email_31.png" alt="Alimentação" title="Alimentação" class="categorias-img"></a></div>

                <div class="logo-img"><a href="https://www.shoppingcidade.com.br/esportes.html" target="_blank"><img src="img/black-friday-landing-cadastro-email_32.png" alt="Esportes" title="Esportes" class="categorias-img"></a></div>

                <div class="logo-img"><a href="https://www.shoppingcidade.com.br/celular.html" target="_blank"><img src="img/black-friday-landing-cadastro-email_33.png" alt="Celular" title="Celular" class="categorias-img"></a></div>

                <div class="logo-img"><a href="https://www.shoppingcidade.com.br/presente.html" target="_blank"><img src="img/black-friday-landing-cadastro-email_34.png" alt="Presente" title="Presente" class="categorias-img"></a></div>

                <div class="logo-img"><a href="https://www.shoppingcidade.com.br/joias-e-acessorios.html" target="_blank"><img src="img/black-friday-landing-cadastro-email_35.png" alt="Acessórios" title="Acessórios" class="categorias-img"></a></div>
                </div>
		</article>
	
	</main>

</body>
</html>