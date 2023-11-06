<header class="custom-header">
    <div class="container">
        <div class="logo-container">
            <div class="logo-image">
                <img src="images/burgerijlogomock.png" alt="Logo" class="logo-img">
            </div>
        </div>

        <!-- Bootstrap Navbar with Toggle Button -->
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Search icon -->
            <div class="search-icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="1.6em" viewBox="0 0 512 512">
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="actueel">Actueel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="overons">Over ons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="agenda">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="verhuur">Verhuur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
</header>

<!-- Sidebar -->
<div id="sidebar" class="sidebar">
    <ul>
        <li>
            <span class="sidebar-square"></span><a href="actueel">Actueel</a>
            <hr class="sidebar-line">
        </li>
        <li>
            <span class="sidebar-square"></span><a href="overons">Over ons</a>
            <hr class="sidebar-line">
        </li>
        <li>
            <span class="sidebar-square"></span><a href="agenda">Agenda</a>
            <hr class="sidebar-line">
        </li>
        <li>
            <span class="sidebar-square"></span><a href="verhuur">Verhuur</a>
            <hr class="sidebar-line">
        </li>
        <li>
            <span class="sidebar-square"></span><a href="contact">Contact</a>
            <hr class="sidebar-line">
        </li>
    </ul>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const sidebar = document.getElementById("sidebar");
    const openButton = document.querySelector(".navbar-toggler");

    let isSidebarOpen = false; // Track the state of the sidebar

    // Function to open and close the sidebar
    openButton.addEventListener("click", function() {
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
</script>