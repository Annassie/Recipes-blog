<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Registeration</title>
</head>
<body>

<!-- Header -->
<?php require "../blocks/header.php" ?>

<div class="container mt-5">
  <h3>Add new user</h3>
  <form action="check_register.php" method="post">
    <input type="text" name="name" class="form-control" placeholder="Enter your name"><br>
    <input type="text" name="login" class="form-control" placeholder="Enter your login/email"><br>
    <input type="password" name="pass" class="form-control" placeholder="Enter password"><br>
    <!-- <input type="password" name="password" class="form-control" placeholder="Repeat password"><br> -->
    <button type="submit" name="register" class="btn btn-success">Register</button>
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








