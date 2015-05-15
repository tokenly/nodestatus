<?php 

$delay = intval($_GET['d']);
sleep($delay);

$id = isset($_GET['id']) ? $_GET['id'] : 'none';
echo "Request {$id} was delayed for {$delay} seconds.\n";

?>
