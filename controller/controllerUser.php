<?php
include_once "./model/config.inc.php";
try {
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Requête SQL pour récupérer le mot de passe crypté de l'utilisateur
        $stmt = $connexion->prepare("SELECT mdp FROM user WHERE email=:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row) {
            $hashed_password = $row['mdp'];
            // Vérification du mot de passe
            if (password_verify($password, $hashed_password)) {
                // Mot de passe correct, l'utilisateur est authentifié
                echo "Connexion réussie!";
            } else {
                // Mot de passe incorrect
                echo "Nom d'utilisateur ou mot de passe incorrect.";
            }
        } else {
            // Utilisateur non trouvé
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    }
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}

// Fermeture de la connexion à la base de données
$connexion = null;
?>