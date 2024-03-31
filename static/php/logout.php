<?php
    session_start();
    session_destroy();
    echo "<script>window.location='/TCS_Main/index.php'</script>";
?>