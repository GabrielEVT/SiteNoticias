<?php
    require_once 'cl_conexao.php';
    class Noticias{
        private $conexao;

        public function __construct()
        {
            $this->conexao = Conexao::toconnect();
        }

        public function exibirTodasNoticias()
        {
            $selectcomand = $this->conexao->query("SELECT n.idnoticia, n.titulonoticia, n.conteudonoticia, n.imgnoticias, c.nomecategoria FROM tbl_noticia n INNER JOIN tbl_categoria c ON n.fk_categoria = c.idcategoria ORDER BY n.idnoticia DESC");
            $dados = $selectcomand->fetchAll(PDO::FETCH_ASSOC);
            return $dados;
        }

        public function cadastrarNoticia($titulo, $texto, $idcategoria, $imagem)
        {
            $diretorio = "Midias/img-database/";
            if(isset($_POST['titulo']) && !empty($_POST['titulo']))
            {
                $insertcomand = "INSERT INTO `tbl_noticia`(`idnoticia`, `titulonoticia`, `conteudonoticia`, `fk_categoria`, `imgnoticias`) VALUES (null, '$titulo', '$texto', '$idcategoria', '$imagem')"; 
                if($this->conexao->query($insertcomand))
                {
                    // require 'process.php';
                    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$imagem);
                }
        
            }
        }

    }