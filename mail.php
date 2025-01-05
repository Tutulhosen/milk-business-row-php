<?php











//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
if (isset($_POST["name"])){

  $name=($_POST['name']);
  $company=($_POST['company']);
  $phone=($_POST['phone']);
  $email=($_POST['email']);
  $site=($_POST['site']);
  $view=($_POST['view']);

  $productname=($_POST['productname']);

  




if(!empty($email)){

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through //need
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'faysalkabir573@gmail.com';                     //SMTP username //need
    $mail->Password   = 'zltd wnxg gwut ddfg';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('faysalkabir573@gmail.com', 'Handicrafts');              //need
    $mail->addAddress('bdhandicrafts2023@gmail.com', 'Handicrafts');     //Add a recipient //need
    //if add another gmail thats u want to sent mail
   // $mail->addAddress('ellen@example.com');               //Name is optional
   // $mail->addReplyTo('faysalkabir573@gmail.com', 'Handicrafts another');
    //if u want to cc someone that's optional
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments if we want to sent files
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Message from Handicrafts';
    $mail->Body    = '




<body style="background-color: #f5f5f5;">
  <div class="email-wrapper"style="max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0 0 0 0.2);">
    <div class="header"style="  text-align: center;
    margin-bottom: 20px;">
      <h1 style=" color: #ff0066;
      font-size: 24px;
      margin-bottom: 10px;">Welcome to our Newsletter!</h1>
      <p style=" color: #999999;
      font-size: 16px;">Stay up to date with the latest news and information.</p>
    </div>

    <div class="content"style="   padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
    margin-bottom: 20px;">
      <h2 style="  color: #333333;
      font-size: 20px;
      margin-bottom: 10px;">

      <h1>Company Information</h1>
      <table border="1">
          <tr>
              <th>Name</th>
              <th>Telephone</th>
              <th>Email</th>
              <th>Website</th>
             
          </tr>
          <tr>
              <td>'. $name .'</td>
              <td>'. $phone .'</td>
              <td>'.  $email . '</td>
              <td>
              <a href=" '.$site.' " target="_blank"> ' . $company . ' </a>
              </td>

          </tr>
        
          <!-- Add more rows as needed -->
      </table>



      <p style="  color: #666666;
      font-size: 16px;
      line-height: 1.5;">'.  $view .'</p>
    </div>

    <div class="cta-button" style="text-align: center;
    margin-top: 20px;">
      <a href="https://bdhandicrafts.biz/product-detail?product_id='. $productname .' " style="display: inline-block;
      padding: 10px 20px;
      background-color: #ff0066;
      color: #ffffff;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;" target="_blank">Visit Products</a>
    </div>

    <div class="footer"style=" text-align: center;
    color: #999999;
    font-size: 14px;">
      <p>&copy; 2023 Your Company. All rights reserved.</p>
    </div>
  </div>
</body>




					';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


}
}
