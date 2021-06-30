<?php
    class exibir_noticiasController extends Controller
    {
        public function index()
        {
            $noticias = new Noticias();
            if(isset($_GET['search']))
            {
                $search = addslashes($_GET['search']);
                $dados = $noticias -> pesquisa($search);
            }
            else
            {
                $dados = $noticias -> exibirTodasNoticias();
            }
            $this->carregarTemplate('exibir_noticias', $dados);
        }
    }
?>