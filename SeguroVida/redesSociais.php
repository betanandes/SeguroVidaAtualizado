<?php

require 'db.php';

$sql = "SELECT * FROM usuarios";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

session_start(); 

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>CareUp - Redes Sociais</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav class="navbar col-12 position-fixed navbar-expand-lg navbar-light bg-light border border-grey"
        style="z-index: 999;">
        <div class="container-fluid">

            <div class="navbar-header">
                <figure>
                    <a href="index.php">
                        <img src="img/careup-removebg-preview.png" id="Logo">
                    </a>
                </figure>
            </div>
            <ul class="nav navbar-nav">
                <!-- Dropdown Nossos Planos -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Nossos Planos<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="planobasico.php">Plano Básico</a></li>
                        <li><a href="planotop.php">Plano Top</a></li>
                        <li><a href="planopremium.php">Plano Premium</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Sobre.php">Sobre a CareUp</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Ajuda<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="duvidas.php">Dúvidas</a></li>
                        <li><a href="trabalheConosco.php">Trabalhe Conosco</a></li>
                        <li><a href="redesSociais.php">Redes Sociais</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
    <?php if (isset($_SESSION['nome'])): ?>
        <li><span class="navbar-text" style="margin-bottom: 30px;">Olá, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</span></li>
        <li class="Log"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
    <?php else: ?>
        <li class="Cad"><a href="cadastro.php"><span class="glyphicon glyphicon-user"></span> Seja Cliente</a></li>
        <li class="Log"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
    <?php endif; ?>
</ul>
        </div>
    </nav>



    <div class="container">
        <h1>Fique à vontade para nos conhecer melhor nas redes sociais.</h1><br>

        <p>
        <h3><a href="https://www.instagram.com/" target="blank">Instagram : @careup</a></h3>
        </p><br> <!--"target" para abrir o link em uma nova janela-->
        <p>
        <h3><a href="https://www.facebook.com/login" target="blank">Facebook : CareUp</a></h3>
        </p><br>
        <p>
        <h3><a href="https://web.whatsapp.com/" target="blanc">WhatsApp : CareUp</a></h3>
        </p>
        <br>
        <br>
        <button>VOLTAR</button>
    </div>


</body>

</html>