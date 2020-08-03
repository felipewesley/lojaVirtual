<!doctype html>
<html lang="pt-br">
<head>
	<title> <?= $lojaShortName ?> </title>
	<!-- Site icon in navigator -->
	<link rel="shortcut icon" href="/design/img/app-icon.png" type="image/x-icon">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Internal CSS -->
	<link rel="stylesheet" href="/design/styles/homepage.css">
</head>
<body class="bg-light">

	<div class="section first-section" id="main-section">

		<div id="btn-to-top" class="invisible">
			<a href="#main-section">
				<img src="/design/img/to-top-icon.png" width="50">
			</a>
		</div>

		<!-- Start fixed top navbar division -->
			<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand nav-item-menu" href="#main-section">
					<img src="/design/img/app-icon.png" width="30" height="30" class="d-inline-block align-top" alt="<?= $lojaShortName ?>" title="<?= $lojaShortName ?>">
					<span id="lojaName"><?= $lojaShortName ?></span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item nav-item-menu nav-item-home">
							<a class="nav-link" href="#main-section">Home <span class="sr-only">(Página atual)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Nossos produtos
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item nav-item-menu" href="#offers"> Ofertas </a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item disabled nav-item-menu" href="#"> Produtos </a>
							</div>
						</li>
						<li class="nav-item nav-item-menu">
							<a class="nav-link" href="#contact">Contato</a>
						</li>
						<li class="nav-item nav-item-menu nav-item-adm" id="adm-panel-item">
							<a class="nav-link" href="/welcome/loginAdm">Painel Adm</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0" action="/welcome/searchProduct" method="get">
						<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar produto" aria-label="Pesquisar" id="product_search">
						<button class="btn btn-success my-2 my-sm-0" type="submit">Pesquisar</button>
					</form>
				</div>
			</nav>
		<!-- End fixed top navbar division -->

		<div class="jumbotron-main">

			<h1 class="display-4">
				<?= $lojaName ?>
			</h1>
			<p class="lead">
				Nossa loja agora está em formato virtual! <br>
				E você pode encontrar todos os nossos produtos e promoções! Confira já!
			</p>
			<hr class="my-4">
			<p>
				Qualquer dúvida entre em contato conosco!
			</p>
			<a class="btn btn-primary btn-lg" href="#offers" role="button" id="navegar-pelo-site">
				Navegar pelo site
			</a>
		</div>

	</div>

	<div class="section second-section" id="offers">

		<p class="h2 text-light">Produtos em promoção</p>

		<div class="container container-items">
			<div class="card" style="width: 18rem;" id="card_01">
				<img class="card-img-top" src="/design/img/item.jpg" alt="Imagem de capa do card">
				<div class="card-body">
					<h5 class="card-title">Produto especial</h5>
					<p class="card-text">
						Uma breve descrição do produto para o cliente visualizar rapidamente.
					</p>
					<p class="h2"> R$ 99,90 </p>
					<!-- <a href="#" class="btn btn-primary">Ver mais</a> -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalProduto">
						Ver mais
					</button>
				</div>
			</div>

			<div class="card" style="width: 18rem;"  id="card_02">
				<img class="card-img-top" src="/design/img/item.jpg" alt="Imagem de capa do card">
				<div class="card-body">
					<h5 class="card-title">Produto especial</h5>
					<p class="card-text">
						Uma breve descrição do produto para o cliente visualizar rapidamente.
					</p>
					<p class="h2"> R$ 99,90 </p>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalProduto">
						Ver mais
					</button>
					<!-- <a href="#" class="btn btn-primary">Ver mais</a> -->
				</div>
			</div>

			<div class="card" style="width: 18rem;"  id="card_03">
				<img class="card-img-top" src="/design/img/item.jpg" alt="Imagem de capa do card">
				<div class="card-body">
					<h5 class="card-title">Produto especial</h5>
					<p class="card-text">
						Uma breve descrição do produto para o cliente visualizar rapidamente.
					</p>
					<p class="h2"> R$ 99,90 </p>
					<!-- <a href="#" class="btn btn-primary">Ver mais</a> -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalProduto">
						Ver mais
					</button>
				</div>
			</div>
		</div>

		<a href="#contact">
			<img src="/design/img/arrow-down-icon.gif" title="Ir para próxima seção" width="75" id="img_scroll_down">
		</a>

	</div>

	<div class="section third-section" id="contact">

		<p class="h2">Entre em contato</p>

		<hr class="my-4">

		<!-- https://api.whatsapp.com/send?phone=5541997476710&text=Olá%20<?= $info->lojaName ?>! -->

		<p class="display-content h5" id="whatsapp">
			<img src="/design/img/whatsapp_icon.png" width="50">
			Conversar pelo WhatsApp
		</p>

		<p class="display-content h5" id="email">
			<img src="/design/img/lollipop-icon-email-primary.png" width="50">
			Enviar e-mail
		</p>

		<hr class="my-4">

		<p class="lead">
			ou venha visitar nosso estabelecimento
		</p>

		<p class="display-content h5" id="address">
			<img src="/design/img/address-marker.png" width="50">
			Av. 7 de setembro, 728
		</p>

	</div>

	<!-- Informações do produto -->
	<div class="modal fade" id="modalProduto" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="ModalTitle">Informações do produto</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Informações do produto.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- jQuery include -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- Internal JS -->
	<script src="/design/javascript/homepage.js"></script>

</body>
</html>