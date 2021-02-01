<?php
    class cadastro_noticiasController extends Controller
    {
        public function index()
        {
            $categoria = new Categoria();
            $dados = $categoria -> exibirCategoriaCombobox();
            $this->carregarTemplate('cadastro_noticias', $dados);
        }

    }
?>