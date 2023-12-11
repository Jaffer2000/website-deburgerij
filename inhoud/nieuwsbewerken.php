<script>
    // JavaScript function to navigate to a different page
    function adminterug() {
    var url = "nieuwsoverzicht";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}
</script>
<div class="row">

    <div class="jumbotron contactbackgroundimg"
        style="background-image: url('img/');">
        <h1 class="headertext">Activiteit bewerken</h1>
    </div>

</div>

<div class="row">

    <div class="col-sm-12">

        <div class="terugbuttonadmin">
        
            <button class="activiteitentoevoegenbutton" onClick="adminterug()">Nieuws overzicht</button>
        
        </div>

    </div>

</div>

<?php
// ID uit de URL halen
$id = $_GET['id'];

// Query om gegevens op te halen op basis van de ID
$sql = "SELECT * FROM actueel WHERE id = $id";
$result = $conn->query($sql);

// Controleren op fouten in de query
if (!$result) {
    die("Query mislukt: " . $conn->error);
}

// Controleren of er resultaten zijn
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
   
    echo '
    <div class="row">
        <div class="col-sm-12 activiteitenformulieraligncenter">
            <form action="" method="post" enctype="multipart/form-data">
                <label class="activiteitennaamform" for="activiteitnaam">Naam van de activiteit:</label> <br>
                <input type="text" id="activiteitnaam" value="' . $row['titel'] . '" class="activiteitnaamtoevoegen" name="activiteitnaam" required> <br><br>
    
                <label class="activiteitennaamform" for="bericht">Beschrijving van de activiteit:</label><br>
                <textarea id="bericht" class="berichttoevoegen"  name="bericht" rows="4" required>' . $row['tekst'] . '</textarea> <br><br>
    
                <label class="activiteitennaamform" for="foto">Huidige foto:</label><br>
                <img src="img/' . $row['foto'] .  '" class="activiteitbewerkenimg" alt="foto"><br><br>

                <label class="activiteitennaamform " id="" for="foto">Foto voor de activiteit:</label><br>
                <input type="file" id="foto" class="fototoevoegen" name="foto" accept="image/*"> <br><br>
    
                <div class="buttoncenter">
                    <button class="oranjebutton" type="submit">Toevoegen</button>
                </div>
            </form>
        </div>
    </div>';

} else {
    echo "Geen resultaten gevonden voor ID: $id";
}
  // Update query uitvoeren
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verwerk de formuliergegevens
    $activiteitnaam = $_POST['activiteitnaam'];
    $datum = $_POST['datum'];
    $bericht = $_POST['bericht'];

    // Update query
    $update_query = "UPDATE actueel
                    SET titel = '$activiteitnaam', date_added = '$datum', tekst = '$bericht'
                    WHERE id = $id;";

    // Optioneel: Verwerk het uploaden van de nieuwe foto
    if ($_FILES['foto']['size'] > 0) {
        $foto_naam = $_FILES['foto']['name'];
        $foto_tmp = $_FILES['foto']['tmp_name'];
        move_uploaded_file($foto_tmp, "img/" . $foto_naam);

        // Voeg de foto-naam toe aan de update query
        $update_query = "UPDATE actueel
                        SET titel = '$activiteitnaam', date_added = '$datum', tekst = '$bericht', foto = '$foto_naam'
                        WHERE id = $id;";
    }

    // Update query uitvoeren
    if ($conn->query($update_query) === TRUE) {
        echo "<script>alert(\"Het nieuwsartikel is succesvol veranderd!\")</script>";
    } else {
        echo "Fout bijwerken record: " . $conn->error;
    }
} else {
echo "Geen resultaten gevonden voor ID: $id";
}

// Verbinding sluiten
$conn->close();

?>

