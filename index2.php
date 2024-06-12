<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Observations</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>M</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Magnitude</th>
                <th>Ascension droite</th>
                <th>Déclinaison</th>
            </tr>
        </thead>
        <tbody>
            <?php
$conn = mysqli_connect("localhost", "hoel.jamier", "", "hoel_jamier");
if (!$conn) {
    echo "<script>alert('Connexion échouée: " . addslashes($conn->connect_error) . "');</script>";
    die("Connection failed: "
        . mysqli_connect_error());
}
            ?>
        </tbody>
    </table>
</body>

</html>
