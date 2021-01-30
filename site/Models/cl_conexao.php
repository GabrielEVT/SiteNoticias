<?php
    class Conexao
    {
        private static $pdo;
        
        public static function toconnect()
        {
            if(!isset(self::$pdo))
            {
                $dsn = 'mysql:host=localhost;dbname=db_noticias';
                $username = 'root';
                $password = '';
            
                try
                {
                    self::$pdo = new PDO($dsn, $username, $password);
                }
                catch(PDOException $error)
                {
                    echo "Error! \n Error with the database connection.".$error->getMessage()."\n";
                    exit();
                }
                catch(Exception $error)
                {
                    echo "Error! \n".$error->getMessage()."\n";
                    exit();
                }
            }
            return self::$pdo;
        }

      
    }
?>
  