<?php
require 'autoload.php';
    // CADASTRO DA CATEGORIA
    if(isset($_POST['categoria']))
    {
        $cadastrarCategoria = new cadastro_categoriasController();
        $cadastrarCategoria -> inserirCategoria();
    }
    // CADASTRO DA NOTÍCIA
    elseif(isset($_POST['titulo']) && isset($_FILES['arquivo']))
    {
        $cadastrarNoticia = new cadastro_noticiasController();
        $cadastrarNoticia -> inserirNoticias();
    }   
    // UTILIZAÇÃO DA BARRA DE PESQUISA
    elseif(isset($_GET['search']))
    {
        $pesquisa = addslashes($_GET['search']);
        header("location: exibir_noticias/pesquisa/$pesquisa");
    }
    //UPDATE DA NOTÍCIA
    elseif(isset($_POST['novo_titulo']))
    {
        echo "F";
        // $updateNoticia = new editar_noticiasController();
        // $updateNoticia -> editar()
    }
?>