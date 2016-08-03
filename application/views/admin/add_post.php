<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
  <form action="<?php echo base_url();?>admin/add_post" method="post">
  Title = <input type = 'text' name='title'>
  Body = <input type = 'text' name='body'>
  <input type='submit'>
  </form>
</div> <!-- /container -->
