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

    <div class="col-sm-2"></div>

    <div class="col-sm-4 opmaakcontactbewerkpagina">

        <form action="" method="post" enctype="multipart/form-data">

            <label class="activiteitennaamform" for="activiteitnaam">Titel 1 veranderen:</label> <br>
            <input type="text" id="titel1" class="contactbewerkform" name="contactbewerkform" value=" <?php echo$titel1;  ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">tekst 1 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst1" class="contactbewerkform" rows="4" required> <?php echo$tekst1;?></textarea> <br><br>
        
        </form>

    </div>

    <div class="col-sm-4 opmaakcontactbewerkpagina">

        <form action="" method="post" enctype="multipart/form-data">
        
            <label class="activiteitennaamform" for="activiteitnaam">Titel 2 veranderen:</label> <br>
            <input type="text" id="titel2" class="contactbewerkform" name="contactbewerkform" value=" <?php echo$titel2;  ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">tekst 2 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst2" class="contactbewerkform" rows="4" required> <?php echo$tekst2;?></textarea> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 1</label> <br>
            <img src="img/<?php echo$img1;?>" alt="foto van activiteit" class="activiteitbewerkenimg"> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 1 veranderen:</label><br>
            <input type="file" id="fotoverhuur"  class="verhuurfotobewerken" name="foto"/> <br><br>

        </form>

    </div>


    <div class="col-sm-2"></div>

</div>

<div class="row">

    <div class="col-sm-2"></div>

    <div class="col-sm-4 opmaakcontactbewerkpagina">

        <form action="" method="post" enctype="multipart/form-data">
    
            <label class="activiteitennaamform" for="activiteitnaam">Titel 3 veranderen:</label> <br>
            <input type="text" id="titel3" class="contactbewerkform" name="contactbewerkform" value=" <?php echo$titel3;  ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">tekst 3 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst3" class="contactbewerkform" rows="4" required> <?php echo$tekst3;?></textarea> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 2</label> <br>
            <img src="img/<?php echo$img2;?>" alt="foto van activiteit" class="activiteitbewerkenimg"> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 2 veranderen:</label><br>
            <input type="file" id="fotoverhuur" class="verhuurfotobewerken" name="foto"/> <br><br>

        </form>

    </div>

    <div class="col-sm-4 opmaakcontactbewerkpagina">

         <form action="" method="post" enctype="multipart/form-data">
            
            <label class="activiteitennaamform" for="activiteitnaam">Titel 4 veranderen:</label> <br>
            <input type="text" id="titel4" class="contactbewerkform" name="contactbewerkform" value=" <?php echo$titel4;  ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">tekst 4 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst4" class="contactbewerkform" rows="4" required> <?php echo$tekst4;?></textarea> <br><br>
        
        </form>

</div>


    <div class="col-sm-2"></div>

</div>

<div class="row">

    <div class="col-sm-2"></div>

    <div class="col-sm-4 opmaakcontactbewerkpagina">

        <form action="" method="post" enctype="multipart/form-data">    

            <label class="activiteitennaamform" for="activiteitnaam">Titel 5 veranderen:</label> <br>
            <input type="text" id="titel5" class="contactbewerkform" name="contactbewerkform" value=" <?php echo$titel5;  ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">Bulletpoints veranderen:</label><br>
            <textarea id="verhuurbulletpoints" name="bullet1" class="verhuurbulletpoints"  required> <?php echo$bullet1;?></textarea> <br><br>
            <textarea id="verhuurbulletpoints" name="bullet2" class="verhuurbulletpoints"  required> <?php echo$bullet2;?></textarea> <br><br>
            <textarea id="verhuurbulletpoints" name="bullet3" class="verhuurbulletpoints"  required> <?php echo$bullet3;?></textarea> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 3</label> <br>
            <img src="img/<?php echo$img3;?>" alt="foto van activiteit" class="activiteitbewerkenimg"> <br><br>

            <label class="activiteitennaamform" for="foto">Foto 3 veranderen:</label><br>
            <input type="file" id="fotoverhuur"  class="verhuurfotobewerken" name="foto"/> <br><br>
        
        </form>

    </div>

    <div class="col-sm-4 opmaakcontactbewerkpagina">

        <form action="" method="post" enctype="multipart/form-data">
                
            <label class="activiteitennaamform" for="activiteitnaam">Titel 6 veranderen:</label> <br>
            <input type="text" id="titel6" class="contactbewerkform" name="contactbewerkform" value=" <?php echo$titel6;  ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">tekst 6 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst6" class="contactbewerkform" rows="4" required> <?php echo$tekst6;?></textarea>
        </form>

</div>


    <div class="col-sm-2"></div>

</div>

<div class="row">

    <div class="col-sm-12 verhuurknopalign">
        <form action="" method="post" enctype="multipart/form-data">
            
            <button class="cmswijzigenknop" type="submit">Bijwerken</button>
        
        </form>

    </div>

</div>
<!-- 
<?php

   // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Update all text values
        $titel1 = $_POST["titel1"];
        $tekst1 = $_POST["tekst1"];

        $titel2 = $_POST["titel2"];
        $tekst2 = $_POST["tekst2"];

        $titel3 = $_POST["titel3"];
        $tekst3 = $_POST["tekst3"];

        $titel4 = $_POST["titel4"];
        $tekst4 = $_POST["bericht"];

        $titel5 = $_POST["titel5"];
        $bullet1 = $_POST["bullet1"];
        $bullet2 = $_POST["bullet2"];
        $bullet3 = $_POST["bullet3"];
        $titel6 = $_POST["titel6"];
        $tekst6 = $_POST["tekst6"];

        // Add validation and sanitization if needed
        $sql = "UPDATE your_table_name SET title='$titel1', text='$tekst1', title='$titel2', text='$tekst2', title='$titel3', text='$tekst3', title='$titel4', text='$tekst4', title='$titel5', bullet1='$bullet1', bullet2='$bullet2', bullet3='$bullet3', title='$titel6', text='$tekst6' WHERE id=1"; // Replace 'id' with your actual primary key column

        $conn->query($sql);

    // Close the database connection
    $conn->close();
}

?> -->