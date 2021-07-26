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

        public function editar($idnoticia)
        {
            $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
            $novo_nome_img = md5(time()).$extensao;
    
            $titulo = addslashes($_POST['novo_titulo']);
            $categoria = addslashes($_POST['fk_categoria']);
            $corpo = addslashes($_POST['corpo']);

            $objNoticia = new Noticias();
            $objNoticia -> updateNoticiaPorId($idnoticia, $titulo, $corpo,  $categoria, $novo_nome_img);    

            // REGARREGAR PÁGINA APENAS COM A NOTICIA EDITADA
            $dados = $objNoticia -> carregarNoticiasPorId($idnoticia);
            $this->carregarTemplate('exibir_noticias', $dados);
        }

        public function deletar($idnoticia)
        {
            $noticias = new Noticias();
            $noticias -> deletarNoticiaPorId($idnoticia);
            
            // RECARREGAR A PÁGINA SEM A NOTÍCIA DELETADA
            $dados = $noticias -> exibirTodasNoticias();
            $this->carregarTemplate('exibir_noticias', $dados);
        }
    }
?>