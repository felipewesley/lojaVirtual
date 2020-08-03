<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>404 Page Not Found</title>
    <link rel="shortcut icon" href="/app-icon.png" type="image/x-icon">
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        ::selection{ background-color: #E13300; color: white; }
        ::moz-selection{ background-color: #E13300; color: white; }
        ::webkit-selection{ background-color: #E13300; color: white; }

        body {
            background-color: #CCC;
            margin: 15px;
            font: 16px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
            text-align: center;
        }

        .container-msg {
            background: #E6E6FA;
            margin: 10px 2.5px;
            border: 1px solid #D0D0D0;
            -webkit-box-shadow: 0 0 5px #3C3C3C;
            padding: 15px 5px;
            color: #FFF;
        }
        .container-not-found {
            margin-top: 75px;
        }
        #error-code {
            text-align: center;
        }
        #error-code img#not-found {
            width: 550px;
            max-width: 100%;
            transition: ease 0.5s;
        }
        #error-code img#not-found:hover {
            /* cursor: pointer; */
            filter: drop-shadow(0px 0px 10px #3C3C3C);
        }
        .container-btn {
            /* height: 250px; */
            width: 550px;
            max-width: 100%;
            text-align: center;
            display: inline-flex;
        }
        p {
            margin: 12px 15px 12px 15px;
        }
    </style>
</head>
<body>
    
    <!-- Start fixed top navbar division -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand nav-item-menu" href="#">
                <img src="../../design/img/app-icon.png" width="30" height="30" class="d-inline-block align-top">
                <span id="lojaName">LojaVirtual</span>
            </a>
        </nav>
    <!-- End fixed top navbar division -->

    <div class="container-not-found" id="error-code">
        <img src="/404_not_found.png" id="not-found">
    </div>
        
    <div class="container-msg text-dark">
        <p>
            A página procurada não foi encontrada.
        </p>
    </div>
    <div class="container-btn">
        <button type="button" class="btn btn-primary btn-lg btn-block" id="back-home">Ir para o início</button>
        <!-- <button type="button" class="btn btn-primary btn-lg">Ir para o início</button> -->
    </div>

    <!-- jQuery include -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $('button#back-home').click(e => {
            location.replace("/welcome")
        })
    </script>
		
</body>
</html>