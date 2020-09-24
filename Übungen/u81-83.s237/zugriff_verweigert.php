<?php
$statusCode = 403;
$msg = 'Zutritt für Unbefugte verboten!';
header('HTTP/1.1 '. $statusCode .''. $msg);
?>
<p><?= http_response_code(); ?> Zugriff für Unbefugte verboten!</p>
<?php
exit;
