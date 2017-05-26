<?php
function authenticate()
{
    if (isset($_POST['username']) && isset($_POST['password']))
    { 
        // if the user has just tried to log in
        $user = $_POST['username'];
        $password = $_POST['password'];
        
        $query = 'SELECT * FROM Users where username="'.$username.'" and password="'.$password.'"';
        
        include 'db_connect.php'; //link to your database 

        $result = $db->query($query);
        $num_rows=$result->num_rows;
        
        if ($num_rows > 0)
        {
          $_SESSION['username'] = $user;   // if they are in the database register the user id
          $db->close();
        }
    } 
    //if isset post username and post password
    if (isset($_SESSION['username']))
    {
        { 
            echo 'You are logged in as <strong> '
                   . ''.$_SESSION['username'].'</strong>';
        }
     }
}
 ?>
