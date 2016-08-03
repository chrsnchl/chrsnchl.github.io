<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<?php 
  foreach($js as $javascript):
  echo "<script type='text/javascript' src='{$javascript}'></script>\n";
  endforeach;
?>
  </body>
</html>
