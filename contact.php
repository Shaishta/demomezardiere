<?php
  
if($_POST) {
    $name = "";
    $email = "";
    $email_title = "";
    // $subject = "";
    $message = "";
    $email_body = "<div>";
      
    if(isset($_POST['name'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$name."</span>
                        </div>";
    }
 
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }
      
    // if(isset($_POST['email_title'])) {
    //     $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
    //     $email_body .= "<div>
    //                        <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$email_title."</span>
    //                     </div>";
    // }
      
    if(isset($_POST['subject'])) {
        $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Concerned Department:</b></label>&nbsp;<span>".$subject."</span>
                        </div>";
    }
      
    if(isset($_POST['message'])) {
        $message = htmlspecialchars($_POST['message']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$message."</div>
                        </div>";
    }
      
    if($subject == "villa") {
        $recipient = "juliojoson7@gmail.com";
    }
    else if($subject == "residences") {
        $recipient = "pazotlaura982@gmail.com";
    }
    else if($subject == "community") {
        $recipient = "Jeanlouis.mezard@orange.fr";
    }
    else {
        $recipient = "contact@lamardiere.com";
    }
      
    $email_body .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
      
    if(mail($recipient, $email_title, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
      
} else {
    echo '<p>Something went wrong</p>';
}
?>