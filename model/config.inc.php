<!-- pour la conexion a la base de donnée --> 

<?php
         try{
       
    
        $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $_bdd = new PDO('mysql:host=localhost;
                        dbname=bdd_film', 
                        'root', '',
                        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));
        
        }
        catch(Exception $e)
        {
        die("Error Data base de votre base ".$e->getMessage());
        }

      