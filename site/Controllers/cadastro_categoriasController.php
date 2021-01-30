<?php
    class cadastro_categoriasController extends Controller
    {
        public function index()
        {
            $this->carregarTemplate('cadastro_categorias');
        }

        // public function insert()
        // {
        //     Categoria::cadastrarCategoria($_POST);
        // }
    }
    // var_dump($_POST['categoria']);
?>