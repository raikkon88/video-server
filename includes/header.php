<?php
  /**
   * Header File.
   */
   $ip = shell_exec ("ip address | grep enp | grep inet | awk '{print $2}' | cut -d'/' -f1");
?>

<header>
  <nav>
    <ul>
      <li><a href="http://<?php echo $ip ?>:9091">Transmission</a></li>
      <li><a href="/video/index.php">Home</a></li>
    </ul>
  </nav>
</header>
