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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BankApp contacts</title>

    <!--csslink-->
    <link rel="stylesheet" href="css/cont.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
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


    <section class="contacts">
        <div class="container">
            <div class="right">
                <img src="image/bg.png" alt="">
            </div>
        </div>
        <div class="left">
            <div class="contactbox">
                <div class="title">
                    <h1>Get in <span>touch</span></h1>
                    <p>For more information, please contact the Carles Tourism Office</p>
                 </div>
                 <input type="text" name="" placeholder="Contact name">
                 <input type="text" name="" placeholder="Street name">
                 <input type="text" name="" class="input1" placeholder="City name">
                 <input type="text" name="" placeholder="Postcode" class="input2">
                 <input type="number" name="" placeholder="Contact Phone name">
                 <input type="email" name="" placeholder="E-mail">
                 <input type="text" name="" placeholder="Let's talk about your idea name">
                 <div class="wrapper">
                    <div class="box">
                        <div class="input-bx">
                            <form action="">
                                <input type="file" id="upload" accept=".doc,.docx,.pdf,.jpg,.png" hidden>
                                 <label for="upload" class="uploadlabel">
                                    <span><i class="fa fa-cloud-upload"></i><br><p>click to upload</p></span> 
                                 </label>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="nda">
                    <form>
                        <input type="checkbox"  name="I want to protect my data by signing an NDA" value="m">
                        I want to protect my data by signing an NDA
                    </form>
                </div>
                <div class="button">
                    <button>SUBMIT</button>
                </div>
                <div class="container1">
                    <div class="main">
                        <i class="fa-solid fa-phone-volume"></i>
                        <div class="details">
                            <h1>Phone</h1><br>
                            <p>+63 923 9283 9283</p>
                        </div>
                    </div>
                    <div class="main">
                        <i class="fa-solid fa-envelope"></i>
                        <div class="details">
                            <h1>E-mail</h1><br>
                            <p>carles@gmail.com</p>
                        </div>
                    </div>
                    <div class="main">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        <div class="details">
                            <h1>Phone</h1><br>
                            <p>+63 923 9283 9283</p>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>




    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="js/script.js"></script>

</body>
</html>