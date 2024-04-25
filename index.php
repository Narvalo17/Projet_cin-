<?php 
  
  include_once __DIR__ ."/template/head.inc.php";
?>

<body>
  <header>
    <h1><?= title ?></h1>
  </header>
  <?php
    # nav
    include_once __DIR__."/template/nav.inc.php";
    include_once __DIR__ ."/template/main.inc.php";
    include_once __DIR__ ."/template/footer.inc.php";
  ?>
  


</body>
</html>
