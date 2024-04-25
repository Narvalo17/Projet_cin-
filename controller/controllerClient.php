<?php
        include_once "./model/config.inc.php";
try {
        
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (!empty($_POST["name"]) && !empty($_POST["lastname"]) && !empty($_POST["fname"]) && !empty($_POST["mdp"]) && !empty($_POST["city"]) && !empty($_POST["country"])) {
                
                $nom = $_POST["name"];
                $prenom = $_POST["lastname"];
                $email = $_POST["fname"];
                $mdp = $_POST["mdp"];
                $ville = $_POST["city"];
                $pays = $_POST["country"];
    
                
                $requete = $connexion->prepare("INSERT INTO user (nom, prenom, email, mdp, ville, pays) VALUES (?, ?, ?, ?, ?, ?)");
                
                
                $requete->execute([$nom, $prenom, $email, password_hash($mdp, PASSWORD_DEFAULT), $ville, $pays]);
    
                
                echo "Nouvel utilisateur ajouté avec succès.";
            } else {
                
                echo "Tous les champs sont obligatoires.";
            }
        }
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    
    
    $connexion = null;