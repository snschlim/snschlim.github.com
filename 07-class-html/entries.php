 <?php $to = "knotandwhimsy@gmail.com"; $subject = "Custom";
 $email = $_REQUEST['email'] ; $message = $_REQUEST['message'] ;
 $headers = "From: $email"; $sent = mail($to, $subject, $message, $headers) ;
 if($sent) {print "Your request was sent successfully."; } 
 else {print "We encountered an error sending your request."; } ?> 