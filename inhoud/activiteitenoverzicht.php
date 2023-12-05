<script>
    // JavaScript function to navigate to a different page
    function adminterug() {
    var url = "admin";
    window.open(url, "_self"); // Opent de link in dezelfde tab
}

    // JavaScript function to confirm deletion and navigate to delete page
    function deleteActivity(id) {
        var confirmation = confirm("Weet je zeker dat je deze activiteit wilt verwijderen?");
        if (confirmation) {
            var url = "activiteitverwijderen.php?id=" + id;
            window.open(url, "_self"); // Opent de link in dezelfde tab
        }
    }
    function bewerken() {
    var url = "activiteitbewerken";
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


<div class="row ">
    <div class="col-sm-4"></div>
    
    <div class="col-sm-4 overzichtopmaak">
        <?php
                   // Prepare the select query
        $selectQuery = "SELECT id, titel, tekst, foto, datum FROM agenda";

        // Execute the select query
        $result = $conn->query($selectQuery);
        
        // Check if the query was successful
        if ($result && $result->num_rows > 0) {
            // Tabelkoppen
            echo "<table border='1'>
                    <tr>
                        <th>Titel</th>
                        <th>Datum</th>
                        <th>Acties</th>
                    </tr>";

            // Loop door de gegevens
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $titel = $row['titel'];
                $tekst = $row['tekst'];
                $foto = $row['foto'];
                $datum = $row['datum'];

                // Tabelrijen
                echo "<tr>
                        <td>$titel</td>
                        <td>$datum</td>
                        <td>
                            <a onclick='bewerken($id)'>Bewerken</a>
                        </td>
                        <td>
                        <a onclick='deleteActivity($id)'>Verwijderen</a>
                        </td>
                      </tr>"; 
            }
            // Tabel sluiten
            echo "</table>";
        } else {
            echo "Er is geen data gevonden!";
        }

        // Sluit de result set
        $result->close();

        ?>
    </div>

    <div class="col-sm-4"></div>

</div>
