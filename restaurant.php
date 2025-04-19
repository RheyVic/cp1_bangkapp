<!--starts restuanrants php-->
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

<!--ends restuanrants php-->

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
    <link rel="stylesheet" href="css/gigantes1.css">

      <!-- JQUERY CDN -->
      <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
  />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</head>

<body>
    <!--Header-->
    <section class="header">
        <div class="logo">
            <a href="Index.php">
                <img src="image/logo.png" alt="">
            </a>
        </div>
        <div class="menu">
            <a href="home.php">Home</a>
            <a href="#">Discover</a>
            <a href="#">Activities</a>
            <a href="#">About</a>
            <a href="contacts.php">Contact</a>
        </div>
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
    <!--ends header-->
    <!--Home-->

    <body>
        <section id="tranding">

            <div class="container">
                <div class="swiper tranding-slider">
                    <div class="swiper-wrapper">
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/isla/resto.9.jpeg" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/isla/resto.14.jpeg" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/isla/resto.13.jpeg" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/isla/resto.11.jpeg" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/isla/resto.10.jpeg" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/isla/resto.4.jpeg" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/isla/resto.1.jpeg" alt="Tranding">
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

        <section class="head_dv">
            <div class="head_dv">
                <div class="title">
                    <h1>"Welcome, dine with us!"</h1>
                </div>
            </div>
 
        </section>


        <section class="head_dv">
            <div class="head_dv">
                <div class="title1">
                    <p>Welcome to our restaurant, where every meal is crafted with love and served with a smile. We invite you to savor the rich flavors and warm ambiance that make dining with us a truly special experience. Whether you're here for a casual meal with friends or a special celebration, our dedicated team is here to ensure you feel at home. Enjoy delicious dishes prepared with the freshest ingredients and let us take care of everything. We’re delighted to have you with us and look forward to making your visit unforgettable.</p>
                </div>
            </div>
 
        </section>

        <section class="nt">
            <div id="container">
                <img id="image" src="image/Fortunegarden Restaurant.jpeg" />
              </div>
              <div id="container">
                <img id="image" src="image/tikboys.jpeg" />
              </div>
              <div id="container">
                <img id="image" src="image/restaurants1.jpg" />
              </div>
        </section>
        <section class="nt">
            <div id="container">
                <img id="image" src="image/isla/resto.12.jpeg" />
              </div>
              <div id="container">
                <img id="image" src="image/isla/resto.11.jpeg" />
              </div>
              <div id="container">
                <img id="image" src="image/tikboys.1.jpeg" />
              </div>
        </section>

        <!---->

        <div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>

<div class="container">

<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3>Comments</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Write your name(optional):</label>
	  <input type="text" class="form-control" name="name" required>
	</div>
    <div class="form-group">
      <label for="comment">Write your Comments:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
  

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>           
	<table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
</div>

</div>

        <!---->


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