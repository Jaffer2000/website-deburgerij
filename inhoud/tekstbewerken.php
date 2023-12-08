<?php 
// Prepare the query
$query = "SELECT id, titel1, titel2, tekst1, tekst2 FROM homepage";
// Execute the query
$result = $conn->query($query);

// Check if the query was successful
if ($result && $result->num_rows > 0) {
    // Fetch the data from the result set
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $titel1 = $row['titel1'];
        $titel2 = $row['titel2'];
        $tekst1 = $row['tekst1'];
        $tekst2 = $row['tekst2'];
    }
} else {
    echo "Er is geen data gevonden!";
}

// Close the result set
$result->close();
?>

<div class="row">
    <div class="jumbotron contactbackgroundimg" style="background-image: url('img/');">
        <h1 class="headertext ">Tekst bewerken</h1>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="terugbuttonadmin">
            <button class="activiteitentoevoegenbutton" onClick="hometerug()">Home bewerken</button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 overonsbewerkenalign">
        <form action="" method="post" enctype="multipart/form-data">
            <label class="activiteitennaamform" for="activiteitnaam">Titel 1 veranderen:</label> <br>
            <input type="text" id="titel1" class="contactbewerkform" name="titel1"
                value="<?php echo isset($_POST['titel1']) ? htmlspecialchars($_POST['titel1']) : $titel1; ?>" required>
            <br><br>

            <label class="activiteitennaamform" for="bericht">Tekst 1 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst1" class="contactbewerkform" rows="4"
                required><?php echo isset($_POST['tekst1']) ? htmlspecialchars($_POST['tekst1']) : $tekst1; ?></textarea>
            <br><br>

            <label class="activiteitennaamform" for="activiteitnaam">Titel 2 veranderen:</label> <br>
            <input type="text" id="titel2" class="contactbewerkform" name="titel2"
                value="<?php echo isset($_POST['titel2']) ? htmlspecialchars($_POST['titel2']) : $titel2; ?>" required>
            <br><br>

            <label class="activiteitennaamform" for="bericht">Tekst 2 veranderen:</label><br>
            <textarea id="contacttekst" name="tekst2" class="contactbewerkform" rows="4"
                required><?php echo isset($_POST['tekst2']) ? htmlspecialchars($_POST['tekst2']) : $tekst2; ?></textarea>
            <br><br>

            <button class="cmswijzigenknop" type="submit">Bijwerken</button>
        </form>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang gegevens van het formulier
    $titel1 = $_POST['titel1'];
    $tekst1 = $_POST['tekst1'];
    $titel2 = $_POST['titel2'];
    $tekst2 = $_POST['tekst2'];

    // Update query
    $query = "UPDATE homepage SET 
               titel1 = '$titel1', tekst1 = '$tekst1',
               titel2 = '$titel2', tekst2 = '$tekst2'
               WHERE id = $id"; // Verander '1' met de juiste id waarde

    // After successful update
    if ($conn->query($query) === TRUE) {
        // Set values to session variables for later use
        $_SESSION['updated_titel1'] = $titel1;
        $_SESSION['updated_tekst1'] = $tekst1;
        $_SESSION['updated_titel2'] = $titel2;
        $_SESSION['updated_tekst2'] = $tekst2;

        // Display alert
        echo "<script>alert('Pagina succesvol bijgewerkt!')</script>";
    }
}
?>

<script>
function hometerug() {
    var url = "homepagebewerken";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}
</script>