<?php

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'signupform';

$db_cont = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if ($db_cont) {
    echo "Yes, Database is connected.";
} else {
    die(mysqli_error($db_cont));
}

?>
