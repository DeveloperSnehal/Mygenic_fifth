<?php include("header.php"); ?>

<section class="page_breadcrumbs_Contact-Us ds color parallax section_padding_top_75 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Contact Us</h2>
                <ol class="breadcrumb highlightlinks">
                    <li> <a href="index.php"> Home </a> </li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="ls section_padding_top_100 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <section id="map" class="ls ms" data-address="Terracina, LT, Italia">
                    <!-- marker description and marker icon goes here -->
                    <div class="map_marker_description">
                        <div class="contact-map mt-5">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.74559106062188!2d73.08760406805347!3d19.02282990000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e9e98b244589%3A0x45d816890bc90b8f!2sMygenic%20Healthcare%20Pvt.%20Ltd.!5e0!3m2!1sen!2sus!4v1687788269789!5m2!1sen!2sus"
                                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row topmargin_40">
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight2 size_normal"> <i class="rt-icon2-phone5"></i> </div>
                    <p> <span class="grey">Phone:</span> +91 9867592446</p>
                </div>
            </div>
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight2 size_normal"> <i class="rt-icon2-location2"></i> </div>
                    <p> Office No- 2 Plot No- 98,<br> Sector 35 Dolphin Platinum Kamothe, <br> Navi Mumbai, Maharashtra,
                        India </p>
                </div>
            </div>
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight2 size_normal"> <i class="rt-icon2-mail"></i> </div>
                    <p>info@mygenichealthcare.com</p>
                </div>
            </div>
        </div>
        <div class="row topmargin_40">
            <div class="col-sm-12 to_animate">
                <form class="contact-form columns_padding_5" method="post" action="contact.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="form-group"> <label for="name">Full Name <span class="required">*</span></label>
                                <i class="fa fa-user highlight2" aria-hidden="true"></i> <input type="text"
                                    aria-required="true" size="30" value="" name="name" id="name" class="form-control"
                                    placeholder="Full Name">
                            </p>
                            <p class="form-group"> <label for="email">Email address<span
                                        class="required">*</span></label> <i class="fa fa-envelope highlight2"
                                    aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value=""
                                    name="email" id="email" class="form-control" placeholder="Email Address">
                             </p>

                             <p class="form-group"> <label for="email">Contact No<span
                                        class="required">*</span></label> <i class="fa fa-envelope highlight2"
                                    aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value=""
                                    name="tel" id="email" class="form-control" placeholder="Contact No">
                             </p>

                            <p class="form-group"> <label for="subject">Subject<span class="required">*</span></label>
                                <i class="fa fa-flag highlight2" aria-hidden="true"></i> <input type="text"
                                    aria-required="true" size="30" value="" name="subject" id="subject"
                                    class="form-control" placeholder="Subject">
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="contact-form-message form-group"> <label for="message">Message</label> <i
                                    class="fa fa-comment highlight2" aria-hidden="true"></i> <textarea
                                    aria-required="true" rows="3" cols="45" name="message" id="message"
                                    class="form-control" placeholder="Message"></textarea>
                             </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="contact-form-submit text-center topmargin_10"> <button type="submit"
                                    id="contact_form_submit" name="contact_submit"
                                    class="theme_button wide_button color2">Send Message</button> </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-----Mailer-Function----->

<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['contact_submit'])) { // Changed the name to "submit"
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    //Load Composer's autoloader
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = 'developer.creativemarque@gmail.com'; //SMTP username
        $mail->Password = 'pcdmgrngpaihiojh'; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('developer.creativemarque@gmail.com', 'Mailer');
        $mail->addAddress('developer.creativemarque@gmail.com', 'MyGenic Contact'); //Add a recipient


        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Contact Form Mygenic UK Site';
        $mail->Body = "Sender Name - $name <br> Sender Email - $email <br> Sender Phone No - $tel <br> Subject - $subject <br> Message - $message";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<?php include("footer.php") ?>