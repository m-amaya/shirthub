<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    
    // Making sure name, email, and message have values
    if($name=="" OR $email=="" OR $message=="") {
        echo "You must specify a value for a name, email, and message.";
        exit();
    }
    
    // Email Header Injection Exploit Check (nyphp.org)
    foreach ( $_POST as $value ) {
        if(stripos($value,'Content-Type:') != FALSE) {
            echo "There was a problem with the information you entered.";
            exit();
        }
    }
    
    // Robot scraping check
    if ($_POST["address"] != "") {
        echo "Your form submission has an error.";
        exit();
    }
    
    // Using PHPMailer to send the email
    require_once('inc/phpmailer/class.phpmailer.php');
    $mail = new PHPMailer();
    if(!$mail -> ValidateAddress($email)) {
        echo "You must specify a valid email address.";
    }
    
    // Compose email message
    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "<br>";
    $email_body = $email_body . "Email: " . $email . "<br>";
    $email_body = $email_body . "Message: " . $message;
    
    // Send email
    $mail->SetFrom($email, $name);    
    $address = "marissa.amaya.311@gmail.com"; // USE YOUR EMAIL ADDRESS HERE TO TEST
    $mail->AddAddress($address, "ShirtHub");
    $mail->Subject = "ShirtHub Contact Form Submission | " . $name;    
    $mail->MsgHTML($email_body);
        
    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
      exit();
    }
    
    header("Location: contact.php?status=thanks");
    exit();
}

?><?php
$pageTitle = "Contact Us";
$section = "contact";
include('inc/header.php'); ?>

    <div class="section page">
        
        <div class="wrapper">
            <h1><?php echo $pageTitle; ?></h1>
            
            <?php if(isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <p>Thank you! We&rsquo;ll be in touch!</p>
            <?php } else { ?>
                <p>We&rsquo;d love to hear from you! Please complete the form to send us an email!</p>
                
                <form method="post" action="contact.php">
                    <table>
                        <tr>
                            <th><label for="name">Name</label></th>
                            <td><input type="text" name="name" id="name"></td>
                        </tr>
                        <tr>
                            <th><label for="email">Email</label></th>
                            <td><input type="text" name="email" id="email"></td>
                        </tr>
                        <tr>
                            <th><label for="message">Message</label></th>
                            <td><textarea name="message" id="message"></textarea></td>
                        </tr>
                        <!-- Extra row to check for robot scraping -->
                        <tr style="display: none;">
                            <th><label for="address">Address</label></th>
                            <td><textarea name="address" id="address"></textarea></td>
                        </tr>  
                    </table>
                    
                    <input type="submit" value="Send">
                    
                </form>
            <?php } ?>
            
        </div>
        
    </div>
    
<?php include('inc/footer.php'); ?>	