<?php
include_once "./model/config.inc.php";

class Statement{
       

        public function query($request){

            return $request;
           
            
        }

    }

$_newRquest = new Statement($_response = $_bdd->query('SELECT * FROM movie ORDER BY id ASC LIMIT 10'));


/* Warning: include_once(C:\xampp\htdocs\cinema_project/model/controllerMovie.php): 
Failed to open stream: No such file or directory in 
C:\xampp\htdocs\cinema_project\nos-film.php on line 32 */