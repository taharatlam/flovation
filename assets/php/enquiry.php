<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email']) ){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $com_name = $_POST['com_name']; 
    $com_size = $_POST['com_size'];
    $location = $_POST['location']; 
    $phone = $_POST['phone'];
    $designation = $_POST['designation'];
    $lookingfor = $_POST['lookingfor'];


    require_once "mailer/PHPMailer.php";
    require_once "mailer/SMTP.php";
    require_once "mailer/Exception.php";

    $mail = new PHPMailer();

    // smptp settings
    $mail->isSMTP();
    // $mail->SMTPDebug = 2;
    $mail->Host = "smtp-relay.brevo.com";
    $mail->SMTPAuth = true;
    $mail->Username = "aamir@techmatrick.com";
    $mail->Password = "cHIEd6JrgNCZVbW0";
    $mail->Port = "587";
    $mail->SMTPSecure = "tls";

    // email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("taha.h5363@gmail.com");
    $mail->Subject = ("New Enquiry");
    // $mail->Body = '<br><b>Name &nbsp;:&nbsp;</b>'.$name.'<br><b>Email &nbsp;:&nbsp;</b>'.$email.'<br><b>Phone Number &nbsp;:&nbsp;</b>+'.$phone.'<br><b>I m from &nbsp;:&nbsp;</b>'.$imfrom.'<br><b>I m looking for &nbsp;:&nbsp;</b>'.$imlookingfor.'<br><b>Message :&nbsp;</b>'.$message;
    $mail->Body = '<html><body>';
    $mail->Body .= '<table border="1">';
    $mail->Body .= '<tr><td>Name</td><td>' . $name . '</td></tr>';
    $mail->Body .= '<tr><td>Email</td><td>' . $email . '</td></tr>';
    $mail->Body .= '<tr><td>Company Name</td><td>' . $com_name . '</td></tr>';
    $mail->Body .= '<tr><td>Company Size</td><td>' . $com_size . '</td></tr>';
    $mail->Body .= '<tr><td>Location</td><td>' . $location . '</td></tr>';
    $mail->Body .= '<tr><td>Phone Number</td><td>+' . $phone . '</td></tr>';
    $mail->Body .= '<tr><td>Designation</td><td>' . $designation . '</td></tr>';
    $mail->Body .= '<tr><td>Looking For</td><td>' . $lookingfor . '</td></tr>';
    $mail->Body .= '</table>';
    $mail->Body .= '</body></html>';


    if($mail->send()){
        $status = "success";
        $response = "Email sent successfully";
    }
    else
    {
        $status = "Failed";
        $response = "Something went wrong".$mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response"=> $response)));
}
?>