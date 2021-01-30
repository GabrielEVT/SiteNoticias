<?php
    class cadastro_noticiasController extends Controller
    {
        public function index()
        {
            $noticias = new Noticias();
            // $dados = $noticias -> cadastrarNoticia($titulo, $texto, $idcategoria, $imagem);
            $this->carregarTemplate('cadastro_noticias');
        }

    }
?>