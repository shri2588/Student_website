
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['msg'];

$to = "arvindvish2588@gmail.com";
$subject = "Contact message From The DCSA Website";
$txt = $message;
$headers = "From:".$email . "\r\n";

if(mail($to,$subject,$message,$headers))
{
    ?>
    <script>
        alert ('Submited!!! We will contact you soon...Thankyou.');
        window.open('contact.php','_self');
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert ('Error!!! Please try again after some time.');
        window.open('contact.php','_self');
    </script>
    <?php
}

?>