<?php 
    // Prepare the query
    $query = "SELECT id, titel1, tekst1, titel2, tekst2, titel3, tekst3, titel4, tekst4, foto1, foto2, foto3, foto4, foto5 FROM overons ";

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

            $backgroundImagePath = $row['foto1'];
            $img2 = $row['foto2'];
            $img3 = $row['foto3'];
            $img4 = $row['foto4'];
            $img5 = $row['foto5'];
               
        }
    } else {
        echo "Der is geen data gevonden!";
    }

    // Close the result set
    $result->close();
?>

<div class="row">

    <div class="jumbotron contactbackgroundimg"
        style="background-image: url('img/<?php echo $backgroundImagePath; ?>');">
        <h1 class="headertext">Over ons</h1>
    </div>

</div>


<div class="row">

    <div class="col-sm-6">

        <img class="overonsfoto1" alt="foto1" src="img/<?php echo $img2; ?>">

    </div>

    <div class="col-sm-6">

        <?php 
            echo"<h1 class=\"overonsh11\">$titel1</h1>";
            echo"<br>";
            echo"<p class=\"overonsp11\">$tekst1</p>";
        ?>

    </div>

</div>

<div class="row">

    <div class="col-sm-6">
        <div class="responsivepaddingoveronsR1"> 
            <?php 
                echo"<h1 class=\"overonsh12\">$titel2</h1>";
                echo"<br>";
                echo"<p class=\"overonsp12\">$tekst2</p>";
            ?>
        </div>
    </div>

    <div class="col-sm-6 responsivepaddingoveronsRF1">

        <img class="overonsfoto2" alt="foto2" src="img/<?php echo $img3; ?>">

    </div>

</div>

<div class="row">

    <div class="col-sm-6 overonsfoto3right">

        <img class="overonsfoto3" alt="foto3" src="img/<?php echo$img4; ?>">

    </div>

    <div class="col-sm-6">

        <?php 
            echo"<h1 class=\"overonsh13\">$titel3</h1>";
            echo"<br>";
            $volledigeTekst = $tekst3;
        ?>

        <p id="volledigeTekst" class="verkort"><?php echo $volledigeTekst; ?></p>
        <a id="leesMeerBtn">Lees meer ></a>
        <a id="verminderBtn" class="hidden">Lees minder ></a>



        <script src="script.js" defer></script>

    </div>

</div>

<div class="row">



    <div class="col-sm-6 laatsterowoveronsresponsive">

        <?php 
            echo"<h1 class=\"overonsh14\">$titel4</h1>";
            echo"<br>";
            echo"<p class=\"overonsp14\">$tekst4</p>";
        ?>

    </div>

    <div class="col-sm-6 overonsfoto3left">

        <img class="overonsfoto4" alt="foto4" src="img/<?php echo $img5; ?>">

    </div>

</div>


<div class="row">
    <div class="col-sm-12 overonsbuttons" >
        <div class="beleidsplan">
            <button class="pdf-button" >
                beleidsplan
                <div class="pdfbackground">
                    <img src="img/overonspdf.png" alt="PDF Icon" class="pdf-icon">
                </div>
            </button>
        </div>

        <div class="Wijkplan">
            <button class="pdf-button" style="margin: 0 10px;">
                Wijkplan
                <div class="pdfbackground">
                    <img src="img/overonspdf.png" alt="PDF Icon" class="pdf-icon">
                </div>
            </button>
        </div>

        <div class="Vrijwilligers">
            <button class="pdf-button">
                Vrijwilligersbeleid
                <div class="pdfbackground">
                    <img src="img/overonspdf.png" alt="PDF Icon" class="pdf-icon">
                </div>
            </button>
        </div>
    </div>
</div>