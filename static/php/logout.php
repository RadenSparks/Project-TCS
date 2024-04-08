<?php
    session_start();
    session_destroy();
    echo "<script>window.location='/Project-TCS/index.php'</script>";
?>