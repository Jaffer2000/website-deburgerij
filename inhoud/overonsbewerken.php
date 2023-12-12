<script>
    // JavaScript function to navigate to a different page
    function adminterug() {
    var url = "paginabewerkenoverzicht";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}
</script>

<?php 
    // Prepare the query
    $query = "SELECT id, titel1, tekst1, titel2, tekst2, titel3, tekst3, titel4, tekst4, foto1, foto2, foto3, foto4, foto5 FROM overons ";

    // Execute the query
    $result = $conn->query($query);

    // Check if the query was successful
    if ($result && $result->num_rows > 0) {
        // Fetch the data from the result set
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $titel1 = $row['titel1'];
            $tekst1 = $row['tekst1'];

            $titel2 = $row['titel2'];
            $tekst2 = $row['tekst2'];

            $titel3 = $row['titel3'];
            $tekst3 = $row['tekst3'];

            $titel4 = $row['titel4'];
            $tekst4 = $row['tekst4'];

            $backgroundImagePath = $row['foto5'];
            $foto1 = $row['foto1'];
            $foto2 = $row['foto2'];
            $foto3 = $row['foto3'];
            $foto4 = $row['foto4'];
               
        }
    } else {
        echo "Der is geen data gevonden!";
    }

    // Close the result set
    $result->close();
?>

<div class="row">

    <div class="jumbotron contactbackgroundimg" style="background-image: url('img/');">
        <h1 class="headertext">Over ons bijwerken</h1>
    </div>

</div>

<div class="row">

    <div class="col-sm-12">

        <div class="terugbuttonadmin">
        
            <button class="activiteitentoevoegenbutton" onClick="adminterug()">Pagina overzicht</button>

        </div>

    </div>

</div>

<div class="row">

    <div class="col-sm-4"></div>

    <div class="col-sm-4 overonsbewerkenalign">

        <form action="" method="post" enctype="multipart/form-data">
        
            <label class="activiteitennaamform" for="activiteitnaam">Titel 1 veranderen:</label> <br>
            <input type="text" id="titel1" class="contactbewerkform" name="titel1" value="<?php echo $titel1; ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">tekst 1 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst1" class="contactbewerkform" rows="4" required> <?php echo$tekst1;?></textarea> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 1</label> <br>
            <img src="img/<?php echo$foto1;?>" alt="foto van activiteit" class="activiteitbewerkenimg"> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 1 veranderen:</label><br>
            <input type="hidden" name="foto1_old" value="<?php echo $foto1; ?>">
            <input type="file" id="foto1"  class="verhuurfotobewerken" name="foto1"/> <br><br>

            <label class="activiteitennaamform" for="activiteitnaam">Titel 2 veranderen:</label> <br>
            <input type="text" id="titel2" class="contactbewerkform" name="titel2" value="<?php echo $titel2; ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">tekst 2 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst2" class="contactbewerkform" rows="4" required> <?php echo$tekst2;?></textarea> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 2</label> <br>
            <img src="img/<?php echo$foto2;?>" alt="foto van activiteit" class="activiteitbewerkenimg"> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 2 veranderen:</label><br>
            <input type="hidden" name="foto2_old" value="<?php echo $foto1; ?>">
            <input type="file" id="foto2"  class="verhuurfotobewerken" name="foto2"/> <br><br>

            <label class="activiteitennaamform" for="activiteitnaam">Titel 3 veranderen:</label> <br>
            <input type="text" id="titel3" class="contactbewerkform" name="titel3" value="<?php echo $titel3; ?>" required> <br><br>


            <label class="activiteitennaamform" for="bericht">tekst 3 veranderen (Lees meer knop):</label><br>
            <textarea id="tekst3" name="tekst3" class="contactbewerkform" rows="4" required> <?php echo$tekst3;?></textarea> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 3</label> <br>
            <img src="img/<?php echo$foto3;?>" alt="foto van activiteit" class="activiteitbewerkenimg"> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 3 veranderen:</label><br>
            <input type="hidden" name="foto3_old" value="<?php echo $foto1; ?>">
            <input type="file" id="foto3"  class="verhuurfotobewerken" name="foto3"/> <br><br>

            <label class="activiteitennaamform" for="activiteitnaam">Titel 4 veranderen:</label> <br>
            <input type="text" id="titel4" class="contactbewerkform" name="titel4" value="<?php echo $titel4; ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">tekst 4 veranderen:</label><br>
            <textarea id="tekst4" name="tekst4" class="contactbewerkform" rows="4" required> <?php echo$tekst4;?></textarea> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 4</label> <br>
            <img src="img/<?php echo$foto4;?>" alt="foto van activiteit" class="activiteitbewerkenimg"> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 4 veranderen:</label><br>
            <input type="hidden" name="foto4_old" value="<?php echo $foto1; ?>">
            <input type="file" id="fotoverhuur"  class="verhuurfotobewerken" name="foto4"/> <br><br>

            <button class="cmswijzigenknop" type="submit">Bijwerken</button>

        </form>

    </div>

    <div class="col-sm-4"></div>

</div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verwerk de formuliergegevens
    $titel1 = $_POST['titel1'];
    $tekst1 = $_POST['tekst1'];
    $titel2 = $_POST['titel2'];
    $tekst2 = $_POST['tekst2'];
    $titel3 = $_POST['titel3'];
    $tekst3 = $_POST['tekst3'];
    $titel4 = $_POST['titel4'];
    $tekst4 = $_POST['tekst4'];

    // Update query
    $update_query = "UPDATE overons SET 
    titel1 = '$titel1', tekst1 = '$tekst1',
    titel2 = '$titel2', tekst2 = '$tekst2',
    titel3 = '$titel3', tekst3 = '$tekst3',
    titel4 = '$titel4', tekst4 = '$tekst4'";

    // Loop through each photo and handle it
    for ($i = 1; $i <= 4; $i++) {
        $foto_old = $_POST["foto{$i}_old"];

        // Optioneel: Verwerk het uploaden van de nieuwe foto
        if ($_FILES["foto{$i}"]['size'] > 0) {
            $foto_naam = $_FILES["foto{$i}"]['name'];
            $foto_tmp = $_FILES["foto{$i}"]['tmp_name'];
            move_uploaded_file($foto_tmp, "img/" . $foto_naam);

            // Voeg de foto-naam toe aan de update query
            $update_query .= ", foto{$i} = '$foto_naam'";
        } else {
            // Geen nieuwe foto geüpload, behoud de oude foto-naam
            $update_query .= ", foto{$i} = '$foto_old'";
        }
    }

    $update_query .= " WHERE id = $id";

    // Update query uitvoeren
    if ($conn->query($update_query) === TRUE) {
        echo "<script>alert(\"De pagina is succesvol bijgewerkt!\")</script>";
    } else {
        echo "Fout, pagina niet kunnen bijwerken: " . $conn->error;
    }
}
?>