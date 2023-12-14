<?php
    include("check_login.php")
?>
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

    <div class="container mt-4">
    <form action="" method="post" enctype="multipart/form-data">

        <!-- Section for Titel 1 -->
        <div class="form-group">
            <label for="titel1">Titel 1 veranderen:</label><br>
            <input type="text" id="titel1" class="form-control" name="titel1" value="<?php echo $titel1; ?>" required>
        </div>

        <div class="form-group">
            <label for="tekst1">Tekst 1 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst1" class="form-control" rows="4" required><?php echo $tekst1; ?></textarea>
        </div>

        <div class="form-group">
            <label for="foto1">Foto 1</label><br>
            <img src="img/<?php echo $img1; ?>" alt="foto van activiteit" class="img-fluid activiteitbewerkenimg"><br><br>
        </div>

        <div class="form-group">
            <label for="foto1">Foto 1 veranderen:</label><br>
            <input type="file" id="foto1" class="form-control-file verhuurfotobewerken" name="foto1"/><br><br>
        </div>

        <!-- Section for Titel 2 -->
        <div class="form-group">
            <label for="titel2">Titel 2 veranderen:</label><br>
            <input type="text" id="titel2" class="form-control" name="titel2" value="<?php echo $titel2; ?>" required>
        </div>

        <div class="form-group">
            <label for="tekst2">Tekst 2 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst2" class="form-control" rows="4" required><?php echo $tekst2; ?></textarea>
        </div>

        <div class="form-group">
            <label for="foto2">Foto 2</label><br>
            <img src="img/<?php echo $img2; ?>" alt="foto van activiteit" class="img-fluid activiteitbewerkenimg"><br><br>
        </div>

        <div class="form-group">
            <label for="foto2">Foto 2 veranderen:</label><br>
            <input type="file" id="foto2" class="form-control-file verhuurfotobewerken" name="foto2"/><br><br>
        </div>

        <!-- Section for Titel 3 -->
        <div class="form-group">
            <label for="titel3">Titel 3 veranderen:</label><br>
            <input type="text" id="titel3" class="form-control" name="titel3" value="<?php echo $titel3; ?>" required>
        </div>

        <div class="form-group">
            <label for="tekst3">Tekst 3 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst3" class="form-control" rows="4" required><?php echo $tekst3; ?></textarea>
        </div>

        <div class="form-group">
            <label for="foto3">Foto 3</label><br>
            <img src="img/<?php echo $img3; ?>" alt="foto van activiteit" class="img-fluid activiteitbewerkenimg"><br><br>
        </div>

        <div class="form-group">
            <label for="foto3">Foto 3 veranderen:</label><br>
            <input type="file" id="foto3" class="form-control-file verhuurfotobewerken" name="foto3"/><br><br>
        </div>

        <!-- Section for Titel 4 -->
        <div class="form-group">
            <label for="titel4">Titel 4 veranderen:</label><br>
            <input type="text" id="titel4" class="form-control" name="titel4" value="<?php echo $titel4; ?>" required>
        </div>

        <div class="form-group">
            <label for="tekst4">Tekst 4 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst4" class="form-control" rows="4" required><?php echo $tekst4; ?></textarea>
        </div>

        <input type="hidden" name="foto1_old" value="<?php echo $img1; ?>">
        <input type="hidden" name="foto2_old" value="<?php echo $img2; ?>">
        <input type="hidden" name="foto3_old" value="<?php echo $img3; ?>">

        <button class="btn btn-primary cmswijzigenknop" type="submit">Bijwerken</button>
    </form>
</div>


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