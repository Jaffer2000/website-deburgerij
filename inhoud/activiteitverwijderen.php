<?php
    include("check_login.php")
?>
<script>
    // JavaScript function to navigate to a different page
    function adminterug() {
    var url = "activiteitenoverzicht";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}
</script>

<div class="row">

<div class="col-sm-12" >
        <h1 class="headertext" style="color: black;">Activiteit is verwijderd</h1>
    </div>

</div>

<div class="row">

    <div class="col-sm-12">

        <div class="terugbuttonadmin">
        
            <button class="activiteitentoevoegenbutton" onClick="adminterug()">Nieuws overzicht</button>
        
        </div>

    </div>

</div>


<div class="row">

    <div class="col-sm-12">
        
        <?php
        //Controleer of het ID is doorgegeven in de URL
        if (isset($_GET['id'])) {

            $id = $_GET['id'];

            // Bereid de verwijderquery voor
            $deleteQuery = "DELETE FROM agenda WHERE id = $id";

            // Voer de query uit
            if ($conn->query($deleteQuery) === TRUE) {
                echo "<script> alert(\"De activiteit is succesvol verwijderd\")</script>";
                echo"<p class=\"verwijderopmaak\">U kunt terug gaan naar de overzicht</p>";
            } else {
                echo "Error: " . $deleteQuery . "<br>" . $conn->error;
            }
        } else {
            echo "Ongeldig ID.";
        }
    ?>
 </div>

</div>
