<?php 

    // Prepare the query
    $query = "SELECT id, titel, tekst, IMG FROM contact";

    // Execute the query
    $result = $conn->query($query);

    // Check if the query was successful
    if ($result && $result->num_rows > 0) {
        // Fetch the data from the result set
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $titel = $row['titel'];
            $tekst = $row['tekst'];
            $backgroundImagePath = $row['IMG'];
                
        }
    } else {
        echo "Der is geen data gevonden!";
    }

        // Close the result set
        $result->close();
        ?>

<div class="row headerblauw">
    <div class="jumbotron contactbackgroundimg" style="background-image: url('img/<?php echo $backgroundImagePath; ?>');">
       <h1 class="headertext">Contact</h1>
    </div>
</div>


<div class="row">
    <div class="col-sm-12" style="text-align: center;">
        <h1 class="contacth3">Service & contact</h1>
    </div>
</div>

<div class="row ">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
        <div class="telefoondiv">
            <div class="infoopmaakcontact">
                <img src="img/telcontact.png" class="telcontact" alt="telefoonnummer">
                <p style="margin: 0;" class="emailphonecss">0118-855523</p>
            </div>
        </div>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
        <div class="infoopmaakcontact2">
            <img src="img/At.png" class="emailcontact" alt="telefoonnummer">
            <p style="margin: 0;" class="emailphonecss">Wijkcentrumdeburgerij@gmail.com</p>
        </div>
    </div>
    <div class="col-sm-2"></div>
</div>



<div class="row">

    <div class="col-sm-2"></div>

    <div class="col-sm-8" >

        <?php
            echo "<h1 class=\"openingstijdentitel\">", $titel, "</h1>";
            echo "<p class=\"openingstijdentekst\">", $tekst, "</p>";
        ?>

    </div>

    <div class="col-sm-2"></div> 

</div>


<div class="row contactpaddingopeningstijden">

    <div class="col-sm-2"></div>


    <div class="col-sm-8">
        <p class="googlelocatielocatie">Locatie</p>
            <div class="googlefotolocatie">
                <img class="googlelocatie" src="img\googlelocatie.png">
            </div>
    </div>            
    <div class="col-sm-2"></div>

</div>

<div class="row">

    <div class="col-sm-2"></div>


    <div class="col-sm-8"> 
        
        <h2 class="h2 contacth2">Stel hier uw vraag!</h2>

        <form class="contactform" action="">

            <div class="contactformbox">
                <div class="contactformtekst">
                    <label for="naam" class="contactformnaam">Naam</label> <br> 
                </div>
                
                <div class="contactformcenter">
                    <input class="contactform contactformnaamfill" type="text" name="naam" required>
                </div>

            </div>

            <div class="contactformbox">
                <div class="contactformtekst">
                <label for="email" class="contactformtelefoonnummer">Telefoonnummer</label> <br>
                </div>
                    <div class="contactformcenter">
                        <input class="contactform contactformtelefoonnummerfill" type="text" name="email" required>
                    </div>
            </div>

            <div class="contactformbox">
                <div class="contactformtekst">
                    <label for="bericht" class="contactformbericht">Bericht</label> <br> 
                </div>

                <div class="contactformcenter">
                    <input class="contactform contactformberichtfill" type="text" name="bericht" required>
                </div>
            
            </div>

            <div class="contactformspacing"></div> 
            
            <div class="contactformbox">
                <div class="contactformbutten">
                    <input type="submit" name="submit" value="Verzenden" class="contactformbutton">
                </div>
            </div>

            <div class="contactformspacing"></div> 
        </form> 



    </div>

    <div class="col-sm-2"></div>

</div>