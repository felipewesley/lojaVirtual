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
<body class="bg-light" onselectstart="return false">

	<div class="section first-section" id="main-section">

		<div id="btn-to-top" class="without-classname" style="display: none;">
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
						<li class="nav-item nav-item-menu">
							<a class="nav-link" href="#news">
								Novidades <span id="notifications" class="badge badge-light">+9</span>
							</a>
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
						<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar produto" aria-label="Pesquisar" id="product_search" autocomplete="off">
						<button class="btn btn-info my-2 my-sm-0" type="submit">Pesquisar</button>
					</form>
				</div>
			</nav>
		<!-- End fixed top navbar division -->

		<div class="jumbotron-main">

			<img id="lojavirtual-logo" src="/design/img/lojavirtual_logo.png" alt="LojaVirtual">

			<hr class="my-4">
				<p class="h2">
					A <?= $lojaShortName; ?> agora está em formato digital! <br>
				</p>
				<p class="lead">
					E aqui você pode conferir todos os nossos produtos e promoções! 
					<p>
						<a class="btn btn-primary btn-lg" href="#news" role="button" id="to-news">
							Conferir novidades da loja
						</a>
					</p>

				</p>
			<hr class="my-4">
			<p>
				Qualquer dúvida <a href="#contact">entre em contato</a> conosco!
			</p>
		</div>

	</div>

	<div class="section news-section" id="news">

		<p class="h2 text-dark">Novidades</p>

		<div class="container-carousel">
			<div id="carousel-news" class="carousel slide" data-ride="carousel">
				<!--ol class="carousel-indicators">
					<li data-target="#carousel-news" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-news" data-slide-to="1"></li>
					<li data-target="#carousel-news" data-slide-to="2"></li>
				</ol-->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="/design/banners/banner_adidas.jpg" alt="Nova coleção Adidas">
						<div class="carousel-legend-custom">
							<p class="slide-legend">
								<a class="btn btn-block btn-primary btn-lg btn-more-info" href="#" role="button">
									Mais detalhes sobre isso
								</a>
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="/design/banners/banner_chuteiras.jpg" alt="Nova coleção de chuteiras">
						<div class="carousel-legend-custom">
							<p class="slide-legend">
								<a class="btn btn-block btn-primary btn-lg btn-more-info" href="#" role="button">
									Mais detalhes sobre isso
								</a>
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="/design/banners/banner_camisas.jpg" alt="Nova coleção de camisas">
						<div class="carousel-legend-custom">
							<p class="slide-legend">
								<a class="btn btn-block btn-primary btn-lg btn-more-info" href="#" role="button">
									Mais detalhes sobre isso
								</a>
							</p>
						</div>
					</div>
				</div>
				<a class="carousel-ctrl carousel-control-prev" href="#carousel-news" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a class="carousel-ctrl carousel-control-next" href="#carousel-news" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Próximo</span>
				</a>
			</div>
		</div>

		<br><a href="#offers">
			<img src="/design/img/arrow-down-icon.gif" title="Ir para próxima seção" width="75" class="img_scroll_down">
		</a>

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
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalProduto">
						Ver mais
					</button>
				</div>
			</div>
		</div>

		<a href="#contact">
			<img src="/design/img/arrow-down-icon.gif" title="Ir para próxima seção" width="75" class="img_scroll_down">
		</a>

	</div>

	<div class="section third-section" id="contact">

		<p class="h2">Entre em contato</p>

		<hr class="my-4">

		<!-- https://api.whatsapp.com/send?phone=5541997476710&text=Olá%20<?= $info->lojaName ?>! -->

		<p class="contact-item display-content h5" id="whatsapp">
			<img src="/design/img/whatsapp_icon.png" width="50">
			Conversa no WhatsApp
		</p>

		<p class="contact-item display-content h5" id="email">
			<img src="/design/img/lollipop-icon-email-primary.png" width="50">
			Enviar e-mail
		</p>

		<p class="contact-item display-content h5" id="instagram">
			<img src="/design/img/instagram_icon.png" width="50">
			Ver loja no <span id="instagram">Instagram</span>
		</p>

		<hr class="my-4">

		<p class="lead">
			ou venha visitar nosso estabelecimento
		</p>

		<p class="contact-item display-content h5" id="address">
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
