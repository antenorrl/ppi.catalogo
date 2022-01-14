<!DOCTYPE html>
<html>

<head>

<title> Fazer login </title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <link href="style.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body class="corpo-primeiras-telas">

  <main class="container" style="padding: 50px; font-family: sans-serif">

  <h4> Login </h4>
  
  <form class="pb-2" action="adicionar-filmes.php" method="post">
  <div class="form-group">
  <label for="caixa-email"> E-mail </label>
  <input type="email" class="form-control" id="caixa-email" name="email" style="background-color: #EFF5FB">
  </div>
  
  <div class="form-group">
  <label for="caixa-senha"> Senha </label>
  <input type="password" class="form-control" id="caixa-senha" name="senha" style="background-color: #EFF5FB">
  </div>

  <input type="submit" value="LOGIN" class="btn btn-light" style="width: 100%; margin: auto;">
  </form>
  </main>
  
</body>
</html>