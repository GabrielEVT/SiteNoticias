<?php
    class cadastro_noticiasController extends Controller
    {
        public function index()
        {
            $categoria = new Categoria();
            $dados = $categoria -> exibirCategoriaCombobox();
            $this->carregarTemplate('cadastro_noticias', $dados);
        }

        public function cadastrar()
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
                $mensagem = ['mensagem' => "<p id='Error_message' style='color: green;'>Notícia cadastrada com sucesso."];
            }
            else
            {
                $mensagem = ['mensagem' => "<p id='Error_message' style='color: red;'>ERRO! Notícia já cadastrada.</p>"];
            }
            $this->carregarTemplate('cadastro_noticias', $mensagem);
        }
    }
?>