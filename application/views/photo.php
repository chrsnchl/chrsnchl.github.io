<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="photo-container">
  <div class="haunt-gallery">

  <?php 
  $path = 'assets/img/resized/*';
  $imgpath = str_replace('*', '', $path);

  $dir = new DirectoryIterator(dirname($path));
  foreach ($dir as $fileinfo):
      if (!$fileinfo->isDot()):
        echo "<div><img src='{$imgpath}{$fileinfo->getFilename()}' alt = 'Photography courtesy of Nicolai Patrick Photography'></div>";
      endif;
  endforeach;

  ?>

  </div>

  <div class="haunt-nav">

  <?php 
  $path = 'assets/img/resized/*';
  $imgpath = str_replace('*', '', $path);

  $dir = new DirectoryIterator(dirname($path));
  foreach ($dir as $fileinfo):
      if (!$fileinfo->isDot()):
        echo "<div><img src='{$imgpath}{$fileinfo->getFilename()}' alt = 'Photography courtesy of Nicolai Patrick Photography'></div>";
      endif;
  endforeach;

  ?>

  </div>

</div>
