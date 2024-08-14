<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
    <title>24-contact-us.php</title>
    <link rel="stylesheet" type="text/css" href="css/your-stylesheet.css">
</head>
<body>
<main>
<!--  Add whatever HTML code you need here -->
<h1>24-contact-us.php</h1>



<!-- BELOW IS THE START OF THE PHP SEND MAIL CODE -->
<?php 
if(isset($_POST['submit'])){
    // $to = "email@example.com";              // this is your Email address
    $from = $_POST['email'];                   // this is the sender's Email address
    
    // --------------------------------------- Variables from the <form> go here
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];


    // --------------------------------------- Build the variables for sending 2 emails (to you & to user)
    $subject1 = "Form submission";
    $subject2 = "Copy of your form submission";

    $message1 = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers1 = "From:" . $from;
    $headers2 = "From:" . $to;
    // You can also use header('Location: thank_you.php'); to redirect to another page.

    // ----------------------------------------------- SEND THE EMAILS WITH PHP mail() function
    mail($to,$subject1,$message1,$headers1);        // Sends an email to YOU!
    mail($from,$subject2,$message2,$headers2);      // sends a copy of the message to the sender
 
    // if you are careful you can use the 'echo' command to display HTML
    echo "<h2>Mail Sent. Thank you</h2> " . $first_name . ", we will contact you shortly.";
    
    
    } else {  ?>

<!-- ABOVE IS THE END OF THE PHP SEND MAIL CODE -->

<!-- This HTML form will display if NOT sending an email -->
<form action="" method="post">
   First Name: <input type="text" name="first_name" id="first_name"><br>
   Last Name:  <input type="text" name="last_name" id="last_name"><br>
   Email:      <input type="text" name="email" id="email"><br>
   Message:<br><textarea rows="5" name="message" id="message" cols="50"></textarea><br>
   <input type="submit" name="submit" id="resert" value="Submit Message">
   <input type="reset"  name="reset"  id="reset"  value="Clear Form Data">
</form>

<?php }  ?>    <!-- This line is important is it the ending of the PHP "if/else" statement  -->

<!--  Okay to put HTML BELOW THIS LINE --> 

</main>
</body>
</html> 