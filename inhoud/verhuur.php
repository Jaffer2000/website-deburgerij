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

            $backgroundImagePath = $row['img4'];
            $img2 = $row['img1'];
            $img3 = $row['img2'];
            $img4 = $row['img3'];
               
        }
    } else {
        echo "Der is geen data gevonden!";
    }

    // Close the result set
    $result->close();
?>
   
<script>
    // JavaScript function to navigate to a different page
    function prijslijst() {
        var url = "https://www.google.com";
        window.open(url, "_blank"); // Opens the link in a new tab
    }
</script>

<div class="row">

    <div class="jumbotron contactbackgroundimg" style="background-image: url('img/<?php echo $backgroundImagePath; ?>');">
    <h1 class="headertext">Verhuur</h1>
    </div>

</div>


<div class="row ">

    <div class="col-sm-12">
        <?php echo"<h1 class=\"verhuurh11\">$titel1</h1>";
              echo "<br>";
              echo "<p class=\"verhuurtekst1\">$tekst1</p>";
        ?>
        
        <div class="prijslijstbuttondiv">
            <button id="prijslijstbutton" onClick="prijslijst()">Bekijk de prijslijst</button>
        </div>
    
    </div>

</div>

<div class="row mobielformaatpaddingtop">

    <div class="col-sm-6 ">
        
        <?php 
            echo"<h1 class=\"verhuurh12 \" >$titel2</h1>";
            echo "<br>";
            echo "<p class=\"verhuurtekst2\">$tekst2</p>";
        ?>

    </div>

    <div class="col-sm-6">

        <img class="verhuurimg2" alt="img2" src="img/<?php echo $img2 ?>" />

    </div>

</div>

<div class="row">

    <div class="col-sm-12">

        <?php 
            echo"<h1 class=\"verhuurh13\">$titel3</h1>";
            
            echo "<br>";
            echo "<p class=\"verhuurtekst3\">$tekst3</p>";
        ?>

    </div>

</div>

<div class="row">

    <div class="col-sm-6 img3right">

        <img class="verhuurimg3" alt="img3" src="img/<?php echo $img3 ?>">

    </div>

    <div class="col-sm-6">

    <?php 
        echo"<h1 class=\"verhuurh14\">$titel4</h1>";
        echo "<br>";
        echo "<p class=\"verhuurtekst4\">$tekst4</p>";
    ?>
    
    </div>

</div>

<div class="row">

        <div class="col-sm-3"></div>

        <div class="col-sm-6">

            <?php
                echo"<h1 class=\"verhuurh15\">$titel5</h1>";
                echo"<br>";
                echo '<div class="paddingbullet"><span class="orange-dot "><span class="bullet1">' . $bullet1 . '</span></span> <br></div>';
                echo '<div class="paddingbullet"><span class="orange-dot"><span class="bullet2">' . $bullet2 . '</span></span> <br></div>';
                echo '<div class="paddingbullet"><span class="orange-dot"><span class="bullet3">' . $bullet3 . '</span></span></div>';
            ?>

        </div>

        <div class="col-sm-3"></div>

</div>


<div class="row">

        <div class="col-sm-12">

            <?php 
                echo" <br> <h1 class=\"verhuurklaarh1\">Klaar, nu opruimen !</h1> 
                <br>
                <h3 class=\"verhuurh36\">Der zijn verschillende schoonmaakmiddelen aanwezig</h3>";
                echo "<br>";
            ?>

        </div>

</div>

<div class="row">

<div class="col-sm-6 img4right">

        <img class="verhuurimg4" alt="img4" src="img/<?php echo $img4 ?>">

    </div>
    <div class="col-sm-6">
        
        <?php 
            echo"<h1 class=\"verhuurh16\">$titel6 </h1>";
            echo "<p class=\"verhuurtekst6\">$tekst6</p>";
        ?>

    </div>

    

</div>
