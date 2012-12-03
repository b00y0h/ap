<?PHP 
$to = "info@almostparadise.org";

$s_name = $_POST['Name'];
$s_mail = $_POST['Email_address'];

$subject = "Contact Form";


    $headers = "From: Your Website <contact@almostparadise.org>\n";
    $headers .= "Reply-To: $s_name <$s_mail>\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\n";
    $headers .= "X-Priority: 1";

$forward = 1;

$location = "http://www.almostparadise.org/contact/thanks.html";
$date = date ("l, F jS, Y"); 
$time = date ("h:i A"); 

$msg = "Below is the result of your contact form. It was submitted on $date at $time.\n\n"; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    foreach ($_POST as $key => $value) { 
        $msg .= ucfirst ($key) ." : ". $value . "\n"; 
    }
}
else {
    foreach ($_GET as $key => $value) { 
        $msg .= ucfirst ($key) ." : ". $value . "\n"; 
    }
}

mail($to, $subject, $msg, $headers); 
if ($forward == 1) { 
    header ("Location:$location"); 
} 
else { 
    echo "Thank you for submitting our form. We will get back to you as soon as possible."; 
} 

?>