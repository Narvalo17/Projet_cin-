<?php
  include_once __DIR__ ."/template/head.inc.php";
?>
<body>
  <header>
    <h1>Cinéma a volonté</h1>
  </header>
  <?php
  include_once __DIR__."/template/nav.inc.php";
  ?>  
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
        <?php
       
        include_once __DIR__."/controller/controllerMovie.php"; 
        ?>

    <div class="grid-12">
      <h4>Notre sélection pour vous : </h4>
        <?php
          include_once __DIR__ ."/template/collection.inc.php"
        ?>
    </div>
</main>
<script script type="module" src="./js/app.js"></script>
<?php
       include_once __DIR__ ."/template/footer.inc.php";
?>
</body>
</html>