<main>
      <section>
        <h2>
          <span class="logo-cine">
            <img src="./Favicon/android-chrome-192x192.png" alt="logo">
          </span>
          Retrouvez l'ensemble des films
        </h2>
        <h3><?= title_main ?></h3>
      </section>
         <div class="form">
          <form   action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
          <label for="fname">Introduisez votre adresse mail:</label>
          <input type="email" id="fname" name="fname" placeholder="Adresse mail">
          <input type="submit" class="btn-validate" value="Envoyer">
       </form>
      <p>Tout les mois profitez de toutes les nouveautés du cinéma . A partir  du mois
          prochain on vous propose tous les classiques du cinéma d’horreur ou thriller. Ou 
         que vous soyez. tous les films en VO, VOST, VF et plus d’options</p>
      </div>
      </main>