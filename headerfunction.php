<?php
    session_start();

    //if($_SESSION['loggedin'] == null)
    //{
        //$_SESSION['loggedin']=FALSE;
    //}

    if($_SESSION['loggedin']==TRUE)
    {
        include 'header2.php';
    }
    else
    {
        include 'header.php';
    }
?>


