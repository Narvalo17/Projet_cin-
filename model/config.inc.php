<!--  pour la conexion a la base de donnée --> 

<?php
       $serveur = "localhost";
       $utilisateur = "root";
       $mdp = "";
       $base_de_donnees = "bdd_film";
       
       $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $mdp);
       $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);