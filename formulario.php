<?php
    if(isset($_POST['submit']))  {
        //Os dados digitados no formulário aparecerão no navegador qd clicar no botão ENVIAR:
        print_r('Nome: ' . $_POST['nome'] . '<br>');
        print_r('Email: ' . $_POST['email'] . '<br>');
        print_r('Número telemóvel: ' . $_POST['telefone'] . '<br>');
        print_r('Sexo: ' . $_POST['genero'] . '<br>');
        print_r('Data de nascimento: ' . $_POST['data_nascimento'] . '<br>');
        print_r('Ilha: ' . $_POST['ilha'] . '<br>');
        print_r('Endereço: ' . $_POST['endereco']);
    
    //Mandar os dados para o banco de dados:
    include_once('teste_conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telemovel = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $ilha = $_POST['ilha'];
    $endereco = $_POST['endereco'];

    $enviar_dados = mysqli_query($dbConexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,ilha,endereco) VALUES('$nome','$email','$telemovel','$genero','$data_nasc','$ilha','$endereco')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulário</title>
</head>
<body>
    <section class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><strong>Formulário de clientes</strong></legend>
                <div class="inputBox">
                    <p>
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </p>
                </div>
                <div class="inputBox">
                    <p>
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </p>
                </div>
                <div class="inputBox">
                    <p>
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </p>
                </div>

                <div>Sexo:<br>
                    <input type="radio" name="genero" id="feminino" value="feminino" required>
                    <label for="feminino">Feminino</label><br>
                    <input type="radio" name="genero" id="masculino" value="masculino" required>
                    <label for="masculino">Masculino</label><br>
                    <input type="radio" name="genero" id="outro" value="outro" required>
                    <label for="outro">Outro</label>
                </div>
                
                <p>
                    <label for="data_nascimento"><strong id="data">Data de nascimento:</strong></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </p>

                <div class="inputBox">
                    <p>
                        <input type="text" name="pais" id="pais" class="inputPais" value="Cabo Verde" readonly required>
                        <label for="cidade" id="labelPais" class="labelInput">País</label>
                    </p>
                </div>
                <div class="inputBox">
                    <p>
                        <input type="text" name="ilha" id="ilha" class="inputUser" required>
                        <label for="estado" class="labelInput">Ilha</label>
                    </p>
                </div>
                <div class="inputBox">
                    <p>
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label for="endereco" class="labelInput">Endereço</label>
                    </p>
                </div>

                <input type="submit" value="Enviar" name="submit" id="submit">
            </fieldset>
        </form>
    </section>
    
</body>
</html>