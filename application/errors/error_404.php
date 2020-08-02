<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>404 Page Not Found</title>
    <link rel="shortcut icon" href="<?= __DIR__.'/app-icon.png' ?>" type="image/x-icon">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
        ::selection{ background-color: #E13300; color: white; }
        ::moz-selection{ background-color: #E13300; color: white; }
        ::webkit-selection{ background-color: #E13300; color: white; }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        .container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            -webkit-box-shadow: 0 0 8px #D0D0D0;
            padding: 15px;
        }

        .container#error-code {
            color: red; 
        }
        .container#error-code:hover {
            color: #FFF; 
            background: red;
        }

        p {
            margin: 12px 15px 12px 15px;
        }
    </style>
</head>
<body>
    
    <div class="container" id="error-code">
        <p>
            <h1><?php echo $heading; ?></h1>
            <?php echo $message; ?>
        </p>
    </div>
		
</body>
</html>