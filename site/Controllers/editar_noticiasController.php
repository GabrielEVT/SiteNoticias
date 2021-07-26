<?php
    class editar_noticiasController extends Controller
    {
        public function index($idnoticia)
        {
            $categoria = new Categoria();
            $noticias = new Noticias();
            $dadosNoticias = $noticias -> carregarNoticiasPorId($idnoticia);
            $dados = array_merge($dadosNoticias, $categoria -> exibirCategoriaCombobox());
            $this->carregarTemplate('editar_noticias', $dados);
        }

        public function updateNoticiasPorId()
        {
            $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
            $novo_nome_img = md5(time()).$extensao;
    
            $titulo = addslashes($_POST['titulo']);
            $categoria = addslashes($_POST['fk_categoria']);
            $corpo = addslashes($_POST['corpo']);
        
            if ($this->verificarCamposDuplicados(['campo' => 'idnoticia'], "tbl_noticia", "titulonoticia", $titulo) == true)
            {
                $objNoticia = new Noticias();
                $objNoticia -> cadastrarNoticia($titulo, $corpo,  $categoria, $novo_nome_img);
            }
            header("location: cadastro_noticias");
        }

        public function deletarNoticia($idnoticia)
        {
            $noticias = new Noticias();
            $noticias -> deletarNoticia($idnoticia);
            $this->carregarTemplate('exibir_noticias', $noticias);
        }
    }
?>