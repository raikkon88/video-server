<?php
  $dir = 'videos/';
  $films = scandir($dir, 1);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <header></header>
    <section>
      <h1>List of available films : </h1>
      <ul>
  <?php foreach ($films as $key => $film) { if ($film != "." && $film != "..") { ?>
          <li><a href="film.php?film=<?php echo $film; ?>"><?php echo $film; ?></a></li>
  <?php } } ?>
      </ul>
    </section>
    <footer></footer>
  </body>
</html>
