<?php

  $firstname = $_POST['first'];
  $lastname = $_POST['last'];
  $gender=$_POST['gender'];
  $visitor_email = $_POST['email'];
  $visitor_phone = $_POST['phone'];
  $message = $_POST['message'];


?>

<?php

    $email_from = '3196040@us-imm-node4c.000webhost.io';

     $email_subject = "Contact";

      $email_body = "You have received a new message from the user $firstname $lastname\n".
                    "Gender: $gender\n".
                    "Contact email: $visitor_email\n".
                    "Phone number: $visitor_phone\n".
                    "Here is the message: $message";

?>

<?php

  $to = "phan.tan.brussels@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
 ?>
