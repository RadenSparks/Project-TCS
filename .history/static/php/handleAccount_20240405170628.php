<?php
    if($_POST['currentpass'] && $_POST['newpass'] && $_POST['confirmnewpass']) {
        $currentpass = $_POST['currentpass'];
        echo '<h1 style="color: blue">'.$currentpass.'</h1>';
    }
?>