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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>HOME</title>
</head>
<body>

    <header>
        <style>
            body {
                font-family: Arial;
                margin: 0;
                padding: 0;
            }

            header {
                background-color: #333;
                color: #fff;
                padding: 10px 0;
                text-align: center;
            }

            nav ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }

            nav ul li {
                display: inline;
                margin-right: 20px;
            }

            nav a {
                color: #fff;
                text-decoration: none;
                font-weight: bold;
            }

            #banner img {
                 width: 100%;
                height: auto;
            }

            #services, #tracking, #contact {
                padding: 20px;
            }

            footer {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 1px 0;
                position: fixed;
                bottom: 0;
                width: 100%;
            }



        </style>

        <nav>
            <ul>
                <img src="Logo-1.png" image-align = "left" alt="Logo da Transportadora" class="logo"> 
                <li><a href="sistema.php">Home</a></li>
                <li><a href="Pedidos.php">Pedidos</a></li>
                <li><a href="#">Rastreamento</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Sair</a></li>
            </ul>
        </nav>
    </header>

    <section id="banner">
        <img src="fondo.jpg" alt="Transportadora Banner">
    </section>

    <section id="services">
        <h2>Nossos Serviços</h2>
        <p>Oferecemos diversos tipos de serviço, como transporte de cargas de grande porte, cargas frigoríficas, cargas vivas, cargas perigosas, entre outras.</p>
        <!-- Adicione mais informações sobre seus serviços aqui -->
    </section>

    <section id="tracking">
        <h2>Rastreamento de Cargas</h2>
        <form>
            <label for="trackingNumber">Número de Rastreamento:</label>
            <input type="text" id="trackingNumber" name="trackingNumber" placeholder="Digite o número de rastreamento">
            <button type="submit">Rastrear</button>
        </form>
    </section>

    <section id="contact">
        <h2>Entre em Contato</h2>
        <p>Preencha o formulário abaixo para entrar em contato conosco:</p>
        <form>
            <!-- Adicione campos de formulário, como nome, e-mail, mensagem, etc. -->
            <button type="submit">Enviar Mensagem</button>
        </form>
    </section>

    
    

    <footer>
        <p>&copy; 2023 FLASHEXPRESS. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
