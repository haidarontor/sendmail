<?php 
if(isset($_POST['submit'])){
    $to = "haidarcse2017@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
   // $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    //$headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Contact Form</h1>
    <form class="cf" method="post" action="">
        <div class="half left cf">
            <input type="text" id="first-name" placeholder="First Name" name="first_name">
            <input type="text" id="last-name" placeholder="Last Name" name="last_name">
            <input type="email" id="input-email" placeholder="Email address" name="email">         
        </div>
        <div class="half right cf">
            <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
        </div>
        <input type="submit" value="Submit" id="input-submit" name="submit">
    </form>

</body>
</html>