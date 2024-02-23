<?php

session_start();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

<!-- for social media logo -->

     <!-- font awesome cdn link  --> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>
<body>

    <link rel="stylesheet" href="style.css">

    <div class="container">

        <?php @include 'header.php'; ?>

        <section class="about">

            <h4> about us</h4>

            <p>
                We: our team; Manish Bhomjan , Kamala Rai Danuwar, Ganga Shrestha and Sandhya Jayswal are Year Second, Compuer Students. <br>
                We created this Website as our MINI PROJECT. <br>
                We used a simple programming language PHP (HyperText Preprocessor): a powerful tool and generally called as a server scripting language, HTML (Hyper Text Transfer Protocol), CSS (Cascading Style Sheets ). <br>
                We also used Visual Studio Code to integrate all these into a single domain and MYSQL server to execute our Website. <br> 
            </p>

        </section>

        <section class="team">

            <h1 class="heading"> our team</h1>

            <div class="box-container">

                

                <div class="box">
                    <img src="images/kamala.jpg" alt="" height=50% width=60%>

                    <h3> Kamala Rai Danuwar</h3>

                    <p>Student</p>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        
                    </div>
                    
                </div>

                <div class="box">

                    <img src="images/manish.jpg" alt="" height=50% width=60%>

                    <h3> Manish Bhomjan</h3>

                    <p>Student</p>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        
                    </div>

                </div>

                <div class="box">
                    <img src="images/ganga.jpg" alt="" height=50% width=60%>

                    <h3> Ganga Shrestha</h3>

                    <p>Student</p>
                    
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        
                    </div>
                </div>

                <div class="box">
                    <img src="images/sandhya.jpg" alt="" height=50% width=60%>

                    <h3> Sandhya Jayswal</h3>

                    <p>Student</p>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-twitter"></a>
                    </div>
                    
                </div>
            </div>
        </section>

        
        <?php @include 'footer.php'; ?>

    
    <div class="logout">

        <a href="logout.php">Logout</a>

    </div>
       
</body>
</html>