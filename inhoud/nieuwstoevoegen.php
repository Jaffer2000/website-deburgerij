<?php
    include("check_login.php")
?>
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

    <div class="col-sm-12">
    <div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="activiteitnaam">Naam van het nieuwsbericht:</label>
                    <input type="text" class="form-control" name="activiteitnaam" required>
                </div>

                <div class="form-group">
                    <label for="bericht">Beschrijving van het nieuwsbericht:</label>
                    <textarea class="form-control" name="bericht" rows="4" required></textarea>
                </div>

                <div class="form-group">
                    <label for="foto">Foto van het nieuwsbericht:</label>
                    <input type="file" class="form-control-file" name="foto" accept="image/*">
                </div>

                <button class="btn btn-primary" type="submit">Toevoegen</button>

            </form>
        </div>
</div>
    </div>

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