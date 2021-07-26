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
            $selectcomand = $this->conexao->query("SELECT 
                                                        n.idnoticia, 
                                                        n.titulonoticia, 
                                                        n.conteudonoticia, 
                                                        n.imgnoticias, 
                                                        c.nomecategoria 
                                                    FROM tbl_noticia n 
                                                    INNER JOIN 
                                                        tbl_categoria c 
                                                        ON n.fk_categoria = c.idcategoria 
                                                    ORDER BY n.idnoticia DESC");
            $dados = $selectcomand->fetchAll(PDO::FETCH_ASSOC);
            return $dados;
        }

        public function carregarNoticiasPorId($idnoticia)
        {
           $selectcomand = $this->conexao->query("SELECT 
                                                        n.idnoticia, 
                                                        n.titulonoticia, 
                                                        n.conteudonoticia, 
                                                        n.imgnoticias, 
                                                        c.nomecategoria 
                                                    FROM tbl_noticia n 
                                                    INNER JOIN 
                                                        tbl_categoria c 
                                                        ON n.fk_categoria = c.idcategoria
                                                    WHERE 
                                                        n.idnoticia = $idnoticia 
                                                    ORDER BY n.idnoticia DESC");
            $dados = $selectcomand->fetchAll(PDO::FETCH_ASSOC);
            return $dados;
        }

        public function pesquisa($search)
        {
            $selectcomand = $this->conexao->query("SELECT 
                                                        n.idnoticia, 
                                                        n.titulonoticia, 
                                                        n.conteudonoticia, 
                                                        n.imgnoticias, 
                                                        c.nomecategoria 
                                                    FROM tbl_noticia n 
                                                    INNER JOIN 
                                                        tbl_categoria c ON n.fk_categoria = c.idcategoria 
                                                    WHERE 
                                                        n.titulonoticia LIKE '%$search%' 
                                                        OR 
                                                        c.nomecategoria LIKE '%$search%'
                                                    LIMIT 5");
            $resultQuery = $selectcomand->fetchAll(PDO::FETCH_ASSOC);
            return $resultQuery;
        }

        public function cadastrarNoticia($titulo, $texto, $idcategoria, $imagem) : bool
        {
            $diretorio = "Midias/img-database/";
            if(isset($_POST['titulo']) && !empty($_POST['titulo']))
            {
                $insertcomand = "INSERT INTO 
                                    `tbl_noticia`(`idnoticia`, 
                                                  `titulonoticia`, 
                                                  `conteudonoticia`, 
                                                  `fk_categoria`, 
                                                  `imgnoticias`) 
                                VALUES (null, '$titulo', '$texto', '$idcategoria', '$imagem')"; 
                if($this->conexao->query($insertcomand))
                {
                    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$imagem);
                    return true;
                }
                return false;
            }
        }

        public function deletarNoticia($idnoticia) : bool
        {
            $deletecomand = "DELETE FROM 
                                        `tbl_noticia`
                                    WHERE
                                        `idnoticia` = $idnoticia";
            if($this->conexao->query($deletecomand))
            {
                return true;
            }
            return false;
        }
    }