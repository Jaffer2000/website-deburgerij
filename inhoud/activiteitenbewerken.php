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

<div class="row">
    <?php

    // Prepare the query
    $query = "SELECT id, titel, tekst, foto, datum FROM agenda";

    // Execute the query
    $result = $conn->query($query);

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
            <div class="col-sm-6 overzichtopmaak">
                <form action="" method="post" enctype="multipart/form-data" class="formwidth">
                    <label class="activiteitennaamform" for="activiteitnaam">Naam veranderen:</label> <br>
                    <input type="text" id="activiteitnaam" name="activiteitnaam" value="' . $titel . '" required> <br><br>

                    <label class="activiteitennaamform" for="datum">Datum veranderen:</label><br>
                    <input type="date" id="datum" name="datum" value="' . $datum . '" required> <br><br>

                    <label class="activiteitennaamform" for="bericht">Beschrijving veranderen:</label><br>
                    <textarea id="bericht" name="bericht" rows="4" required>' . $tekst . '</textarea> <br><br>

                    <label class="activiteitennaamform" for="foto">Huidige foto</label> <br>
                    <img src="img/' . $foto . '" alt="foto van activiteit" class="activiteitbewerkenimg"> <br><br>

                    <label class="activiteitennaamform" for="foto">Foto veranderen:</label><br>
                    <input type="file" id="foto" name="foto" accept="image/*"> <br><br>

                    <button class="activiteitentoevoegenbutton" type="submit">Bijwerken</button>
                </form>
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
