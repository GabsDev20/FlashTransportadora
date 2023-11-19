<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Fazer Pedido com Entrega</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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

        #order {
            padding: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10.344a6hpx 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 2%;
        }

    </style>
</head>
<body>

    <header>
        <h1>FLASHEXPRESS TRANSPORTADORA LTDA.</h1>
        <nav>
            <ul>
                <img src="Logo-1.png" image-align = "left" alt="Logo da Transportadora" class="logo"> 
                <li><a href="sistema.php">Home</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Rastreamento</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section id="order">
        <h2>Fazer Pedido com Entrega</h2>
        <form>
            <label for="senderName">Nome Remetente:</label>
            <input type="text" id="senderName" name="senderName" required>

            <label for="senderAddress">Endereço Remetente:</label>
            <input type="text" id="senderAddress" name="senderAddress" required>

            <label for="recipientName">Nome Destinatário:</label>
            <input type="text" id="recipientName" name="recipientName" required>

            <label for="recipientAddress">Endereço Destinatário:</label>
            <input type="text" id="recipientAddress" name="recipientAddress" required>

            <label for="deliveryDate">Data de Entrega:</label>
            <input type="date" id="deliveryDate" name="deliveryDate" required>

            <label for="packageWeight">Peso da Encomenda (kg):</label>
            <input type="number" id="packageWeight" name="packageWeight" required>

            <button type="submit">Enviar Pedido</button>
        </form>

        
    </section>

    <footer>
        <p>&copy; 2023 Sua Transportadora. Todos os direitos reservados.</p>
    </footer>

</body>

</html>
