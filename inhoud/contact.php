<div class="row">

    <div class="jumbotron">
        <p> Contact</p>
    </div>

</div>


<div class="row">
    <div class="col-sm-4"></div>

    <div class="col-sm-4">
        <h3 class="contacth3">Service & contact</h3>
    </div>
    <div class="col-sm-4"></div>

</div>

<div class="row">

    <div class="col-sm-3"></div>

    <div class="col-sm-6">
       <div> <p class="telnummer">0118-855523</p>  <p class="email">Wijkcentrumdeburgerij@gmail.com</p> </div>
    </div>

    <div class="col-sm-3"></div>
</div>

<div class="row">

    <div class="col-sm-2"></div>

    <div class="col-sm-8">

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

               
                echo "<h1>", $title, "</h1>";
                echo "<p>", $tekst, "</p>";
               
            }
        } else {
            echo "Der is geen tekst gevonden!";
        }

        // Close the result set
        $result->close();
        ?>

    </div>

    <div class="col-sm-2"></div> 


</div>