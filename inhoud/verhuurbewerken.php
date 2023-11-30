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

            $img1 = $row['img2'];
            $img2 = $row['img3'];
            $img3 = $row['img4'];
               
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

            <button class="cmswijzigenknop" type="submit">Bijwerken</button>
        
        
        </form>

    </div>

    <div class="col-sm-4 opmaakcontactbewerkpagina"></div>

</div>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update query for text fields
    $updateTextQuery = "UPDATE verhuur SET 
    titel1 = '" . $_POST['titel1'] . "',
    tekst1 = '" . $_POST['tekst1'] . "',
    titel2 = '" . $_POST['titel2'] . "',
    tekst2 = '" . $_POST['tekst2'] . "',
    titel3 = '" . $_POST['titel3'] . "',
    tekst3 = '" . $_POST['tekst3'] . "',
    titel4 = '" . $_POST['titel4'] . "',
    tekst4 = '" . $_POST['tekst4'] . "',
    titel5 = '" . $_POST['titel5'] . "',
    bullet1 = '" . $_POST['bullet1'] . "',
    bullet2 = '" . $_POST['bullet2'] . "',
    bullet3 = '" . $_POST['bullet3'] . "',
    titel6 = '" . $_POST['titel6'] . "',
    tekst6 = '" . $_POST['tekst6'] . "'
    WHERE id = $id";

    if ($conn->query($updateTextQuery) === TRUE) {
    // Text fields updated successfully

    // Now, let's handle the image uploads
    $targetDir = "img/";

    // Update this based on your actual field names for the images
    $img1Field = 'foto1';
    $img2Field = 'foto2';
    $img3Field = 'foto3';

    // Update Image 1
    if ($_FILES[$img1Field]['name'] != "") {
        $img1FileName = basename($_FILES[$img1Field]['name']);
        $targetFilePath1 = $targetDir . $img1FileName;
        move_uploaded_file($_FILES[$img1Field]['tmp_name'], $targetFilePath1);

        // Update the database with the new image filename
        $conn->query("UPDATE activiteiten SET foto1 = '$img1FileName' WHERE id = $id");
    }

    // Update Image 2
    if ($_FILES[$img2Field]['name'] != "") {
        $img2FileName = basename($_FILES[$img2Field]['name']);
        $targetFilePath2 = $targetDir . $img2FileName;
        move_uploaded_file($_FILES[$img2Field]['tmp_name'], $targetFilePath2);

        // Update the database with the new image filename
        $conn->query("UPDATE activiteiten SET foto2 = '$img2FileName' WHERE id = $id");
    }

    // Update Image 3
    if ($_FILES[$img3Field]['name'] != "") {
        $img3FileName = basename($_FILES[$img3Field]['name']);
        $targetFilePath3 = $targetDir . $img3FileName;
        move_uploaded_file($_FILES[$img3Field]['tmp_name'], $targetFilePath3);

        // Update the database with the new image filename
        $conn->query("UPDATE activiteiten SET foto3 = '$img3FileName' WHERE id = $id");
    }

    echo "Records updated successfully";
    } else {
        echo "Error updating records: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

?>