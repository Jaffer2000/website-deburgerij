<?php

// Check if a new activity is added via phpMyAdmin
if (isset($_GET['newActivity']) && $_GET['newActivity'] == 1) {
    echo "New activity added successfully!";
}

// Prepare the query to retrieve all activities
$query = "SELECT id, titel, tekst, foto, datum FROM agenda";

// Execute the query
$result = $conn->query($query);
?>

<div class="jumbotron jumbotron-img-agenda">
    <img src="img/agendabanner.png" alt="Jumbotron Image" class="img-fluid">
    <div class="jumbotron-content">
        <h1>Agenda</h1>
    </div>
</div>

<p class="filter-agenda">
    <a href="#" data-month="1">Januari</a> |
    <a href="#" data-month="2">Februari</a> |
    <a href="#" data-month="3">Maart</a> |
    <a href="#" data-month="4">April</a> |
    <a href="#" data-month="5">Mei</a> |
    <a href="#" data-month="6">Juni</a> |
    <a href="#" data-month="7">Juli</a> |
    <a href="#" data-month="8">Augustus</a> |
    <a href="#" data-month="9">September</a> |
    <a href="#" data-month="10">Oktober</a> |
    <a href="#" data-month="11">November</a> |
    <a href="#" data-month="12">December</a>
</p>

<div class="container activiteiten">
    <div class="row text-center justify-content-center">
        <?php
// Check if the query was successful
if ($result && $result->num_rows > 0) {
    // Loop through all existing activities
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $titel = $row['titel'];
        $tekst = $row['tekst'];
        $foto = $row['foto'];
        $datum = $row['datum'];
        $maand = date('n', strtotime($datum));  // Extract the month (1-12) from the date

        // Your existing code for displaying the existing activity

        $dutchDays = ['Zo', 'Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za'];
        $dutchMonths = ['jan', 'feb', 'mrt', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec'];

        echo "<div class='col-md-4 mb-4 activiteit' data-toggle='modal' data-target='#myModal' data-tekst='$tekst' data-maand='$maand'>";
        echo "<div class='square-agenda'>";
        echo "<img src='img/$foto' alt='Image $id'>";
        echo "<div class='square-footer-agenda'>";
        echo "<div class='footer-content-agenda'>";
        echo "<p>" . $dutchDays[date('w', strtotime($datum))] . ". " . date('j', strtotime($datum)) . " " . $dutchMonths[date('n', strtotime($datum)) - 1] . " " . date('Y', strtotime($datum)) . "</p>";
        echo "<h3>$titel</h3>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }

    // Close the result set for existing activities
    $result->close();
} else {
    echo "Er zijn momenteel geen activiteiten gepland";
}
?>

        <div class='no-activities-message' style='display: none; margin: 10%;'>
            <p>Er zijn geen geplande activiteiten voor deze maand.</p>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Activiteit Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img src="" alt="Popup Image" id="popupImage" class="img-fluid mb-4">
                </div>
                <h3 id="popupTitle"></h3>
                <p id="popupDate" class="mb-3"></p>
                <p id="popupText"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary modal-button" data-dismiss="modal">Sluit</button>
            </div>
        </div>
    </div>
</div>

<script>
// JavaScript to handle the modal content
$('.square-agenda').click(function() {
    var imageSrc = $(this).find('img').attr('src');
    var title = $(this).find('.footer-content-agenda h3').text();
    var date = $(this).find('.footer-content-agenda p').text();

    // Set modal content
    $('#popupImage').attr('src', imageSrc);
    $('#popupTitle').text(title);
    $('#popupDate').text(date);

    // Show the modal
    $('#myModal').modal('show');
});
</script>

<script>
// JavaScript to update the modal content when shown
$('.activiteit').on('click', function() {
    var tekst = $(this).data('tekst');
    var modal = $('#myModal');
    modal.find('#popupText').text(tekst);
    modal.modal('show');
});
</script>

<script>
// JavaScript to filter activities based on selected month
$('.filter-agenda').on('click', 'a', function(e) {
    e.preventDefault();

    var selectedMonth = $(this).data('month');
    $('.activiteit').hide();

    if (selectedMonth === '0') {
        $('.activiteit').show();
    } else {
        $('.activiteit[data-maand="' + selectedMonth + '"]').show();
    }

    // Check if any activities are visible
    if ($('.activiteit:visible').length === 0) {
        $('.no-activities-message').show();
    } else {
        $('.no-activities-message').hide();
    }
});
</script>