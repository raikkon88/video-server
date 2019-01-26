<?php
  $dir = 'videos/';
  $films = scandir($dir, 1);
  $title = "Home";
?>

  <?php include "includes/head.php"; ?>

  <body>
    <?php include "includes/header.php" ?>
    <section>
      <h1>List of available films : </h1>
      <ul>
  <?php foreach ($films as $key => $film) { if ($film != "." && $film != "..") { ?>
          <li><a href="film.php?film=<?php echo $film; ?>"><?php echo $film; ?></a></li>
  <?php } } ?>
      </ul>
    </section>

  <?php include "includes/footer.php"; ?>
