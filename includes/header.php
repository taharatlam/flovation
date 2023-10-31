<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flovation</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.css" />
    <!-- custom css -->

    <!-- aos cdn -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/res.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        var site_url = "";
    </script>
</head>

<body style="background: white !important;">
    <nav class="main-nav <?=!empty($hm) ?'hm-nav': ''?>">
        <div class="container">
            <div class="inner-nav">
                <div class="l-part">
                    <button class="menu-btn">
                        <img src="assets/images/menu.svg" alt="">
                    </button>
                    <a href="index.php" class="logo">
                    <?=!empty($hm) ? '<img src="assets/images/logo.svg" alt="">':'<img src="assets/images/ft-logo.svg" alt="">' ?>
                        
                    </a>
                </div>
                <div class="m-part">
                    <ul class="nav-list">
                        <li class="has-drop-down">
                            <a href="index.php" class="collapsed">
                                Home
                            </a>
                        </li>
                        <li class="has-drop-down">
                            <a href="smart-manager.php" class="collapsed">
                                The Smart Manager App
                            </a>
                        </li>
                        
                    </ul>
                    <ul class="ot-list">
                   
                        <li>
                            <a href="contact.php" class="main-btn white-btn">
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="r-part">
                </div> -->
            </div>
        </div>
    </nav>

    <div class="mobile-nav">
        <div class="menu-head">
            <a href="" class="logo">
                <img src="assets/images/logo.svg" alt="">
            </a>
            <button class="menu-close">
                <img src="assets/images/close.svg" alt="">
            </button>
        </div>
        <ul class="nav-list">
            <!-- <li>
                <a class="collapsed" data-bs-toggle="collapse" href="#services-links" role="button">
                    <span>Services</span>
                    <img src="" alt="">
                </a>
                <div class="collapse" id="services-links">
                    <div class="drop-mega">
                        <ul>

                            <li>
                                <a href="" class="srv-link">
                                    <div class="ic">
                                        <img src="" alt="">
                                    </div>
                                    <span></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </li> -->
            
            <li>
                <a href="index.php">
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="smart-manager.php">
                    <span>Smart Manager App</span>
                </a>
            </li>
            <li>
                <a href="contact.php">
                    <span>Contact Us </span>
                </a>
            </li>


        </ul>
    </div>
