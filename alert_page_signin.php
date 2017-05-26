<?php $title = "Sign In"; ?>
<?php include 'headerfunction.php'; ?>
<div id="createForm">
<div class="container">

      
        <?php
        
            @ $db = mysqli_connect('localhost', 'root', 'root', 'Invisivote.com');
            
            if(mysqli_connect_errno())
            {
                echo 'Error: Could not connect.';
                exit;
            }

            $Username = $_POST['username'];
            $Password = $_POST['password'];

            $info = mysqli_query($db,'SELECT * FROM Users WHERE username="'.$Username.'"');
   
            //this invokes a function to take the specific row associated with the id
            $row = $info->fetch_assoc();
   
<<<<<<< HEAD
            $somePass= $row['password'];
=======
            $somePass = $row['password'];
>>>>>>> FETCH_HEAD
   
            if($Password == $somePass)
            {
               echo '<div class="starter-template">
                <h1>Success   <i class="glyphicon glyphicon-thumbs-up"></i></h1>
                <p class="lead">You has successfully been added to Invisivote.com</p>';
                $_SESSION['loggedin']=TRUE;
            }
            else if($Password != $somePass)
            {
                echo '<div class="starter-template">
                <h1>Password or Username is incorrect  <i class="glyphicon glyphicon-thumbs-down"></i></h1>
                <p class="lead">Try again!</p>';
                $_SESSION['loggedin']=FALSE;
            }
         ?>
      </div>
    </div>
</div>

<?php include 'footer.php'; ?>