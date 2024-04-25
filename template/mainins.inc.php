<main>
    <section>
      <main> 
        <section>
            <h2>
              <span class="logo-cine">
                <img src="./Favicon/android-chrome-192x192.png" alt="logo">
              </span>
              Retrouvez l'ensemble des films
            </h2>
            <h3>Films d'horreur et de thriller</h3>
            
        </section>
        <div class="grid-2" role="region" aria-labelledby="litte-cover">
          <ul id="litte-cover">
            <li>
              <p>Regardez en illimité sur votre TV, Smartphone et votre console de jeux</p>
              
            </li>
            <li><img src="asset/tv.jpg" alt="little cover"></li>
          </ul>
        </div>
        <h4>Inscrivez vous et profitez de cinéma a volanté</h4>
                <h4>Inscription rapide</h4>
    </section>
    
    <div class="form">
      <form action="inscription.php" method="post">
        <label for="fname">Nom</label>
        <input type="text" id="nom" name="name" placeholder="Votre nom">

        <label for="lastname">Prénom</label>
        <input type="text" id="lastname" name="lastname" placeholder="Votre prénom">

        
        <label for="fname">Votre adresse mail:</label>
        <input type="email" id="fname" name="fname" placeholder="Adresse mail">
        
        <label for="mdp">Mot de passe</label>
        <input type="password" id="mdp" name="mdp" placeholder="Mot de passe">

        <label for="city">Votre ville:</label>
        <input type="text" id="city" name="city" placeholder="Ville">

        <label for="country">Votre Pays:</label>
        <input type="text" id="country" name="country" placeholder="Pays">
        <input type="submit" value="envoyer" class="btn-validate">
     </form>

     <?php
    
    include_once "./model/config.inc.php";
    include_once  "./controller/controllerClient.php";
    
    
    ?>
 
 
    </div>

  </main>