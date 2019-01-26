<?php
  /**
   * Receives the film from parameter and executes it as a video source.
   */
   $film = $_GET['film'];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Playing <?php echo $film; ?> </title>
  </head>
  <body>
    <video width="320" height="240" controls>
      <source src="videos/<?php echo $film; ?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </body>
</html>
