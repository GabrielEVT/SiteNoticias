<?php
require 'autoload.php';
    if(isset($_POST['categoria']))
    {
        $cadastrarCategoria = new cadastro_categoriasController();
        $cadastrarCategoria -> inserirCategoria();
    }
    elseif(isset($_POST['titulo']) && isset($_FILES['arquivo']))
    {
        $cadastrarNoticia = new cadastro_noticiasController();
        $cadastrarNoticia -> inserirNoticias();
    }   
    elseif(isset($_GET['search']))
    {
        $pesquisa = addslashes($_GET['search']);
        header("location: exibir_noticias/pesquisa/$pesquisa");
        // $exibirPesquisa = new exibir_noticiasController();
        // $exibirPesquisa -> index();
    }
    elseif(isset($_GET['idnoticia']))
    {
        echo $_GET['idnoticia'];
        $idnoticia = addslashes($_GET['idnoticia']);
        $noticia = new editar_noticiasController();
        $noticia -> index($idnoticia);
    }
?>