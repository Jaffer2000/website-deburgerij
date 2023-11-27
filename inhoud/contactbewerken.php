<script>
    // JavaScript function to navigate to a different page
    function adminterug() {
    var url = "paginabewerkenoverzicht";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}
</script>

<?php 

    // Prepare the query
    $query = "SELECT id, titel, tekst FROM contact";

    // Execute the query
    $result = $conn->query($query);

    // Check if the query was successful
    if ($result && $result->num_rows > 0) {
        // Fetch the data from the result set
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $titel = $row['titel'];
            $tekst = $row['tekst'];
                
        }
    } else {
        echo "Der is geen data gevonden!";
    }

        // Close the result set
        $result->close();
?>

<div class="row">

    <div class="jumbotron contactbackgroundimg"
        style="background-image: url('img/');">
        <h1 class="headertext">Contact bijwerken</h1>
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

            <label class="activiteitennaamform" for="activiteitnaam">Titel veranderen:</label> <br>
            <input type="text" id="titelbewerkcontact" class="contactbewerkform" name="contactbewerkform" value=" <?php echo$titel;  ?>" required> <br><br>

            <label class="activiteitennaamform" for="bericht">Tekst veranderen:</label><br>
            <textarea id="contacttekst" name="bericht" class="contactbewerkform" rows="4" required> <?php echo$tekst;?></textarea> <br><br>

            <button class="cmswijzigenknop" type="submit">Bijwerken</button>

        </form>

    </div>

    <div class="col-sm-4"></div>

</div>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haal de waarden op die zijn ingediend via het formulier
    $updateid = 1; // Je hebt hier hardcoded $updateid = 1 gebruikt, zorg ervoor dat dit de juiste waarde is afhankelijk van je use case
    $nieuwe_titel = $_POST['activiteitnaam'];
    $nieuwe_tekst = $_POST['contacttekst'];

    // SQL UPDATE-query
    $update_query = "UPDATE contact SET tekst = '$nieuwe_tekst', titel = '$nieuwe_titel' WHERE id = '$updateid'";

    // Voer de query uit
    if ($conn->query($update_query) === TRUE) {
        echo "<script>alert('Wijzigingen zijn succesvol toegevoegd')</script>";
    } else {
        echo "Fout bijwerken record: " . $conn->error;
    }
}
?>