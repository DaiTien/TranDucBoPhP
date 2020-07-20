/*
DEFINE('INDEX_URL','http://localhost:8012/TranDucBoPhP/');

DEFINE('DB_HOST','112.78.2.94');
DEFINE('DB_USERNAME','super_tranducbo');
DEFINE('DB_PASSWORD','abc123#!');
DEFINE('DB_NAME','superfr_tranducbo');

DEFINE('CONTROLLER_DEFAULT','index');
DEFINE('ACTION_DEFAULT','index');
*/
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