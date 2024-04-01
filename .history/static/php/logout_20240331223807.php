<?php
    session_start();
    session_destroy();
    echo "<script>window.location='/Project_TCS/index.php'</script>";
?>