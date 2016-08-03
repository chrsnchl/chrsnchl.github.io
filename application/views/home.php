<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">

<div class="page-headline">
<h1>
  Schmitt's Farms Haunted House
</h1>
<p>Proud members of the <a href="http://www.lihha.com">Long Island Haunted House Association</a></p>
</div>

<div class="panel-block">
  <div class="panel mansion">
  <div class="img"></div>
  <div class="copy">
  <h2>Haunted Mansion</h2>
  <p>Nightmares stalk the hallways of this house. Will you endure?</p>
  </div>
  </div>

  <div class="panel maze">
  <div class="img"></div>
  <div class="copy">
  <h2>Haunted Corn Maze</h2>
  <p>An ancient malevolence lurks between the corn stalks. Tread carefully.</p>
  </div>
  </div>
</div>


</div> <!-- /container -->

    <?php 
    $this->load->view('partials/map');
    ?>
