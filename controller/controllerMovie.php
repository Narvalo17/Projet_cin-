<?php

include_once "./model/config.inc.php";

class Statement{
        public function query($request){
            return $request;
                          }
    }
    $_newRquest = new Statement($_response = $connexion->query('SELECT * FROM movie ORDER BY id ASC LIMIT 30'));


