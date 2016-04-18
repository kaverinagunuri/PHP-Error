<?php
ob_start();
?>

<h1>Redirection</h1>

<?php
header('Location: http://google.com');
ob_end_flush();
?>
