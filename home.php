<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

     <!-- font awesome cdn link  --> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>

<link rel="stylesheet" href="style.css">

<div class="container">

    <?php @include 'header.php'; ?>

    <section class="home">

        <div class="background" style="background:url(images/1) no repeat">

            <div class="content">

                <h1> E'NOTES</h1>
                
                <P style="line-height=120%">
                    E'NOTES is a note sharing website created by our team: Manish Bhomjan, Kamala Rai Danuwar, Ganga Shresthaa and Sandhya Jayswal; Second Year; Fourth Semester; computer students as a MINI PROJECT. 
                </P>
            </div>
    
        </div>
    </section>

    <section class="services">

        <h1 class="heading"> our services</h1>
        
            <div class="content">

                 <p>
                    1. We have notes of all subject. <br>
                    2. The files can be downloaded. <br>
                    3. You can view them in realtime in the website. <br>
                    4. You can message us if You have got any problems via the "contact" section. <br>
                 </p>

            </div>
    </section>

    <?php @include 'footer.php'; ?>


    <div class="logout">

        <a href="logout.php">Logout</a>

    </div>

</body>
</html>