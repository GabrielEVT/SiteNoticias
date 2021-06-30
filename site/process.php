<?php
require 'autoload.php';
    if(isset($_POST['categoria']))
    {
        $categoria = new Categoria();
        $categoria -> cadastrarCategoria(addslashes($_POST['categoria']));
        header("location: cadastro_categorias");
    }
    elseif(isset($_POST['titulo']) && isset($_FILES['arquivo']))
    {
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = md5(time()).$extensao;
    
        $titulo = addslashes($_POST['titulo']);
        $categoria = addslashes($_POST['fk_categoria']);
        $corpo = addslashes($_POST['corpo']);
        
        $noticia = new Noticias();
        $noticia -> cadastrarNoticia($titulo, $corpo, $categoria, $novo_nome);
        header("location: cadastro_noticias");
    }   
    elseif(isset($_GET['search']))
    {
        $search = addslashes($_GET['search']);

        $noticia = new Noticias();
        $noticia -> pesquisa($search);
        $exibir = new exibir_noticiasController();
        $exibir -> index();
    }
?>