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

document.addEventListener("DOMContentLoaded", function () {
  const sidebar = document.getElementById("sidebar");
  const openButton = document.querySelector(".navbar-toggler");

  let isSidebarOpen = false; // Track the state of the sidebar

  // Function to open and close the sidebar
  openButton.addEventListener("click", function () {
    if (isSidebarOpen) {
      // Close the sidebar
      closeSidebar();
    } else {
      // Open the sidebar
      openSidebar();
    }
  });

  // Function to open the sidebar
  function openSidebar() {
    sidebar.style.right = "0";
    document.body.classList.add("sidebar-open");
    isSidebarOpen = true;
    // Add a click event listener to close the sidebar when clicking outside
    document.addEventListener("click", closeSidebarOnClickOutside);
  }

  // Function to close the sidebar
  function closeSidebar() {
    sidebar.style.right = "-100%";
    document.body.classList.remove("sidebar-open");
    isSidebarOpen = false;
    // Remove the click event listener
    document.removeEventListener("click", closeSidebarOnClickOutside);
  }

  // Function to close the sidebar when clicking outside
  function closeSidebarOnClickOutside(event) {
    if (!sidebar.contains(event.target) && !openButton.contains(event.target)) {
      closeSidebar();
    }
  }
});

// Open search on mobile and tablet
function openSearchMobile() {
  $(".search-bar").addClass("active");
  $(".overlay").addClass("active");
}

// Close search on mobile and tablet
function closeSearchMobile() {
  $(".search-bar").removeClass("active");
  $(".overlay").removeClass("active");
}
