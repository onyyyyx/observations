<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messier Catalog</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Messier Catalog</h1>
    </header>
    <main>
        <?php
        $dbhost = "localhost";
        $dbuser = "hoel.jamier";
        $dbpass = "...";
        $dbname = "hoel_jamier";
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if (!$conn) {
            echo "<script>alert('Connexion échouée: " . addslashes($conn->connect_error) . "');</script>";
            die("Connection failed: "
                . mysqli_connect_error());
        }
        $sql = "SELECT * FROM messier;";
        $result = $conn->query(($sql))
            ?>
        <table>
            <thead>
                <tr>
                    <th>M</th>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Magnitude</th>
                    <th>RA</th>
                    <th>D</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>M" . htmlspecialchars($row['M']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['type']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['magnitude']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['RA']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['D']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Aucune donnée trouvée</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <button type="button" class="btn" id="add">
            <strong>Edit Art</strong>
            <div id="container-stars">
                <div id="stars"></div>
            </div>

            <div id="glow">
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </button>
        <div id="Modal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Modal Header</h2>
                </div>
                <div class="modal-body">
                    <form action="submit.php">
                        <p>Name: <input type="text" name="name" maxlength=25 required></p>
                        <p>Magnitude: <input type="number" name="magnitude" required></p>
                        <p>Right Ascension: </p>
                        <p>Decliation: </p>
                        <!-- TODO:  RA and D -->
                    </form>
                </div>
                <div class="modal-footer">
                    <h3>Modal Footer</h3>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <p>Made by&ThinSpace;<span id="about" onclick="Onyx()">Onyx</span></p>
    </footer>

    <script src="script.js"></script>
</body>

</html>