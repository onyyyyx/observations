<html lang="fr">
    <?php
// https://hoel.jamier.free.fr
$host = 'sql.free.fr';
$username = 'hoel.jamier';
$password = 'Ch@tc0nf!d3nt';
$dbname = 'hoel_jamier';

// Create connection
$conn = new mysql_connect($host, $username, $password);


var_dump($conn);

// Check connection
if (!$conn) {
    die('Connection error: ' . mysql_error());
}
echo 'Conn: OK';
?>
</html>