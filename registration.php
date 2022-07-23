<?php

use LDAP\Result;

if (isset($_POST['subimit'])) {
  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $data_nascimento = $_POST['data_nascimento'];
  $genero = $_POST['genero'];
  $termos = $_POST['termos'];

  $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,usuario,senha,data_nascimento,genero,termos) 
  VALUES ('$nome','$email','$usuario','$senha','$data_nascimento','$genero','$termos')");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="framework/bootstrap-5.2.0-dist/css/bootstrap.min.css">
  <script src="framework/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Rede Social | Cadastro</title>
</head>

<body>
  <div class="container">
    <form class="form-control" action="registration.php" method="POST">
      <div class="col-lg-12">
        <div class="d-flex jumbotron jumbotron-fluid">
          <div class="">
            <h1 class="display-4">Cadastre-se</h1>
            <p class="lead">Rápido e Fácil</p>
          </div>
        </div>
        <div class="d-flex col-md-4 p-2 bd-highlight">
          <div class="input-group">
            <input name="nome" type="text" class="form-control" id="validationDefault02" placeholder="Nome e sobrenome" required>
          </div>
        </div>
        <div class="d-flex col-md-4 p-2 bd-highlight">
          <div class="input-group">
            <input name="email" type="text" class="form-control" id="validationDefault02" placeholder="E-mail" required>
          </div>
        </div>
        <div class="d-flex col-md-4 p-2 bd-highlight">
          <div class="input-group">
            <input name="usuario" type="text" class="form-control" id="validationDefaultUsername" placeholder="Usuário" aria-describedby="inputGroupPrepend2" required>
          </div>
        </div>
        <div class="d-flex col-md-4 p-2 bd-highlight">
          <input name="senha" type="password" class="form-control" id="validationDefault02" placeholder="Senha" required>
        </div>
        <div class="form-group col-md-4 p-2">
          <label for="inputCity">Data de Nascimento</label>
          <input name="data_nascimento" type="date" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4 p-2">
          <label for="inputEstado">Gênero</label>
          <select name="genero" id="inputEstado" class="form-control" placeholder="Selecione">
            <option>Outro</option>
            <option>Feminino</option>
            <option>Masculino</option>
          </select>
        </div>
        <div class="d-flex p-2 form-group">
          <div class="form-check">
            <input name="termos" class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Concordo com os termos e condições
            </label>
          </div>
        </div>
        <button type="button " name="subimit" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
          Cadastrar-se
        </button>
      </div>
    </form>
  </div>
</body>

</html>