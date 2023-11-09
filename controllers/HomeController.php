<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if ($_SERVER['SERVER_NAME'] != "shetech.org") {
    $path =  "/home/risiequh/";
    require  $path . 'mailer/src/Exception.php';
    require $path . 'mailer/src/PHPMailer.php';
    require $path . 'mailer/src/SMTP.php';
}
class HomeController extends BaseController
{
    function index()
    {
        $this->view->render("home");
    }

    function contactUs()
    {
        $this->view->render("contact");
    }
    function about()
    {
        $this->view->render("about");
    }

    function digital()
    {
        $this->view->render("programs/digital");
    }

    function women()
    {
        $this->view->render("programs/women");
    }
    function girl_child()
    {
        $this->view->render("programs/girl_child");
    }
    function nutriotion()
    {
        $this->view->render("programs/nutriotion");
    }
    function about_us()
    {
        $this->view->render("about-us");
    }
    function get_involved()
    {
        $this->view->render("get-involved");
    }
    function donate()
    {
        $this->view->render("donate");
    }
    function projects()
    {
        $this->view->render("projects/project");
    }

    function donate_list()
    {
        $this->view->render("donate_list");
    }

    function our_team()
    {
        $this->view->render("our_team");
    }

    function shop()
    {
        $this->view->render("shop");
    }

    function health_program()
    {
        $this->view->render("programs/health_progam");
    }
    function cleanWater()
    {
        $this->view->render("programs/clean-water");
    }

    function youthMentorship()
    {
        $this->view->render("programs/youth-mentorship");
    }
    function sendEmail()
    {
        //print_r($_POST);
        $names = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $subject = trim($_POST['subject']);
        $message = trim($_POST['message']);

        $message = "<div style='padding:20px;'> {$message} <hr/> Phone number: {$phone} <br/>Email: {$email} </div>";
        self::send_mail($email, $message, $subject, $names);
        echo "Message sent.";
    }




    function volunteer (){
        print_r($_POST);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $names = trim($_POST['name']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $address = trim($_POST['Address']);
            $dob = trim($_POST['date']);
            $occupation = trim($_POST['Occupation']);
            $message = trim($_POST['message']);
            $message = "<div style='padding:20px;'> Names : $names<Br/>Phone : $phone <Br/>email : $email<br/>DOB : $dob<br/>Occupation : $occupation<Br/>Address : $address <hr/> $message </div>";
            if (! empty($email) or ! empty($message))
                self::send_mail($email, $message, "Volunteer Application", $names);
            $_SESSION['message'] = "Your Application has been sent.";
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
    }

    function send_mail($email, $message, $subject, $names = "Tabaaro Foundation") {
        //Mail
        $mail  = new PHPMailer();

        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = "{$_SERVER['SERVER_NAME']}";  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = "no-reply@{$_SERVER['SERVER_NAME']}";                 // SMTP username
        $mail->Password = '?[k*oBuAcwEg';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;

        $mail->setFrom("no-reply@{$_SERVER['SERVER_NAME']}", $names);
        //$mail->addAddress('ashrikan@gmail.com', 'Ashan');     // Add a recipient
        $reply  = $email;
        $mail->addAddress("info@{$_SERVER['SERVER_NAME']}");               // Name is optional
        $mail->addReplyTo($email, $names);

        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        $mail->clearAllRecipients();
    }
}
