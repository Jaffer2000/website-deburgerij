<script>
    // JavaScript function to navigate to a different page
    function adminterug() {
    var url = "admin";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}
</script>

<div class="row">

    <div class="jumbotron contactbackgroundimg"
        style="background-image: url('img/');">
        <h1 class="headertext">Activiteiten bijwerken</h1>
    </div>

</div>

<div class="row">

    <div class="col-sm-12">

        <div class="terugbuttonadmin">
        
            <button class="activiteitentoevoegenbutton" onClick="adminterug()">Adminoverzicht</button>
        
        </div>

    </div>

</div>

<div class="row borderclass">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form is submitted

    // Verkrijg de gegevens van het formulier
    $activiteitId = $_POST['activiteitId']; // Voeg een verborgen veld toe in het formulier om de activiteit-ID te behouden
    $nieuweTitel = $_POST['activiteitnaam'];
    $nieuweDatum = $_POST['datum'];
    $nieuweTekst = $_POST['bericht'];
    
    // Upload nieuwe foto als deze is geselecteerd
    $fotoNaam = '';

    if ($_FILES['foto']['size'] > 0) {
        $fotoMime = mime_content_type($_FILES['foto']['tmp_name']);
        
        if ($fotoMime == 'image/jpeg' || $fotoMime == 'image/png' || $fotoMime == 'image/gif') {
            // Het is een geldig afbeeldingstype, verwerk de upload
            $fotoNaam = $_FILES['foto']['name'];
            $fotoPad = 'img/' . $fotoNaam;
    
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $fotoPad)) {
                echo '<script>alert("Afbeelding succesvol geüpload.");</script>';
            } else {
                echo '<script>alert("Fout bij het verplaatsen van het bestand.");</script>';
            }
        } else {
            echo '<script>alert("Ongeldig bestandstype. Alleen JPG, PNG en GIF zijn toegestaan.");</script>';
        }
    } else {
        echo '<script>alert("Geen afbeelding geüpload.");</script>';
    }
    
    // Controleer of $fotoNaam is ingesteld voordat je het gebruikt
    if (!empty($fotoNaam)) {
        // Voer de code uit die $fotoNaam gebruikt
    } else {
        // Doe iets anders of geef een foutmelding weer
        echo '<script>alert("Fout bij het uploaden van de afbeelding.");</script>';
    }
    
    // Voorbereid de update-query
    $updateQuery = "UPDATE agenda SET titel = '$nieuweTitel', datum = '$nieuweDatum', tekst = '$nieuweTekst', foto = '$fotoNaam' WHERE id = $activiteitId";

    // Voer de update-query uit
    if ($conn->query($updateQuery) === TRUE) {
        echo '<script>alert("Activiteit bijgewerkt!");</script>';
    } else {
        echo '<script>alert("Fout bijwerken activiteit: ' . $conn->error . '");</script>';
    }
}

// Prepare the select query
$selectQuery = "SELECT id, titel, tekst, foto, datum FROM agenda";

// Execute the select query
$result = $conn->query($selectQuery);

// Check if the query was successful
if ($result && $result->num_rows > 0) {
    // Fetch the data from the result set
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $titel = $row['titel'];
        $tekst = $row['tekst'];
        $foto = $row['foto'];
        $datum = $row['datum'];

        // Formulier voor elke rij met col-sm-6
        echo '
        <div class="col-12 col-sm-6 col-md-6">
        <div class="overzichtopmaak">
            <form action="" method="post" enctype="multipart/form-data" class="formwidth">
                <input type="hidden" name="activiteitId" value="' . $id . '">
                <input type="hidden" name="huidigeFoto" value="' . $foto . '">

                <label class="activiteitennaamform" for="activiteitnaam">Naam veranderen:</label> <br>
                <input type="text" id="activiteitnaam" name="activiteitnaam" value="' . $titel . '" required> <br><br>

                <label class="activiteitennaamform" for="datum">Datum veranderen:</label><br>
                <input type="date" id="datum" name="datum" value="' . $datum . '" required> <br><br>

                <label class="activiteitennaamform" for="bericht">Beschrijving veranderen:</label><br>
                <textarea id="bericht" name="bericht" rows="4" required>' . $tekst . '</textarea> <br><br>


                <label class="activiteitennaamform" for="foto">Huidige foto</label> <br>
                <img src="img/' . $foto . '" alt="foto van activiteit" class="activiteitbewerkenimg"> <br><br>

                <label class="activiteitennaamform" for="foto">Foto veranderen:</label><br>
                <input type="file" id="foto" name="foto"/> <br><br>

                <button class="activiteitentoevoegenbutton" type="submit">Bijwerken</button>
            </form>
        </div>
        </div>
        ';
    }
} else {
    echo "Er is geen data gevonden!";
}

// Close the result set
$result->close();
?>

</div>

