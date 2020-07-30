<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Contact us</title>
</head>
<body>

  <!-- Header -->
  <?php require "../blocks/header.php" ?>

  <div class="container mt-5">
    <form action="contact.php" method="post">
    <br>
    <button type="submit" name="send" class="btn btn-success">Back</button>

      <?php 
        $email = $_POST['email'];
        $message = $_POST['message'];

        $error = '';

        /* Checking content of the input  */
        if(trim($email) == '')
          $error = 'Enter your email';
        else if(trim($message) == '')
          $error = 'Enter your message';
        else if(strlen($message) < 10)
          $error = 'Your message is too short. The message must contain more than 10 signs';

        /* Checking error */
        if($error != ''){
          echo $error;
          exit;
      }

        /* Message sending */
        $subject = "=?utf-8?B?".base64_encode("Test message")."?=";
        $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

        mail('L8360@student.jamk.fi', $subject, $message, $headers);

        /* If message was sending successfully, it returns to contact.php-page */
        header('Location: /recipes/contact/contact.php');
      ?>
      
  </form>
  </div>

  <!-- Footer -->
  <?php require "../blocks/footer.php" ?>

</body>
</html>



