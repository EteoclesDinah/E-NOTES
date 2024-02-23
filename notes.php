<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>

     <!-- font awesome cdn link  --> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
</head>
<body>

    <link rel="stylesheet" href="style.css">

    <div class="container">

        <?php @include 'header.php'; ?>

        <section class="heading">

            <h1 class="title">our notes</h1>

            <p>
                Below we have the notes of 3 engineering fields: <br>
                Bachelor Of Engineering In Computer<br>
                Bachelor Of Engineering In Civil<br>
                Bachelor Of Engineering In Information Technology<br>

                respectively as:

                <div class="field">
                    B.E.COMPUTER<BR>
                    B.E.CIVIL<BR>
                    B.E.IT
                
                </div>

            </p>

        </section>



        <?php @include 'nheader.php'; ?>


        
        
        






        <?php @include 'footer.php'; ?>


    <div class="logout">

        <a href="logout.php">Logout</a>

    </div>
    
</body>
</html>


