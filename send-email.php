<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/PHPMailer-master/src//Exception.php';
require '/PHPMailer-master/src/PHPMailer.php';
require '/PHPMailer-master/src/SMTP.php';


$name = $_POST["name"]
$email = $_POST["email"]
$subject = $_POST["subject"]
$message = $_POST["message"]