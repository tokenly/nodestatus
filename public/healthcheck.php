<?php 

if (file_exists('down')) {
    http_send_status(500);
    print "not ok";
    exit();
}

print "ok";
