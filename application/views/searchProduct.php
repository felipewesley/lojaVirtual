<!doctype html>
<html lang="pt-br">
<head>
	<title> Busca por produto </title>
	<!-- Site icon in navigator -->
	<link rel="shortcut icon" href="/design/img/app-icon.png" type="image/x-icon">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Internal CSS -->
    <link rel="stylesheet" href="/design/styles/searchProduct.css">
</head>
<body>

	<div class="section first-section" id="main-section">

		<div id="btn-to-top" class="invisible">
			<a href="#main-section">
				<img src="/design/img/to-top-icon.png" width="50">
			</a>
		</div>

		<!-- Start fixed top navbar division -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand nav-item-menu" href="/welcome">
					<img src="/design/img/app-icon.png" width="30" height="30" class="d-inline-block align-top" alt="<?= $lojaShortName ?>" title="<?= $lojaShortName ?>">
					<span id="lojaName"><?= $lojaShortName ?></span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item nav-item-menu nav-item-home">
							<a class="nav-link" href="/welcome">Home <span class="sr-only">(Página atual)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Nossos produtos
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item nav-item-menu" href="/welcome#offers"> Ofertas </a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item disabled nav-item-menu" href="#"> Produtos </a>
							</div>
						</li>
						<li class="nav-item nav-item-menu">
							<a class="nav-link" href="/welcome#contact">Contato</a>
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
				Busca por produto
			</h1>
			<hr class="my-4">
			<p class="lead">
				Está procurando por algum produto? <b>Pesquise aqui!</b>
			</p>
			<form action="#" method="get">
				<div class="input-search input-search-lg">
					<div class="input-group input-group-lg mb-3">
						<input type="text" class="form-control" placeholder="O que você procura?" aria-label="Recipient's username" aria-describedby="button-addon2" id="input-search-lg" name="search_lg">
						<div class="input-group-append">
							<button class="btn btn-success" type="submit" id="button-addon2">Procurar</button>
						</div>
					</div>
				</div>
				<div class="input-search input-search-sm">
					<p>
						<input class="form-control form-control-lg" type="text" placeholder="O que você procura?" name="search_sm" id="input-search-sm">
					</p>
					<button type="submit" class="btn btn-success btn-lg btn-block">Pesquisar</button>
				</div>
			</form>

		</div>
	</div>

    <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- jQuery include -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script>
		$(document).ready(() => {
			if (window.innerWidth > 600) {
				$('input#input-search-lg').focus()
			} else{
				$('input#input-search-sm').focus()
			}
		})
	</script>
	<!-- Internal JS -->
	<script src="/design/javascript/homepage.js"></script>

</body>
</html>