<?php
try {
      $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $mdp);
      $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (!empty($_POST["name"]) && !empty($_POST["lastname"]) && !empty($_POST["fname"]) && !empty($_POST["city"]) && !empty($_POST["country"])) {
                
                $nom = $_POST["name"];
                $prenom = $_POST["lastname"];
                $email = $_POST["fname"];
                $ville = $_POST["city"];
                $pays = $_POST["country"];
    
                
                $requete = $connexion->prepare("INSERT INTO user (nom, prenom, email, ville, pays) VALUES (?, ?, ?, ?, ?)");
                
                
                $requete->execute([$nom, $prenom, $email, $ville, $pays]);
    
                
                echo "Nouvel utilisateur ajouté avec succès.";
            } else {
                
                echo "Tous les champs sont obligatoires.";
            }
        }
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    
    
    $connexion = null;