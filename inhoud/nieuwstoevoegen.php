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
        <h1 class="headertext ">Nieuws toevoegen</h1>
    </div>

</div>

<div class="row">

    <div class="col-sm-12">

        <div class="terugbuttonadmin">
        
            <button class="activiteitentoevoegenbutton" onClick="adminterug()">Adminoverzicht</button>
        
        </div>

    </div>

</div>

<div class="row">

    <div class="col-sm-12 activiteitenformulieraligncenter">

    <form action="" method="post" enctype="multipart/form-data">
        <label class="activiteitennaamform" for="activiteitnaam">Naam van het nieuwsbericht:</label> <br>
        <input type="text" id="activiteitnaam" class="activiteitnaamnieuwstoevoegen" name="activiteitnaam" required> <br><br>

        <label class="activiteitennaamform" for="bericht">Beschrijving van het nieuwsbericht:</label><br>
        <textarea id="bericht" class="berichtnieuwstoevoegen" name="bericht" rows="4" required></textarea> <br><br>

        <label class="activiteitennaamform" for="foto">Foto van het nieuwsbericht:</label><br>
        <input type="file" id="foto" class="fotonieuwstoevoegen" name="foto" accept="image/*"> <br><br>

        <button class="activiteitentoevoegenbutton" type="submit">Toevoegen</button>
    </form>

    </div>

</div>

<?php

    // Controleren of het formulier is ingediend
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gegevens van het formulier ophalen
    $activiteitnaam = isset($_POST['activiteitnaam']) ? $_POST['activiteitnaam'] : '';
    $datum = isset($_POST['datum']) ? $_POST['datum'] : '';
    $bericht = isset($_POST['bericht']) ? $_POST['bericht'] : '';

    // Afbeelding uploaden (indien gewenst)
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $foto = $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], "img/" . $foto);
    } else {
        $foto = null; // Of een standaardafbeelding toewijzen als er geen foto is geüpload
    }

    // Controleren of ten minste één veld is ingevuld
    if (!empty($activiteitnaam) || !empty($datum) || !empty($bericht) || !empty($foto)) {
        // SQL-query voor het invoegen van gegevens
        $sql = "INSERT INTO actueel (titel, tekst, foto, date_added) VALUES ('$activiteitnaam', '$bericht ','$foto', '$datum')";

        // Query uitvoeren
        if ($conn->query($sql) === TRUE) {
            echo "Nieuwsbericht succesvol toegevoegd!";
            var_dump($foto);
        } else {
            echo "Fout bij het toevoegen van het nieuwsbericht: " . $conn->error;
        }
    } else {
        echo "Vul ten minste één veld in voordat je het formulier indient.";
    }
}

// Verbinding sluiten
$conn->close();

?>