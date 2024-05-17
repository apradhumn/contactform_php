<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="contact.css">
</head>
<?php
// if(!empty($_POST["send"])){
//     $userName = $_POST["userName"];
//     $userEmail = $_POST["userEmail"];
//     $userphone = $_POST["userphone"];
//     $userMessage = $_POST["userMessage"];
//     $toEmail ="agrawalpradhumn35@gmail.com";
//     $mailHeader = "Name: "  . $UserName .
//       "\r\n Email: "  + $userEmail +
//       "\r\n phone: "  + $userphone +
//       "\r\n Message: "  + $userMessage + "\r\n";
//       if(mail($toEmail, $userEmail,$mailHeader)){
//         $message= "your information recived successfully";
//       }
// }

if(!empty($_POST["send"])){
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userphone = $_POST["userphone"];
    $userMessage = $_POST["userMessage"];
    $toEmail = "agrawalpradhumn35@gmail.com";
    $subject = "New contact form submission";
    $mailHeader = "From: " . $userEmail . "\r\n" .
                  "Name: " . $userName . "\r\n" .
                  "Phone: " . $userphone . "\r\n" .
                  "Message: " . $userMessage . "\r\n";

    if(mail($toEmail, $subject, $userMessage, $mailHeader)){
        $message = "Your information was received successfully.";
    } else {
        $message = "There was an error sending your information.";
    }
}
?>
 <body>
    <div class="container">
        <form method="post" name="emailContact">
            <div class="input-row">
                <label for="">Name <em>*</em></label>
                <input type="text" name="userName" required>
            </div>
            <div class="input-row">
                <label for="">Email <em>*</em></label>
                <input type="email" name="userEmail" required>
            </div>
            <div class="input-row">
                <label for="">Phone <em>*</em></label>
                <input type="tel" name="userphone" required>
            </div>
            <div class="input-row">
                <label for="">Message <em>*</em></label>
                <textarea name="userMessage" required></textarea>
            </div>
            <div class="input-row">
                <input type="submit" name="send" value="Submit">
                <?php if(!empty($message)){ ?>
                <div class="success">
                    <strong><?php echo $message; ?></strong>
                </div>
                <?php } ?>
            </div>
        </form>
    </div>
</body>
</html>








</html>