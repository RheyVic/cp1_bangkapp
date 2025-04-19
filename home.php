<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BangkappCarles</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/index.css">

      <!-- JQUERY CDN -->
      <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
  />
</head>

<body>
    <!--Header-->
    <section class="header">
        <div class="logo">
            <a href="Index.html">
                <img src="image/logo.png" alt="">
            </a>
        </div>
        <div class="menu">
        <a href="home.php">Home</a>
            <a href="#">Discover</a>
            <a href="#">Activities</a>
            <a href="about.php">About</a>
            <a href="contacts.php">Contact</a>
        </div>
        <input type="date" >
        <div class="container1">

        <div class="dropdown">
        <button class="dropdown-btn">
        <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
            <span><?php echo $fetch['name']; ?></span>
            <i class="fa-solid fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="update_profile.php">Update Profile</a>
            <a href="index.php?logout=<?php echo $user_id; ?>">Logout</a>
        </div>
    </div>
        </div>

    </section>
    <!--Home-->

    <body>
        <section id="tranding">

            <div class="container">
                <div class="swiper tranding-slider">
                    <div class="swiper-wrapper">
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/carles 1.png" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/carles 2.png" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/carles 3.jpg" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/carles 4.jpg" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/carles 5.jpg" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/carles 6.jpg" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/carles 5.jpg" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                    </div>

                    <div class="tranding-slider-control">
                        <div class="swiper-button-prev slider-arrow">
                            <ion-icon name="arrow-back-outline"></ion-icon>
                        </div>
                        <div class="swiper-button-next slider-arrow">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    
                </div>
            </div>
    <!-- Search Bar start -->
    <div class="search-bar">
        <!-- Dropdown start -->
        <div class="dropdown">
          <div id="drop-text" class="dropdown-text">
            <span id="span">Everything</span>
            <i id="icon" class="fa-solid fa-chevron-down"></i>
          </div>
          <ul id="list" class="dropdown-list">
            <li class="dropdown-list-item">Gigantes Island</li>
            <li class="dropdown-list-item">Hotel and Resorts</li>
            <li class="dropdown-list-item">Amusement Park</li>
            <li class="dropdown-list-item">Restaurant</li>
          </ul>
        </div>
        <!-- Dropdown ends -->
  
        <!-- Search box input start -->
        <div class="search-box">
          <input type="text" id="search-input" placeholder="Search anything..." />
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <!-- Search box input ends -->
      </div>
      <!-- Search Bar ends -->
        </section>

        <section class="about-games">
        <h1 class="title">Enjoy your Drean vacation</h1>
        <p>Plan and book our perfect trip with expert advice, travel tips, destination </br> information and  inspiration from us</p>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="image/isla/antonia.coconut.avif" alt="">
                </div>
                <div class="text">
                    <h3>Gigantes Island</h3>
                    <p>Welcome to Isla Gigantes, a gem nestled in the azure waters of the Philippines......</p>
                    <a href="gigantes.php" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="image/isla/resto.9.jpeg" alt="">
                </div>
                <div class="text">
                    <h3>Restaurant</h3>
                    <p>Welcome to the culinary heart of Carles, where flavors dance on plates and every........</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="image/greenland.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Amusement Park</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit......</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="image/carles 1.png" alt="">
                </div>
                <div class="text">
                    <h3>Hotel&Resorts</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit......</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>
        </div>
    </section>



    <section class="about-games">
        <h1 class="title">Enjoy your Drean vacation</h1>
        <p>Plan and book our perfect trip with expert advice, travel tips, destination </br> information and  inspiration from us</p>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="image/carles 1.png" alt="">
                </div>
                <div class="text">
                    <h3>Gigantes Island</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="image/carles 1.png" alt="">
                </div>
                <div class="text">
                    <h3>Restaurant</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="image/carles 1.png" alt="">
                </div>
                <div class="text">
                    <h3>Amusement Park</h3>
                </div>
            </div>
        </div>
        <div class="button1">
        <a href="" class="btn">view more</a>
        </div>
    </section>

    <section class="about-games">
        <h1 class="title">Enjoy your Drean vacation</h1>
        <p>Plan and book our perfect trip with expert advice, travel tips, destination </br> information and  inspiration from us</p>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="image/carles 1.png" alt="">
                </div>
                <div class="text">
                    <h3>Gigantes Island</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit......</p>
                    <a href="gta.html" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="image/carles 1.png" alt="">
                </div>
                <div class="text">
                    <h3>Restaurant</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit......</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="image/carles 1.png" alt="">
                </div>
                <div class="text">
                    <h3>Amusement Park</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit......</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                <img src="image/carles 1.png" alt="">
                </div>
                <div class="text">
                    <h3>Hotel&Resorts</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit......</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>
        </div>
    </section>


    


    

        <section class="mobile">
            <img src="image/mobile.png" alt="">
        </section>


        <section class="footer">
            <div class="footer-title">
                <h1>Explore the Carles with my Dream Place</h1>
            </div>
            <div class="footer-description">
                <p>Discover new places and experiences</p>
            </div>
        </section>

    
           
        </section>

         <!--footer section starts-->

         <section class="footer">
        
            <div class="box-container">

                <div class="logo">
                    <img src="image/logo.png" alt="">
                    <p>Your next goto companion</br> for travel </p>
                </div>

                <div class="box">
                    <h3 class="quick links"></h3>
                    <a href="#"><i class="fas fa-angle-right"></i>Home</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Discover</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Activities</a>
                    <a href="#"><i class="fas fa-angle-right"></i>About</a>
                    <a href="join.html"><i class="fas fa-angle-right"></i>Contact</a>
                </div>

                <div class="box">
                    <h3 class="quick links"></h3>
                    <a href="#"><i class="fas fa-angle-right"></i>Gigantes Island</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Solina</a>
                    <a href="#"><i class="fas fa-angle-right"></i>New Beach Head</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Greenland</a>
                    <div class="link">
                        <a href="#" ><i class="fas fa-angle-right"></i>see more</a>
                    </div>
                </div>

                <div class="box">
                    <h3 class="quick links"></h3>
                    <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Acessibility</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Reward system Policy</a>
                </div>


                <div class="box">
                    <h3 class="follow us"></h3>
                    <a href="#"><i class="fab fa-facebook-f"></i>Carles IloIlo</a>
                    <a href="#"><i class="fab fa-instagram"></i>Carles IloIlo</a>
                    <a href="#"><i class="fab fa-envelope"></i>Carles IloIlo</a>
                    <a href="#"><i class="fab fa-phone"></i>0912-345-7890</a>
                </div>

            </div>

            <div class="credit"> created by <span>GalaDevs2024</span> | all rights reserved! </div>

        </section>

        

        <!--footer section ends-->



        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="js/script.js"></script>


    </body>

</html>