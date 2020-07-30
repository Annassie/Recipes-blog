<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>

<!-- Header -->
<?php require "../blocks/header.php" ?>

<div class="container mt-5">
  <h3>Login</h3>
  <form action="check_login.php" method="post">
    <input type="text" name="login" class="form-control" id="login" placeholder="Enter your login/email"><br>
    <input type="password" name="pass" class="form-control" placeholder="Enter password"><br>
    <button type="submit" name="send" class="btn btn-success">Login</button>
    <p class="mt-3">OR</p>
  </form>
  <form action="register.php" method="post">
        <button type="submit" name="send" class="btn btn-outline-primary" href="/recipes/validation/register.php">Create new user</button>
  </form>
</div>

<!-- Setting and deleting cookie -->
<?php 
    // if($_COOKIE['user'] == 'True')
    //     setcookie('user', 'True', time() - 3600, '/', );
    // else
    //     setcookie('user', 'True', time() + 3600, '/', );

        // '.student.labranet.jamk.fi/~L8360/PHP-harjoitustyo'

    /* When an user entered his credentials and is sign up, it returns to main page */
    //header('Location: /recipes/index.php');
?>

<!-- Footer -->
<?php require "../blocks/footer.php" ?>

</body>
</html>








