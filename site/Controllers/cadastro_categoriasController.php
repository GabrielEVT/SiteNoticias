<?php

    class cadastro_categoriasController extends Controller
    {
        public function index()
        {
            $this->carregarTemplate('cadastro_categorias');
        }
        
        public function cadastrar()
        {
            if(isset($_POST['categoria']) && !empty($_POST['categoria']))
            {
                $nova_categoria = addslashes($_POST['categoria']);
                if ($this->verificarCamposDuplicados(["campo" => "idcategoria"], "tbl_categoria", 'nomecategoria', $nova_categoria) == true)
                {
                    $objCategoria = new Categoria();
                    $objCategoria -> cadastrarCategoria($nova_categoria);
                }

                $this->carregarTemplate('cadastro_categorias');
            }
        }
    }
?>