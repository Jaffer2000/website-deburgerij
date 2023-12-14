<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Inloggen
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="username">Gebruikersnaam:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Wachtwoord:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Inloggen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang gebruikersinvoer
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Voorbereiden van de SQL-query met een prepared statement
    $sql = "SELECT * FROM login WHERE gebruikersnaam=? AND wachtwoord=?";
    $stmt = $conn->prepare($sql);

    // Bind parameters aan de prepared statement
    $stmt->bind_param("ss", $username, $password);

    // Uitvoeren van de prepared statement
    $stmt->execute();

    // Ophalen van het resultaat
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Gebruikersnaam en wachtwoord zijn geldig
        $_SESSION["ingelogd"] = true; // Zet de sessievariabele op true

        // Geef een JavaScript alert weer
        echo '<script>alert("Inloggen gelukt!");</script>';

        // Stuur de gebruiker door naar de 'admin'-pagina
        echo '<script>window.location.href = "admin.php";</script>';
        exit(); // Zorg ervoor dat het script stopt om door te gaan naar de 'admin'-pagina
    } else {
        // Gebruikersnaam of wachtwoord is ongeldig
        echo '<script>alert("Ongeldige gebruikersnaam of wachtwoord");</script>';
    }

    // Sluit de prepared statement
    $stmt->close();
}

// Sluit de databaseverbinding
$conn->close();


?>