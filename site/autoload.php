<?php
    spl_autoload_register(function($nome_arquivo)
    {
        // if(file_exists('Controllers/'.$nome_arquivo.'.php'))
        // {
        //     require 'Controllers/'.$nome_arquivo.'.php';
        // }
        // elseif(file_exists('Core/'.$nome_arquivo.'.php'))
        // {
        //     require 'Core/'.$nome_arquivo.'.php';
        // }
        // elseif(file_exists('Models/'.$nome_arquivo.'.php'))
        // {
        //     require 'Models/'.$nome_arquivo.'.php';
        // }

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