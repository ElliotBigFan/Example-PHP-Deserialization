<?php
include 'vulnerable.class.php';

if (isset($_POST['data'])) {
    $data = $_POST['data'];
    if(unserialize(base64_decode($data)) === false) {
        echo "Failed to unserialize data. <br>";
        $o = new Logger();
        $o->logFile = 'log.txt';
        $o->message = 'Your payload: '. $data . '. You need to send a valid payload.';
        echo "<a href='./log.txt'>Your payload will be saved here</a>";
        exit;
    }
    // Check if the data is valid
    $object = unserialize(base64_decode($data));
    echo "Data unserialized successfully. You may have a valid payload. ";
}
if (isset($_GET['debug'])) {
    echo "<pre>";
    highlight_file(__FILE__);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Unserialize Payload</h1>
    <h2>RCE GOAL</h2>
    <form method="POST" action="index.php">
        <textarea name="data" rows="10" cols="50"></textarea><br>
        <input type="submit" value="Unserialize">
    </form>
    <p>
        <form method="GET" action="index.php">
            <button type="submit" name="debug" value="1">View Source</button>
        </form>
    </p>
</body>
</html>