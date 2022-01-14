<!DOCTYPE html>
<html>
  <head>
    <title>Adicionar filmes</title>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  
  <body class="principal">

  <div class="filmes"> 
  FILMES
  
  <a href="index.php" class="btn btn-light" style="width: 100px; float: right; margin-right: 10px; margin-top: 15px"> SAIR </a>

  </div>
  
  <ul>
  <li><a href="adicionar-filmes.php"> Adicionar filme </a></li>
  <li><a href="lista.php"> Lista de Filmes adicionados </a></li>
  <li><a href="recomendados.php"> Filmes recomendados pelo site</a></li>
  </ul>

  <h2 style="color: #B40431"> Adicionar informações do filme </h2>

  <div class="container" style="margin-top:15px; padding: 25px;">

  <form class="pb-2" action="lista.php" method="post">
  <div class="form-group">
  <label for="caixa-titulo"> Título: </label>
  <input type="text" class="form-control" id="caixa-titulo" name="titulo" style="background-color: #EFF5FB">
  </div>

  <div class="form-group">
  <label for="imagem">Adicionar imagem</label>
  <input type="file" class="form-control-file" id="imagem">
  </div>

  <div class="form-group">
  <label for="caixa-diretor"> Sinopse: </label>
  <textarea class="form-control" id="caixa-sipnose" name="sipnose" style="background-color: #EFF5FB"> </textarea>
  </div>
  
  <div class="form-group">
  <label for="caixa-estreia"> Data de estréia: </label>
  <input type="date" class="form-control" id="caixa-estreia" name="data" style="background-color: #EFF5FB">
  </div>

  <div class="form-group">
  <label for="caixa-diretor"> Diretor: </label>
  <input type="text" class="form-control" id="caixa-diretor" name="diretor" style="background-color: #EFF5FB">
  </div>

  <div class="form-group">
  <label for="caixa-duracao"> Duração: </label>
  <input type="text" class="form-control" id="caixa-duracao" name="duracao" style="background-color: #EFF5FB">
  </div>

  <div class="form-group">
  <label for="caixa-categoria"> Categoria: </label>
  <input type="text" class="form-control" id="caixa-categoria" name="categoria" style="background-color: #EFF5FB">
  </div>

  <input type="submit" value="SALVAR" class="btn btn-light" style="width: 100%; margin-top: 20px; margin: auto">

  </form>
  </div>
  
  <footer>
  <p style="font-size: 15px"> Todos os direitos reservados a INFOrmados

  <div style="background-color: white; color: #170B3B; border-radius: 25px; width: 100px; margin: auto">
  <p  style="font-size: 15px"> Contato </p>
  </div>

  <a href="https://www.instagram.com/antenorrl/">
  <div style="width: 40px; background-color: white; padding: 6px; border-radius: 100%; display:inline-block">
  <img src="Ícones/instagram.png" style="width: 30px;" alt="instagram">
  </div>
  </a>
  <a href="https://www.facebook.com/antenorrrr/">
  <div style="width: 40px; background-color: white; padding: 6px; border-radius: 100%; display:inline-block">
  <img src="Ícones/facebook.png" style="width: 30px;" alt="facebook">
  </div>
  </a>

  <h2 style="font-size: 15px; text-decoration:none"> Desenvolvido por: </h2>
  <h2 style="font-size: 15px; text-decoration:none"> Antenor Laurentino, Bianca Hadassa, Deise Agnys, Evelyn Vivian, Geovana Janini e Ysmirna Ester</h2>

  <hr style="background-color: white"/>

  <h2  style="font-size: 15px; text-decoration: none"> Copyright ©2021 Catálogo de Filmes </h2>
  </footer>
  
  </body>
</html>