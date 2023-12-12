<script>
    // JavaScript function to navigate to a different page
    function adminterug() {
    var url = "paginabewerkenoverzicht";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}
</script>

<?php 
    // Prepare the query
    $query = "SELECT id, titel1, tekst1, titel2, tekst2, titel3, tekst3, titel4, tekst4, titel5, Bullet1, Bullet2, Bullet3, titel6, tekst6, img1, img2, img3, img4 FROM verhuur ";

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

            $titel5 = $row['titel5'];
            $bullet1 = $row['Bullet1'];
            $bullet2 = $row['Bullet2'];
            $bullet3 = $row['Bullet3'];

            $titel6 = $row['titel6'];
            $tekst6 = $row['tekst6'];

            $img1 = $row['img1'];
            $img2 = $row['img2'];
            $img3 = $row['img3'];
               
        }
    } else {
        echo "Der is geen data gevonden!";
    }

    // Close the result set
    $result->close();
?>

<div class="row">

    <div class="jumbotron contactbackgroundimg" style="background-image: url('img/');">
        <h1 class="headertext">Verhuur bijwerken</h1>
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

    <div class="col-sm-4 opmaakcontactbewerkpagina">

        <form action="" method="post" enctype="multipart/form-data">

            <label class="activiteitennaamform" for="activiteitnaam">Titel 1 veranderen:</label> <br>
            <input type="text" id="titel1" class="contactbewerkform" name="titel1" value=" <?php echo$titel1;  ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">tekst 1 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst1" class="contactbewerkform" rows="4" required> <?php echo$tekst1;?></textarea> <br><br>

            <label class="activiteitennaamform" for="activiteitnaam">Titel 2 veranderen:</label> <br>
            <input type="text" id="titel2" class="contactbewerkform" name="titel2" value=" <?php echo$titel2;  ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">tekst 2 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst2" class="contactbewerkform" name="tekst2" rows="4" required> <?php echo$tekst2;?></textarea> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 1</label> <br>
            <img src="img/<?php echo$img1;?>" alt="foto van activiteit" class="activiteitbewerkenimg"> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 1 veranderen:</label><br>
            <input type="file" id="foto1" class="verhuurfotobewerken" name="foto1"/> <br><br>

            <label class="activiteitennaamform" for="activiteitnaam">Titel 3 veranderen:</label> <br>
            <input type="text" id="titel3" class="contactbewerkform" name="titel3" value=" <?php echo$titel3;  ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">tekst 3 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst3" class="contactbewerkform" name="contacttekst" rows="4" required> <?php echo$tekst3;?></textarea> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 2</label> <br>
            <img src="img/<?php echo$img2;?>" alt="foto van activiteit" class="activiteitbewerkenimg"> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 2 veranderen:</label><br>
            <input type="file" id="foto2" class="verhuurfotobewerken" name="foto2"/> <br><br>

            <label class="activiteitennaamform" for="activiteitnaam">Titel 4 veranderen:</label> <br>
            <input type="text" id="titel4" class="contactbewerkform" name="titel4" value=" <?php echo$titel4;  ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">tekst 4 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst4" class="contactbewerkform" rows="4" required> <?php echo$tekst4;?></textarea> <br><br>

            <label class="activiteitennaamform" for="activiteitnaam">Titel 5 veranderen:</label> <br>
            <input type="text" id="titel5" class="contactbewerkform" name="titel5" value=" <?php echo$titel5;  ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">Bulletpoints veranderen:</label><br>
            <textarea id="verhuurbulletpoints" name="bullet1" class="verhuurbulletpoints"  required> <?php echo$bullet1;?></textarea> <br><br>
            <textarea id="verhuurbulletpoints" name="bullet2" class="verhuurbulletpoints"  required> <?php echo$bullet2;?></textarea> <br><br>
            <textarea id="verhuurbulletpoints" name="bullet3" class="verhuurbulletpoints"  required> <?php echo$bullet3;?></textarea> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 3</label> <br>
            <img src="img/<?php echo$img3;?>" alt="foto van activiteit" class="activiteitbewerkenimg"> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 3 veranderen:</label><br>
            <input type="file" id="foto3" class="verhuurfotobewerken" name="foto3"/> <br><br>

            <label class="activiteitennaamform" for="activiteitnaam">Titel 6 veranderen:</label> <br>
            <input type="text" id="titel6" class="contactbewerkform" name="titel6" value=" <?php echo$titel6;  ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">tekst 6 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst6" class="contactbewerkform" name="tekst6" rows="4" required> <?php echo$tekst6;?></textarea> <br><br>

            <input type="hidden" name="foto1_old" value="<?php echo $img1; ?>">
            <input type="hidden" name="foto2_old" value="<?php echo $img2; ?>">
            <input type="hidden" name="foto3_old" value="<?php echo $img3; ?>">


            <button class="cmswijzigenknop" type="submit">Bijwerken</button>
        
        
        </form>

    </div>

    <div class="col-sm-4 opmaakcontactbewerkpagina"></div>

</div>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verwerk de formuliergegevens
    // Verwerk de formuliergegevens
$titel1 = $_POST['titel1'];
$tekst1 = $_POST['tekst1'];
$titel2 = $_POST['titel2'];
$tekst2 = $_POST['tekst2'];
$titel3 = $_POST['titel3'];
$tekst3 = $_POST['tekst3'];
$titel4 = $_POST['titel4'];
$tekst4 = $_POST['tekst4'];
$titel5 = $_POST['titel5'];
$bullet1 = $_POST['bullet1'];
$bullet2 = $_POST['bullet2'];
$bullet3 = $_POST['bullet3'];
$tekst6 = $_POST['tekst6'];


    // Update query
    $update_query = "UPDATE verhuur SET 
    titel1 = '$titel1', tekst1 = '$tekst1',
    titel2 = '$titel2', tekst2 = '$tekst2',
    titel3 = '$titel3', tekst3 = '$tekst3',
    titel4 = '$titel4', tekst4 = '$tekst4',
    titel5 = '$titel5', bullet1 = '$bullet1', bullet2 = '$bullet2', bullet3 = '$bullet3',
    tekst6 = '$tekst6'";


    // Loop through each photo and handle it
    for ($i = 1; $i <= 3; $i++) { // Verander naar 3 omdat je maar 3 foto's hebt
        $foto_old = $_POST["foto{$i}_old"];

        // Optioneel: Verwerk het uploaden van de nieuwe foto
        if ($_FILES["foto{$i}"]['size'] > 0) {
            $foto_naam = $_FILES["foto{$i}"]['name'];
            $foto_tmp = $_FILES["foto{$i}"]['tmp_name'];
            move_uploaded_file($foto_tmp, "img/" . $foto_naam);

            // Voeg de foto-naam toe aan de update query
            $update_query .= ", img{$i} = '$foto_naam'";
        } else {
            // Geen nieuwe foto geüpload, behoud de oude foto-naam
            $update_query .= ", img{$i} = '$foto_old'";
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