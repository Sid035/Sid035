<?php 

		require("conn.php");
			
		$name = $_POST['name'];
        $mobile_number = $_POST['mobile_number'];
        $address = $_POST['address'];
        $date = $_POST['date'];
        $email_id= $_POST['email'];	
			
		$sql = "INSERT INTO user(name, mobile_number, address, date, email_id) VALUES (?, ?, ?, ?, ?)";
		if($stmt = mysqli_prepare($conn, $sql)){
	    mysqli_stmt_bind_param($stmt, "sisss", $name, $mobile_number, $address, $date, $email_id);
	
			
		
			
			if(mysqli_stmt_execute($stmt)){
				echo "Records inserted successfully.";
				header("Location: confirm.php");
			} else{
				echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
			}
		} else {
			echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
		}

		?>
		<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('includes/Exception.php');
require('includes/SMTP.php');
require('includes/PHPMailer.php');

if(isset($_POST['sub']))
{ 
    $name=$_POST['name'];
    $email_id=$_POST['email'];
    $date_time=$_POST['date'];
    
    $mail = new PHPMailer(true);
    try {
        //Server settings
                           
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = ' smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'sidsne19@gmail.com';                     //SMTP username
        $mail->Password   = 'siddeshsneha';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('sidsne19@gmail.com', 'RENOVATE');
        $mail->addAddress($_POST['email']);     //Add a recipient
        
         //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Reminder-Your apoointment on $date_time";
        $mail->Body    = "Dear $name ,<br> Thank you for booking an appointment <br>This is a friendly reminder confirming your appointment with $name,on $date_time  .<br>If you have any question or you need to reschedule, please call our office at 9324609442.<br>Otherwise we look forward to seeing, you on $date_time .<br>Have a wonderful day! <br>Warm regards,<br> TEAM RENOVATE ";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo '';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
		