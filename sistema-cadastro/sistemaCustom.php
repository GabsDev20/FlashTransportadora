<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA FLASHEXPRESS TRANSPORTES LTDA</title>
    <style>
        body {
            background-image: url("fondo.jpg");
            background-repeat:no-repeat;
            background-size:cover;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;


            
        }

        header {
            color: #fff;
            text-align: center;
            padding: 5px 0;
        }

        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            margin: 0 60px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #66B2FF; /* Cambia el color al pasar el ratón por encima */
        }

        .logo {
            align-self: left;
            max-width: 200px;
            margin: 10px;
        }

        .user-info {
            color: #fff;
            text-align: right;
            margin-right: 5px;
        }

        /* Estilos adicionales según sea necesario */

        /* Estilos para el pie de página */
        footer {
            background-color: #333;
            background: url('fondo.png') no-repeat center center fixed; /* Cambia 'fondo.jpg' con la ruta de tu imagen de fondo */

            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<nav>
        <img src="Logo-1.png" image-align = "left" alt="Logo da Transportadora" class="logo"> 
        <a href="#pedidos">Pedidos</a>
        <a href="#rastreamento">Rastreamento</a>
        <a href="#relatorios">Relatórios</a>
        <a href="#contato">Contato</a>
        <a href="#Sair" text-align = "right" >Sair</a> 
        <div class="user-info">
            <?php
                echo "<h1>Bem vindo <u>$logado</u></h1>";
            ?>

            
        </div>

        
    </nav>

    <header>
        
        
    </header>
    

    <!-- Conteúdo da página -->

    <!-- Adicione mais seções e conteúdo conforme necessário -->

    <footer>
        <p>&copy; 2023 FLASHEXPRESS TRANSPORTES LTDA. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
