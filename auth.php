<?php 
    if($_COOKIE['user'] == 'True')
        setcookie('user', 'True', time() - 3600, '/', );
    else
        setcookie('user', 'True', time() + 3600, '/', );

        // '.student.labranet.jamk.fi/~L8360/PHP-harjoitustyo'

    /* When an user entered his credentials and is sign up, it returns to main page */
    header('Location: /recipes/index.php');
?>