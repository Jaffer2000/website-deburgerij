<?php
    include("check_login.php")
?>
<script>
    // JavaScript function to navigate to a different page
    function adminterug() {
    var url = "homepagebewerken";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}
</script>
<div class="row">
    <div class="jumbotron contactbackgroundimg" style="background-image: url('img/');">
        <h1 class="headertext ">Slider toevoegen</h1>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="terugbuttonadmin">
            <button class="activiteitentoevoegenbutton" onClick="adminterug()">Pagina overzicht</button>
        </div>
    </div>
</div>

<div class="container mt-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Formulier</h5>
      
      <form method="post" enctype="multipart/form-data" action="">
        <div class="form-group">
          <label for="titel">Titel</label>
          <input type="text" class="form-control" name="titel" id="titel" placeholder="Voer de titel in">
        </div>

        <div class="form-group">
          <label for="tekst">Tekst</label>
          <textarea class="form-control" id="tekst" rows="3"  name="tekst"placeholder="Voer de tekst in"></textarea>
        </div>

        <div class="form-group">
          <label for="foto">Foto uploaden</label>
          <input type="file" name="foto" class="form-control-file" id="foto">
        </div>

        <div class="form-group">
          <label for="referentie">Referentieknop</label>
          <select class="form-control" name="referentie" id="referentie">
            <option value="optie1">agenda</option>
            <option value="optie2">actueel</option>
           </select>
        </div>

        <button type="submit" class="btn btn-primary">Verzenden</button>
      </form>
    </div>
  </div>
</div>

<?php


// Verwerken van het formulier als het is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ontvang de gegevens van het formulier
  $title = $_POST["titel"];
  $text = $_POST["tekst"];
  $reference = $_POST["referentie"];

  // Verwerk de afbeelding (opmerking: dit is een eenvoudig voorbeeld, je moet de afbeeldingen veilig verwerken in een echte toepassing)
  $image = $_FILES["foto"]["name"];
  $image_temp = $_FILES["foto"]["tmp_name"];
  move_uploaded_file($image_temp, "img/" . $image);

  // Voer de gegevens in de database in
  $sql = "INSERT INTO slider (img, title, text, reference) VALUES ('$image', '$title', '$text', '$reference')";

  if ($conn->query($sql) === TRUE) {
      echo "<script> alert(\"De slider is succesvol toegevoegd\")</script>";
  } else {
      echo "Fout bij het toevoegen van gegevens: " . $conn->error;
  }
}
// Sluit de databaseverbinding
$conn->close();
?>