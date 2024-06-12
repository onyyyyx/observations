<?php
$host = 'sql.free.fr';
$username = 'hoel.jamier';
$password = 'Kaqi3663';
$dbname = 'hoel_jamier';

// Create connection
$conn = mysql_connect($host, $username, $password);

// Check connection
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
echo 'Conn: OK';