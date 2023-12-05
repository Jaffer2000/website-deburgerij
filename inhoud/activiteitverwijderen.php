<?php
// Controleer of het ID is doorgegeven in de URL
if (isset($_GET['id'])) {
    // Gebruik hier jouw bestaande databaseverbinding
    // Zorg ervoor dat je al een geldige $conn hebt

    $id = $_GET['id'];
    
    echo "ID ontvangen: $id"; // Debugging-uitvoer

    // Bereid de verwijderquery voor
    $deleteQuery = "DELETE FROM agenda WHERE id = $id";

    // Voer de query uit
    if ($conn->query($deleteQuery) === TRUE) {
        echo "Activiteit succesvol verwijderd.";
    } else {
        echo "Error: " . $deleteQuery . "<br>" . $conn->error;
    }
} else {
    echo "Ongeldig ID.";
}
?>
