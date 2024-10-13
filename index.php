<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php'); // Redirect ke halaman login jika belum login
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOXCARS</title>
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navbar Section -->
    <header class="hero">
        <nav class="navbar">
            <div class="container">
                <a href="#" class="logo">
                    <img src="Images/logo.png" alt="BOXCARS Logo">
                </a>
                <ul class="navbar-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Listings</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <a href="login.php" class="btn-logout">Logout</a>
            </div>
        </nav>
        <!-- Navbar Section End -->

        <!-- Hero Section -->
        <div class="hero-content">
            <div class="container">
                <h1 id="price">$35.000</h1>
                <h1 id="car-name">Mercedes-Benz, AMG C63</h1>
                <div class="specification">
                    <p><img src="Images/ic-gas.svg" alt="#"> Petrol</p>
                    <p><img src="Images/ic-speedometer.svg" alt="#"> 100 Miles</p>
                    <p><img src="Images/ic-transmission.svg" alt="#"> Automatic</p>
                </div>

                <button class="btn-learn-more">
                    Learn More <img src="Images/ic-arrow.svg" alt="#">
                </button>
            </div>
        </div>
    </header>
    <!-- Hero Section End-->


    <!-- Main Section -->
    <main>
        <div class="vehicles">
            <div class="container">
                <header class="vehicles-header">
                    <div class="header-title">
                        <h1>Explore All Vehicles</h1>
                        <a href="#">
                            View All <img src="Images/ic-arrow.svg" alt="#">
                        </a>
                    </div>
                    <div class="car-listings">
                        <a href="#">Recent Cars</a>
                        <a href="#">Featured Cars</a>
                        <a href="#">Popular Cars</a>
                    </div>
                </header>
                <div class="vehicle-card">
                    <div class="card">
                        <img src="Images/hero.jpg" alt="#">
                        <div class="car-info">
                            <h3 class="car-name">Mercedes-Benz, AMG C63</h3>
                            <p class="car-description">3.5 D5 PowerPulse Momentum 5dr AW…</p>
                            <div class="car-specification">
                                <div class="specification-item">
                                    <img src="Images/ic-gas-black.svg" alt="#">
                                    <p>Petrol</p>
                                </div>
                                <div class="specification-item">
                                    <img src="Images/ic-speedometer-black.svg" alt="#">
                                    <p>100 Miles</p>
                                </div>
                                <div class="specification-item">
                                    <img src="Images/ic-transmission-black.svg" alt="#">
                                    <p> Automatic</p>
                                </div>
                            </div>
                            <div class="car-price">
                                <p>$40,000</p>
                                <a href="#">
                                    View Details <img src="Images/ic-arrow-blue.svg" alt="#">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="Images/hero.jpg" alt="#">
                        <div class="car-info">
                            <h3 class="car-name">Mercedes-Benz, AMG C63</h3>
                            <p class="car-description">3.5 D5 PowerPulse Momentum 5dr AW…</p>
                            <div class="car-specification">
                                <div class="specification-item">
                                    <img src="Images/ic-gas-black.svg" alt="#">
                                    <p>Petrol</p>
                                </div>
                                <div class="specification-item">
                                    <img src="Images/ic-speedometer-black.svg" alt="#">
                                    <p>100 Miles</p>
                                </div>
                                <div class="specification-item">
                                    <img src="Images/ic-transmission-black.svg" alt="#">
                                    <p> Automatic</p>
                                </div>
                            </div>
                            <div class="car-price">
                                <p>$40,000</p>
                                <a href="#">
                                    View Details <img src="Images/ic-arrow-blue.svg" alt="#">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="Images/hero.jpg" alt="#">
                        <div class="car-info">
                            <h3 class="car-name">Mercedes-Benz, AMG C63</h3>
                            <p class="car-description">3.5 D5 PowerPulse Momentum 5dr AW…</p>
                            <div class="car-specification">
                                <div class="specification-item">
                                    <img src="Images/ic-gas-black.svg" alt="#">
                                    <p>Petrol</p>
                                </div>
                                <div class="specification-item">
                                    <img src="Images/ic-speedometer-black.svg" alt="#">
                                    <p>100 Miles</p>
                                </div>
                                <div class="specification-item">
                                    <img src="Images/ic-transmission-black.svg" alt="#">
                                    <p> Automatic</p>
                                </div>
                            </div>
                            <div class="car-price">
                                <p>$40,000</p>
                                <a href="#">
                                    View Details <img src="Images/ic-arrow-blue.svg" alt="#">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="Images/hero.jpg" alt="#">
                        <div class="car-info">
                            <h3 class="car-name">Mercedes-Benz, AMG C63</h3>
                            <p class="car-description">3.5 D5 PowerPulse Momentum 5dr AW…</p>
                            <div class="car-specification">
                                <div class="specification-item">
                                    <img src="Images/ic-gas-black.svg" alt="#">
                                    <p>Petrol</p>
                                </div>
                                <div class="specification-item">
                                    <img src="Images/ic-speedometer-black.svg" alt="#">
                                    <p>100 Miles</p>
                                </div>
                                <div class="specification-item">
                                    <img src="Images/ic-transmission-black.svg" alt="#">
                                    <p> Automatic</p>
                                </div>
                            </div>
                            <div class="car-price">
                                <p>$40,000</p>
                                <a href="#">
                                    View Details <img src="Images/ic-arrow-blue.svg" alt="#">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1>Hello</h1>
    </main>
</body>

</html>