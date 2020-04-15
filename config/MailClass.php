<?php




/**
 * smtp server = smtp.ionos.fr
 * ssl port 993
 */



    function sendVerificationEmail($userEmail, $token)
    {
        $transport = (new Swift_SmtpTransport('smtp.ionos.fr', 465, 'ssl'))
            // gmail
            ->setUsername("contact@eternam.app")
            // password
            ->setPassword("Helysia69!");

        $mailer = new Swift_Mailer($transport);

        $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Test mail</title>
      <style>
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
        <p>Thank you for signing up on our site. Please click on the link below to verify your account:.</p>
        <a href="http://localhost:8080/wazaga_fiver/verify_email.php?token=' . $token . '&email=' . $userEmail . ' ">Verify Email!</a>
      </div>
    </body>

    </html>';

        // Create a message
        $message = (new Swift_Message('Verify your email'))
//        sender email
            ->setFrom("contact@eternam.app")
            ->setTo($userEmail)
            ->setBody($body, 'text/html');

        // Send the message
        $result = $mailer->send($message);

        if ($result > 0) {
            return true;
        } else {
            return false;
        }
    }

