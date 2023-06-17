<!DOCTYPE html>
<html>
<head>
    <title>Alterar Senha</title>
    <style>
        body {
            background-image: url('https://i.pinimg.com/originals/11/94/58/11945894609c1f8841ab1aba0a1da21d.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #000000; /* Altere para a cor preta desejada */
            padding: 20px;
            border-radius: 5px;
        }

        label,
        input[type="password"] {
            display: block;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .error {
            color: red;
            margin-bottom: 10px;
        }
        .nova{
            color:white;
        }
    </style>
</head>
<body>
    <center>
    <h1 class="nova" >Alterar Senha</h1>
    <form method="POST" action="senhaatualizada.php">
        <label for="nova_senha" class="nova">Nova senha:</label>
        <input type="password" name="nova_senha" id="nova_senha" required>

        <label for="confirmar_senha" class="nova">Confirmar nova senha:</label>
        <input type="password" name="confirmar_senha" id="confirmar_senha" required>

        <input type="submit" value="Alterar Senha">
        
        <?php if (isset($erro)) { ?>
        <div class="error"><?php echo $erro; ?></div>
        <?php } ?>
    </form>
    </center>
</body>
</html>

