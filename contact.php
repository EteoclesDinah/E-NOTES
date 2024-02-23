<?php

session_start();

?>

<!--

<?php

$conn = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['send']))
{
    $name=$_POST['name'];

    $email=$_POST['email'];

    $number=$_POST['number'];

    $plan=$_POST['plan'];

    $message=$_POST['message'];

    $insert = "INSERT INTO 'contact_form' ('name', 'email','number','plan','message') VALUES ('$name','$email','$number','$plan','$message')";

    mysqli_query($conn, $insert);

    header('location:contact.php');

}

?> 
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

     <!-- font awesome cdn link  --> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
</head>
<body>

    <link rel="stylesheet" href="style.css">

    <div class="container">

        <?php @include 'header.php'; ?>

        <section class="contact" >

            <h1 class="heading"> contact us</h1>


            <form action="" method="post">

            <div class="body">  
                

                <div class="initials">

                    <span>Your Name</span> 
                </div>

                <div class="box">
                    <input type="text" required placeholder="enter your full name" name="name" maxlength="50" >

                </div>


                <div class="initials">
                    <span>Your Email</span>
                </div>

                <div class="box">
                    <input type="text" required placeholder="enter your valid email" name="email" maxlength="50">
                </div>
               


                <div class="initials">
                    <span>Your Number</span>
                </div>

                <div class="box">
                    <input type="text" placeholder="enter your valid number" name="number" max="9999999999" min="0" onkeypress="if(this.value.length ==10) return false;">
                
                </div>

            
                <div class="initials">

                    <span>Select Gender</span>

                </div>
                

                <div class="radio"> 

                    
                    <input type="radio" name="gender" value="male" id="male">

                    <label for="male">male</label>

                    <input type="radio" name="gender" value="female" id="male">

                    <label for="male">female</label>

        
                </div>
 
                <div class="initials">
                    <span>Your Plan</span>
                </div>

                
                <div class="box">

                    <select name="plan">

                        <option value="Complain">Complain</option>

                        <option value="Suggestion">Suggestion</option>

                        <option value="Query">Query</option>

                        <option value="Message">Message</option>

                    </select>
                </div>
                
                
                
                <div class="initials">
                    <span>Your Message</span>
                </div>       

                <div class="box">

                    <textarea name="message" placeholder="enter your message" required cols="30" rows="6"> </textarea>

                </div>
                
                           
                <div class="respond">

                    <input type="submit" value="send message" name="send" class="btn">



                </div>
                 


            </form>

            </div>


        </section>



        <?php @include 'footer.php'; ?>


    
    <div class="logout">

        <a href="logout.php">Logout</a>

    </div>
    
</body>
</html>

