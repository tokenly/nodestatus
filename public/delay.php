<?php 

$delay = intval($_GET['d']);
sleep($delay);

$id = isset($_GET['id']) ? $_GET['id'] : 'none';
echo "[ALLOC ".getenv('NOMAD_ALLOC_INDEX')."] Request {$id} was delayed for {$delay} seconds.\n";

