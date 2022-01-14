<!DOCTYPE html>
<html>

<head>

<title> Fazer cadastro </title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <link href="style.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body class="corpo-primeiras-telas">

  <main class="container" style="padding: 50px; font-family: sans-serif">
  <h4> Realizar cadastro </h4>

  <form action="adicionar-filmes.php">

  <form class="pb-2" action="adicionar-filmes.php" method="post">

  <div class="form-group">
  <label for="caixa-nome"> Nome </label>
  <input type="text" class="form-control" id="caixa-nome" name="nome"  style="background-color: #EFF5FB">
  </div>

  <div class="form-group">
  <label for="caixa-email2"> E-mail </label>
  <input type="email" class="form-control" id="caixa-email2" name="email" style="background-color: #EFF5FB">
  </div>
  
  <div class="form-group">
  <label for="caixa-senha2"> Senha </label>
  <input type="password" class="form-control" id="caixa-senha2" name="senha" style="background-color: #EFF5FB">
  </div>

  <input type="submit" value="CADASTRAR" class="btn btn-light" style="width: 100%; margin: auto">
  
  </form>  
</form>
  </main>

</body>
</html>