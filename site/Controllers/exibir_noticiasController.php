<?php
    class exibir_noticiasController extends Controller
    {
        public function index()
        {
            $noticias = new Noticias();
            $dados = $noticias -> exibirTodasNoticias();
            $this->carregarTemplate('exibir_noticias', $dados);
        }
    }
?>