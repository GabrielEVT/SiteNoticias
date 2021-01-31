<?php
    require_once 'cl_conexao.php';
    class Categoria{
        private  $conexao;

        public function __construct()
        {
            $this->conexao = Conexao::toconnect();
        }

        public function exibirTodasCategoria()
        {
            $selectcomand = $this->conexao->query("SELECT * FROM `tbl_categoria`");
            $dados = $selectcomand->fetchAll(PDO::FETCH_ASSOC);
            return $dados;
        }

        public function cadastrarCategoria($nomecategoria)
        {
            if(isset($_POST['categoria']) && !empty($_POST['categoria']))
            {
                $insertcomand = $this->conexao->query("INSERT INTO `tbl_categoria`(`idcategoria`, `nomecategoria`) VALUES (null,'$nomecategoria')");
            }
        }

        public function exibirCategoriaCombobox()
        {
            $selectcomand = $this->conexao->query("SELECT * FROM tbl_categoria");
            $dados = $selectcomand->fetchAll(PDO::FETCH_ASSOC);
            return $dados;
        }
    }