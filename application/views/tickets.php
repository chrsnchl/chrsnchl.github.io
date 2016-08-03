<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">

<div class="page-headline">
<h1>
  Schmitt's Farms Haunted House
</h1>
<p>Ticket Office opens at 7:00 PM</p>
</div>

<div class="ticket-section">

  <div class="ticket">
    <h3>Haunted Mansion</h3>
    <p>Ticket - $xx</p> 
  </div>

  <div class="ticket">
    <h3>The Haunted Cornmaze</h3>
    <p>Ticket - $xx</p>  
  </div>

</div>

<?php echo $calendar; ?>


</div> <!-- /container -->

    <?php 
    $this->load->view('partials/map');
    ?>
