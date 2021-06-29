<?php
    spl_autoload_register(function($nome_arquivo)
    {
        $diretorios = ['Models', 'Core', 'Controllers', 'Views'];
        foreach ($diretorios as $diretorio)
        {
            if($diretorio == 'Models')
            {
                $arquivo = (__DIR__.DIRECTORY_SEPARATOR.$diretorio.DIRECTORY_SEPARATOR.'cl_'.$nome_arquivo.'.php');
                
                if(file_exists($arquivo))
                {
                    require $arquivo;
                }
            }
            else
            {
                $arquivo = (__DIR__.DIRECTORY_SEPARATOR.$diretorio.DIRECTORY_SEPARATOR.$nome_arquivo.'.php');
              
                if(file_exists($arquivo))
                {
                    require $arquivo;
                }
            }
            
        }
    });
?>