<?php $title = "Sign Up"; ?>
<?php include 'headerfunction.php'; ?>
<div id="createForm">
<div class="container">

      <div class="starter-template">
          <h1>Success   <i class="glyphicon glyphicon-thumbs-up"></i></h1>
        <p class="lead">You has successfully been added to Invisivote.com</p>
        <?php
        
            @ $db = mysqli_connect('localhost', 'root', 'root', 'Invisivote.com');
            
            if(mysqli_connect_errno())
            {
                echo 'Error: Could not connect.';
                exit;
            }

            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            $user = "INSERT INTO Users (id, firstname,lastname,email,username,password) VALUES (NULL, '$firstname', '$lastname', '$email', '$username', '$password')";

            $result = $db->query($user);
	
         ?>
      </div>
    </div>
</div>

<?php include 'footer.php'; ?>