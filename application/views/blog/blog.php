<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">

<?php $results = (array)$query->result(); ?>
<?php foreach($results as $row): ?>
    <div class="card">
      <h3>
      <?php echo $row->title." - ".$row->time; ?>
      </h3>
      <p>
      <?php echo $row->body; ?>
      </p>


      <?php 
      $title = str_replace(' ', '-', $row->title);
      $anchor = 'blog/'.$title; ?>
      <p>
        <?php echo anchor($anchor, 'View'); ?>
      </p>
    </div>

      <!-- FB Share Button -->
      <?php $pagetitle = base_url().$title; ?>
      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your share button code -->
      <div class="fb-share-button" 
      data-href="<?php echo $pagetitle; ?>" 
      data-layout="button_count">
      </div>
    <!-- FB Share Button -->

<?php endforeach; ?>

</div> <!-- /container -->
