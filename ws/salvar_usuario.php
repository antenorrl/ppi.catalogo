<pre>
    <?php

    require_once "../model/Usuario.php";
    print_r($_GET);

    $novoUsuario = new Usuario();
    $novoUsuario->setNome($_GET["nome"]);
    $novoUsuario->setEmail($_GET["email"]);
    $novoUsuario->setSenha($_GET["senha"]);

    print_r($novoUsuario);

    $novoUsuario->salvar();

    ?>
</pre>