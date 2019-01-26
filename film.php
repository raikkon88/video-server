<?php
  /**
   * Receives the film from parameter and executes it as a video source.
   */
   $title = "Playing". $film;
   $film = $_GET['film'];
?>

  <?php include "includes/head.php"; ?>

  <body>
    <?php include "includes/header.php"; ?>
    <video id="video" width="320" height="240" controls autoplay preload>
      <source src="videos/<?php echo $film; ?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="slidecontainer">
      <input type="range" min="0" max="100" value="50" class="slider" id="volumeControl" onchange="changeVolume('video')">
    </div>

  <?php include "includes/footer.php"; ?>
