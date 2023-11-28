<?php 
    // Prepare the query
    $query = "SELECT id, titel1, titel2, tekst1, tekst2, img, overonsImg FROM homepage";
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
            $backgroundImagePath = $row['img'];
            $overonsImage = $row['overonsImg'];
        }
    } else {
        echo "Der is geen data gevonden!";
    }
        // Close the result set
        $result->close();
        ?>

<div class="jumbotron jumbotron-img-home">
    <img src="img/<?php echo $backgroundImagePath; ?>" alt="Jumbotron Image" class="img-fluid">
    <div class="jumbotron-content">
        <h1>Lunch 2023</h1>
        <p>Meld je aan voor de wijklunch!</p>
        <button>Meer info</button>
    </div>
</div>

<div class="row">
    <div class="col-md-12 welkom">
        <h1 class="homeh1-1"><?php echo $titel1; ?></h1>
        <p class="hometekst1"><?php echo $tekst1; ?>
        </p>
    </div>
</div>

<div class="row buttons-homepage">
    <div class="col-md-12 text-center">
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center mt-4">
            <a href="agenda"><button class="custom-button1 mx-2 mb-3 mb-md-0">Onze activiteiten ></button></a>
            <a href="actueel"><button class="custom-button2 mx-2 mb-3 mb-md-0">Aanmelden nieuwsbrief ></button></a>
            <a href="verhuur"><button class="custom-button3 mx-2 mb-3 mb-md-0">Ruimte huren? ></button></a>
        </div>
    </div>
</div>

<div class="container references">
    <div class="row text-center justify-content-center">
        <div class="col-md-4 mb-4 reference">
            <a href="">
                <div class="square">
                    <img src="img/homepage2" alt="Image 1">
                    <div class="square-footer">
                        <h3>Bekijk foto’s van vorige <br> activiteiten!</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-4 reference">
            <a href="agenda">
                <div class="square">
                    <img src="img/homepage3" alt="Image 2">
                    <div class="square-footer">
                        <h3>Bekijk onze <br> activiteiten!</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-4 reference">
            <a href="verhuur">
                <div class="square">
                    <img src="img/homepage4" alt="Image 3">
                    <div class="square-footer">
                        <h3>Wilt u een ruimte <br> huren? Neem <br> contact met ons op!</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="row overons-homepage d-flex align-items-center">
    <div class="col-md-6 overons-img">
        <img src="img/<?php echo $overonsImage; ?>" alt="Image Description" class="img-fluid">
    </div>
    <div class="col-md-6 overons-homepage-text">
        <h1 class="homeh1-2"><?php echo $titel2; ?></h1>
        <p class="hometekst2"><?php echo $tekst2; ?></p>
    </div>
</div>