<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Node Status</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    <h1>Node Status</h1>
    <div>
        <?php echo "Hello World from PHP [".date("Y-m-d H:i:s")."]"; ?>
    </div>
    <div>
        Version 103
    </div>

    <div><pre>
NOMAD_ALLOC_INDEX: <?php echo getenv('NOMAD_ALLOC_INDEX'); ?>
NOMAD_ALLOC_ID: <?php echo getenv('NOMAD_ALLOC_ID'); ?>
    </pre></div>

    <div><pre>
<?php echo "SERVER: ".json_encode($_SERVER, 192); ?>
    </pre></div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
