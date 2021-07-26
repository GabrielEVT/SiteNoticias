<?php
require 'autoload.php';
    // UTILIZAÇÃO DA BARRA DE PESQUISA
    if(isset($_GET['search']))
    {
        $pesquisa = addslashes($_GET['search']);
        header("location: exibir_noticias/pesquisa/$pesquisa");
    }
?>