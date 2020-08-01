<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $lojaName ?> :: Admin </title>
    <!-- Site icon in navigator -->
	<link rel="shortcut icon" href="../design/img/app-icon.png" type="image/x-icon">
	<!-- jQuery include -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="../design/styles/login_adm_style.css">
</head>
<body>

    <div class="container-main-box">
        <div class="main-box">
            <div class="content">
                <div class="title-box">
                    <img src="../design/img/app-icon.png" width="75">
                    <h1 class="title"> <?= $lojaName ?> </h1>
                    <h3 class="title"> Painel administrativo </h3>
                    <hr class="rule">
                    <h3 class="title"> Faça o seu login </h3>
                </div>
                <form>
                    <div class="input input-login">
                        <label for="input-login"> Login </label><br>
                        <input type="text" id="input-login" class="input-value form-element init init-focus default" placeholder="example@mail.com" spellcheck="false" autocomplete="off" autofocus>
                    </div>
                    <div class="input input-login">
                        <label for="input-password"> Senha </label><br>
                        <input type="password" id="input-password" class="input-value form-element init default" placeholder="password">
                    </div>
					<button type="submit" class="btn-submit form-element default" id="btn-entrar"> Entrar </button>
					<button type="button" class="btn-return-home form-element default" id="btn-voltar"> Voltar ao site </button>
					<!-- <br><br> -->
                    <!-- <small id="footer"> Layout by Felipe Wesley &copy; 2020 </small> -->
                </form>
            </div>
    </div>

	<script src="../design/javascript/login_adm.js"></script>

</body>
</html>
