<?php
   if(isset($_POST['save-btn']) && $_POST['save-btn']) {
       $currentpass = $_POST['currentpass'];
       echo '<h1 style="color: blue">'.$currentpass.'</h1>';
   
   }
?>