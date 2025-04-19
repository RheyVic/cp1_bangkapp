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
    <link rel="stylesheet" href="css/about.css">

      <!-- JQUERY CDN -->
      <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
  />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                                <img src="image/isla/antonia.coconut.avif" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/isla/cabugao.avif" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/isla/carles.webp" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/isla/91-isla-gigantes.jpg" alt="Tranding">
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="image/isla/carles.4.webp" alt="Tranding">
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

        <section class="head_dv">
            <div class="head_dv">
                <div class="title">
                    <h1>Carles, Iloilo: The Gateway to Gigantes Islands</h1>
                </div>
            </div>
 
        </section>


        <section class="head_dv">
            <div class="head_dv">
                <div class="title1">
                    <p>Nestled in the northernmost tip of Iloilo province in the Philippines, Carles is a charming coastal municipality known for its rich maritime heritage and stunning natural beauty. Often referred to as the "Alaska of the Philippines" due to its abundant marine resources, Carles is rapidly gaining popularity as a prime tourist destination.<br><br>

<span>History and Culture</span> <br>
Carles was established in 1862 and has a history deeply intertwined with the sea. The town was named after Don Julio Carles, a prominent figure during the Spanish colonial period. The local culture is a blend of indigenous traditions and Spanish influences, which is evident in the town's festivals, cuisine, and daily life.<br><br>

<span>Tourist Attractions</span><br>
The true jewel of Carles is the Gigantes Islands, an archipelago comprising several islets with pristine beaches, crystal-clear waters, and unique rock formations. Key attractions include:<br><br>

<span>1. Tangke Lagoon:</span> A natural saltwater pool surrounded by towering limestone cliffs, Tangke Lagoon offers a serene and picturesque spot for swimming and relaxation.<br><br>

<span>2. Cabugao Gamay Island:</span> Known for its iconic rock formation and powdery white sand, this island is a favorite among tourists for its panoramic views and photo opportunities.<br><br>

<span>3. Bantigue Sandbar:</span> A stunning strip of white sand that emerges during low tide, perfect for sunbathing and beachcombing.<br><br>

<span>4. Antonia Beach:</span> A beautiful beach ideal for snorkeling, featuring vibrant marine life and coral reefs.<br><br>

<span>Marine Life and Eco-Tourism</span><br>
Carles is renowned for its rich marine biodiversity. The local waters teem with various species of fish, making it a prime spot for fishing and seafood. Eco-tourism is on the rise, with efforts to preserve the natural environment while promoting sustainable tourism practices. Visitors can indulge in fresh seafood dishes, particularly the famous "Diwal" or angel wing clam, a local delicacy.<br><br>

<span>How to Get There</span><br>
Carles is accessible by land and sea. From Iloilo City, travelers can take a bus or van to the municipality. The journey takes approximately 3-4 hours. For those heading to the Gigantes Islands, boat trips are available from the Carles port, offering a scenic journey through the Visayan Sea.<br><br>

<span>Conclusion</span><br>
Carles, Iloilo, with its enchanting islands and vibrant marine life, is a hidden gem waiting to be explored. Whether you're an adventurer seeking new landscapes or a traveler yearning for a peaceful escape, Carles promises an unforgettable experience. As tourism grows, the town remains committed to preserving its natural beauty and cultural heritage, ensuring that Carles will continue to captivate visitors for generations to come.</p>
                </div>
            </div>
 
        </section>

        <section class="nt">
            <div id="container">
                <img id="image" src="image/isla/cab.4.jpeg" />
              </div>
              <div id="container">
                <img id="image" src="image/isla/light house.jpeg" />
              </div>
              <div id="container">
                <img id="image" src="image/isla/pawikan cave.jpeg" />
              </div>
        </section>
        <section class="nt">
            <div id="container">
                <img id="image" src="image/isla/antonia.5.avif" />
              </div>
              <div id="container">
                <img id="image" src="image/isla/tangke4.jpg" />
              </div>
              <div id="container">
                <img id="image" src="image/isla/img_9988.jpg" />
              </div>
        </section>

        <!---->


        <div class="container">
    	<h1 class="mt-5 mb-5">Review & Rating System in Gigantes Island</h1>
    	<div class="card">
    		<div class="card-header">Sample Product</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>
</body>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

<style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
</style>

<script>

$(document).ready(function(){

	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>

        
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

          <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Write your Review</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-center">
        <h4>
            <i class="fa fa-star star-light submit_star  mr-1 " id='submit_star_1'  data-rating='1'></i>
            <i class="fa fa-star star-light submit_star  mr-1 " id='submit_star_2' data-rating='2'></i>
            <i class="fa fa-star star-light submit_star   mr-1 " id='submit_star_3' data-rating='3'></i>
            <i class="fa fa-star star-light submit_star  mr-1 " id='submit_star_4' data-rating='4'></i>
            <i class="fa fa-star star-light submit_star  mr-1 " id='submit_star_5' data-rating='5'></i>
        </h4>
        <div class="form-group">
            <input type="text" class="form-control" id='userName' name='userName' placeholder="Enter Name">
        </div>
        <div class="form-group">
        <textarea name="userMessage" id="userMessage" class="form-control" placeholder="Enter message"></textarea>
        </div>
        <div class="form-group">
            <button class="btn-primary" id='sendReview'>Submit</button>
        </div>
        </div>


        


    </body>

    

</html>