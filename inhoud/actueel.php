<?php

// Check if a new activity is added via phpMyAdmin
if (isset($_GET['newActivity']) && $_GET['newActivity'] == 1) {
    echo "News item added successfully!";
}

// Prepare the query to retrieve all activities
$query = "SELECT id, titel, tekst, foto, date_added FROM actueel";

// Execute the query
$result = $conn->query($query);
?>

<style>
.titlecontainer {
    display: flex;
    align-items: center;
    padding-bottom: 80px;
}

.actueelh1-1 {
    color: #03629d;
    font-weight: bold;
}

.header-line {
    background-color: #E9603A;
    width: 7px;
    height: 40px;
    margin-right: 7px;
}

.actueel-content {
    display: flex;
    flex-wrap: wrap;
    padding: 5% 12%;
}

.newsitem {
    display: flex;
    margin-bottom: 100px;
    /* Add some margin between each news item */
}

.newsitem img {
    max-width: 100%;
    /* Make sure the image does not exceed its container's width */
    margin-right: 10px;
    /* Add some space between the image and text */
}

.newsitem-content {
    flex: 1;
    margin: 12px;
    /* Allow the text to take up the remaining space */
}

.newsitem-date {
    color: #a2a2a2;
    /* font-size: 14px; */
}

.newsitem-content h4 {
    color: #03629d;
    font-weight: bold;
    margin-top: -10px;
    margin-bottom: 20px;
}

.newsitem-text {
    color: #03629d;
    font-weight: 600;
    font-size: 16px;
}

.newsitem-leesMeer {
    color: #e9603a;
    font-weight: bold;
}

.newsitem-leesMeer {
    cursor: pointer;
}

@media (max-width: 1026px) {
    .actueelh1-1 {
        font-size: 36px;
    }
}

@media (max-width: 750px) {

    .titlecontainer {
        padding-top: 20px;
        margin-bottom: -30px;
    }

    .actueelh1-1 {
        font-size: 24px;
    }

    .header-line {
        width: 7px;
        height: 50px;

    }
}

@media (min-width: 550px) and (max-width: 772px) {
    .header-line {
        height: 75px;
    }
}
</style>

<div class="jumbotron jumbotron-img-agenda">
    <img src="img/actueel headere.png" alt="Jumbotron Image" class="img-fluid">
    <div class="jumbotron-content">
        <h1>Actueel</h1>
    </div>
</div>

<div class="actueel-content">
    <div class="titlecontainer">
        <div class="header-line"></div>
        <h1 class="actueelh1-1">Blijf op de hoogte van het laatste nieuws!</h1>
    </div>

    <?php
// Check if the query was successful
if ($result && $result->num_rows > 0) {

    // Set the locale to Dutch for month translations
    setlocale(LC_TIME, 'nl_NL');

    // Month translations in Dutch
    $monthTranslations = [
        'January' => 'januari',
        'February' => 'februari',
        'March' => 'maart',
        'April' => 'april',
        'May' => 'mei',
        'June' => 'juni',
        'July' => 'juli',
        'August' => 'augustus',
        'September' => 'september',
        'October' => 'oktober',
        'November' => 'november',
        'December' => 'december',
    ];

    // Loop through all existing activities
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $titel = $row['titel'];
        $tekst = $row['tekst'];
        $foto = $row['foto'];

        // Display the date from the database for existing news items
        $publishedDate = new DateTime($row['date_added']);

        // Format the date with Dutch abbreviated day names and month translations
        $formatter = new IntlDateFormatter('nl_NL', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
        $formatter->setPattern('E. d MMMM y'); // Set the pattern for abbreviated day names
        $formattedDate = $formatter->format($publishedDate);

        echo "<div class='newsitem row'>";
        echo "<div class='col-md-auto col-sm-12 text-center'>";
        echo "<img src='img/$foto' alt='Image' class='mb-3'>"; // Remove img-fluid class
        echo "</div>";
        echo "<div class='col-md-8 col-sm-12 newsitem-content'>";
        echo "<p class='newsitem-date'>$formattedDate</p>";
        echo "<h4>$titel</h4>";

        // Check if $tekst is not empty before splitting into words
        if (!empty($tekst)) {
            // Split the text into words
            $words = str_word_count($tekst, 1);

            // Display only the 50th word initially
            if (count($words) > 50) {
                echo "<p class='newsitem-text truncated' id='text$id'>" . implode(' ', array_slice($words, 0, 50)) . "...</p>";
                echo "<p class='newsitem-leesMeer' data-toggle='modal' data-target='#myModal$id'>Lees meer ></p>";
            } else {
                // If there are fewer than 50 words, display the full text
                echo "<p class='newsitem-text'>$tekst</p>";
            }

            // Hidden div for the full text
            echo "<div class='full-text' id='fullText$id' style='display:none;'>$tekst</div>";
        }

        echo "</div>";
        echo "</div>";

        // Bootstrap 4 Modal
        echo "<div class='modal fade' id='myModal$id' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
        echo "<div class='modal-dialog' role='document'>";
        echo "<div class='modal-content'>";
        echo "<div class='modal-header'>";
        echo "<h5 class='modal-title' id='myModalLabel'>Laatste Nieuws</h5>";
        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
        echo "<span aria-hidden='true'>&times;</span>";
        echo "</button>";
        echo "</div>";
        echo "<div class='modal-body'>";
        
        // Add container to limit width
        echo "<div class='container-fluid'>";
        echo "<img src='img/$foto' class='img-fluid mb-4' alt='Image'>"; // Add img-fluid class
        echo "<h3 id='popupTitle'>$titel</h3>";

        // Format the date for the modal using the same formatter
        $formattedDateModal = $formatter->format($publishedDate);
        echo "<p class='newsitem-date mb-3'>$formattedDateModal</p>";

        echo "<p id='popupText'>$tekst</p>";
        echo "</div>"; // Close container

        echo "</div>";
        echo "<div class='modal-footer'>";
        echo "<button type='button' class='btn btn-secondary modal-button' data-dismiss='modal'>Sluit</button>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }

    // Close the result set for existing activities
    $result->close();
} else {
    echo "<p class='nonews'>Er is momenteel geen nieuws</p>";
}
?>
</div>

<script>
function toggleText(element, id) {
    var contentDiv = element.previousElementSibling;
    var fullTextDiv = document.getElementById('fullText' + id);

    if (contentDiv.classList.contains('truncated')) {
        // Show the full text
        contentDiv.classList.remove('truncated');
        contentDiv.textContent = fullTextDiv.textContent;
    } else {
        // Display only the 50th word
        contentDiv.classList.add('truncated');
        contentDiv.textContent = fullTextDiv.textContent.split(' ').slice(0, 50).join(' ') + '...';
    }
}
</script>