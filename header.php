<header class="custom-header">
    <div class="container">
        <div class="logo-container">
            <div class="logo-image">
                <a href="homepage"><img src="images/burgerijlogomock.png" alt="Logo" class="logo-img"></a>
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

            <!-- Search bar -->
            <div class="search-bar">
                <input type="text" placeholder="Zoek...">
                <button type="button" class="close-search">&times;</button>
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

<div class="overlay" id="overlay">
    <div class="search-bar-mobile">
        <div class="search-bar-content">
            <input type="text" placeholder="Zoek...">
        </div>
    </div>
    <button type="button" class="close-search" onclick="closeSearchMobile()">&times;</button>
</div>

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

<script src="script.js"></script>