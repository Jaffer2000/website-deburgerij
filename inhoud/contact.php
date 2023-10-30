<div class="row">

    <div class="jumbotron">
        <p> Contact</p>
    </div>

</div>


<div class="row">
    <div class="col-sm-12" style="text-align: center;">
        <h3 class="contacth3">Service & contact</h3>
    </div>
</div>

<div class="row contactgegevens">

    <div class="col-sm-3"></div>

    <div class="col-sm-3">

    <div style="display: flex;">
    <span class="gg-phone phonewidth" style="margin-right: 5px;"></span>
    <p style="margin: 0;" class="emailphonecss">0118-855523</p>
</div>


</div>


<div class="col-sm-3">

<div style="display: flex;">
<span class="gg-phone" style="margin-right: 5px;"></span>
<p style="margin: 0;" class="emailphonecss">Wijkcentrumdeburgerij@gmail.com</p>
</div>

    <div class="col-sm-3"></div>
</div>

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

               
                echo "<h1 class=\"openingstijdentitel\">", $titel, "</h1>";
                echo "<p class=\"openingstijdentekst\">", $tekst, "</p>";
               
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


<div class="row">

    <div class="col-sm-2"></div>


    <div class="col-sm-8">google maps hier</div>

    <div class="col-sm-2"></div>

</div>

<div class="row">

    <div class="col-sm-2"></div>


    <div class="col-sm-8"> 
        
        <h2 class="h2 contacth2">Stel hier uw vraag!</h2>

        <form class="contactform" action="">

            <div>
                <label for="naam" class="contactformnaam">Naam</label> <br>
                <input class="contactform contactformnaamfill" type="text" name="naam" required>
            </div>

            <div>
                <label for="email" class="contactformemail">Email</label> <br>
                <input class="contactform contactformemailfill" type="text" name="email" required>
            </div>

            <div>
                <label for="bericht" class="contactformbericht">Bericht</label> <br>
                <input class="contactform contactformberichtfill" type="text" name="bericht" required>
            </div>

            <div class="contactformbutten">
                <input type="submit" name="submit" value="Verzenden">
            </div>


        </form> 



    </div>

    <div class="col-sm-2"></div>

</div>