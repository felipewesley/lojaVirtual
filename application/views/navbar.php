<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand nav-item-menu" href="#main-section">
		<img src="./design/img/app-icon.png" width="30" height="30" class="d-inline-block align-top" alt="<?= $lojaShortName ?>" title="<?= $lojaShortName ?>">
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
				<a class="nav-link" href="./welcome/loginAdm">Painel Adm</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar produto" aria-label="Pesquisar" id="product_search">
			<button class="btn btn-success my-2 my-sm-0" type="submit">Pesquisar</button>
		</form>
	</div>
</nav>
