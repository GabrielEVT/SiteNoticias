<?php

    class cadastro_categoriasController extends Controller
    {
        public function index()
        {
            $this->carregarTemplate('cadastro_categorias');
        }
        
        public function insertDados()
        {
            
            // if(isset($_POST['categoria']) && !empty($_POST['categoria']))
            // {
            //     $objectcategoria = new Categoria();
            //     $categoria = addslashes($_POST['categoria']);
            //     $objectcategoria->cadastrarCategoria($categoria);
            //     header("location: ../Views/cadastro_categorias");
            // }
        }
        // public function insert()
        // {
        //     Categoria::cadastrarCategoria($_POST);
        // }
    }
    // var_dump($_POST['categoria']);
?>