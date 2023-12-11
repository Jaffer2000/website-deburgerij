<script>
    // JavaScript function to navigate to a different page
    function adminterug() {
    var url = "activiteitenoverzicht";
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
        
            <button class="activiteitentoevoegenbutton" onClick="adminterug()">Activiteit overzicht</button>
        
        </div>

    </div>

</div>

<?php
// ID uit de URL halen
$id = $_GET['id'];

// Query om gegevens op te halen op basis van de ID
$sql = "SELECT * FROM agenda WHERE id = $id";
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
    
                <label class="activiteitennaamform" for="datum">Datum van de activiteit:</label><br>
                <input type="date" id="datum"  value="' . $row['datum'] . '" class="datumtoevoegen" name="datum" required> <br><br>
    
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

// Verbinding sluiten
$conn->close();
?>

