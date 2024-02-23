<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>

     <!-- font awesome cdn link  --> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
</head>
<body>
    

<link rel="stylesheet" href="style.css">

<div class="container">

    <?php @include 'header.php'; ?>

    <div class="accordion">

        <p class="heading">E'NOTES FAQs</p>

        <div class="faqs">

           <details>

              <summary>I do not receive emails from E'NOTES.</summary>

              <p class="text">

                    Make sure to check the spam folder of GMAIL.
              </p>
           </details>

           <details>

              <summary>I cannot download or view the files.</summary>

              <p class="text">

                Reload the page and try again.

              </p>

           </details>

           <details>

              <summary> Does E'NOTES have any mobile apps?</summary>

              <p class="text">

                E'NOTES does not have any apps.

              </p>
           </details>

           <details>

            <summary>Browser keeps loading when viewing files.</summary>

            <p class="text">

              Clear cache and try again.

            </p>
         </details>


        </div>

     </div>

     <?php @include 'footer.php' ?>


     
    <div class="logout">

        <a href="logout.php">Logout</a>

    </div>
      
</div>
</body>
</html>
