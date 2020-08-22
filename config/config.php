
<?php
define('DB_SERVER', '112.78.2.94');
define('DB_USERNAME', 'super_tranducbo');
define('DB_PASSWORD', 'abc123#!');
define('DB_NAME', 'superfr_tranducbo');

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>