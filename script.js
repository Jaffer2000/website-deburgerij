document.addEventListener("DOMContentLoaded", function () {
  const leesMeerBtn = document.getElementById("leesMeerBtn");
  const verminderBtn = document.getElementById("verminderBtn");
  const volledigeTekst = document.getElementById("volledigeTekst");

  leesMeerBtn.addEventListener("click", function (event) {
    event.preventDefault();
    volledigeTekst.classList.toggle("toonVolledig");
    leesMeerBtn.classList.toggle("hidden");
    verminderBtn.classList.toggle("hidden");
  });

  verminderBtn.addEventListener("click", function (event) {
    event.preventDefault();
    volledigeTekst.classList.toggle("toonVolledig");
    leesMeerBtn.classList.toggle("hidden");
    verminderBtn.classList.toggle("hidden");
  });
});

// JavaScript to handle the modal content
$(".square-agenda").click(function () {
  var imageSrc = $(this).find("img").attr("src");
  var title = $(this).find(".footer-content-agenda h3").text();
  var date = $(this).find(".footer-content-agenda p").text();
  // Set modal content
  $("#popupImage").attr("src", imageSrc);
  $("#popupTitle").text(title);
  $("#popupDate").text(date);
  // Show the modal
  $("#myModal").modal("show");
});

// JavaScript to update the modal content when shown
$(".activiteit").on("click", function () {
  var tekst = $(this).data("tekst");
  var modal = $("#myModal");
  modal.find("#popupText").text(tekst);
  modal.modal("show");
});

// JavaScript to filter activities based on selected month
$(".filter-agenda").on("click", "a", function (e) {
  e.preventDefault();
  var selectedMonth = $(this).data("month");
  $(".activiteit").hide();
  if (selectedMonth === "0") {
    $(".activiteit").show();
  } else {
    $('.activiteit[data-maand="' + selectedMonth + '"]').show();
  }
  // Check if any activities are visible
  if ($(".activiteit:visible").length === 0) {
    $(".no-activities-message").show();
  } else {
    $(".no-activities-message").hide();
  }
});
