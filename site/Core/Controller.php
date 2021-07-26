<?php
    require_once './Models/cl_conexao.php';
    class Controller
    {
        public $dados;
        private $conexao;

        public function __construct()
        {
            $this->conexao = Conexao::toconnect();
        }

        public function carregarTemplate($nomeView, $dadosModel = array())
        {
            $this->dados = $dadosModel;
            require 'Template/template.php';
        }

        public function carregarViewNoTemplate($nomeView, $dadosModel = array())
        {
            extract($dadosModel);
            require 'Views/'.$nomeView.'.php';
        }

        public function verificarCamposDuplicados($campos = array(), $tabela, $coluna, $dado) : bool
        {    
            extract($campos);
            
            $selectcomand = $this->conexao->query("SELECT 
                                                        $campo
                                                    FROM 
                                                        $tabela
                                                    WHERE 
                                                        $coluna = '$dado'");
            if($selectcomand -> rowCount() > 0)
            {
                return false;
            }
            else
            {
                return true;
            }
        }
    }
