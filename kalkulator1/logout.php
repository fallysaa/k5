<?php
session_start();
session_destroy();

echo "<script>alert ('Terima kasih kerana menggunakan perkhidmatan ini')

window.location='index.php'</script>";
?>