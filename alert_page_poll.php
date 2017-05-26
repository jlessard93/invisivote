<?php $title = "Poll Submitted"; ?>
<?php include 'headerfunction.php'; ?>
<div id="createForm">
<div class="container">

      <div class="starter-template">
          <h1>Success   <i class="glyphicon glyphicon-thumbs-up"></i></h1>
        <p class="lead">Your poll has successfully been added.</p>
        <?php
        
            @ $db = mysqli_connect('localhost', 'root', 'root', 'Invisivote.com');
            
            if(mysqli_connect_errno())
            {
                echo 'Error: Could not connect.';
                exit;
            }
            
            $name = $_POST["pollname"];
            $description = $_POST["description"];
            $categories = $_POST["categories"];
            $visibility = $_POST["visibility"];
            $closedate = $_POST["closedate"];
            $option1 = $_POST["option1"];
            $option2 = $_POST["option2"];
            $option3 = $_POST["option3"];
            $option4 = $_POST["option4"];
            $option5 = $_POST["option5"];
            $option6 = $_POST["option6"];

            $poll = "INSERT INTO Polls (name,description,category,visibility,closedate,option1,option2,option3,option4,option5,option6) VALUES ('$name','$description', '$categories', '$visibility', '$closedate', '$option1', '$option2', '$option3', '$option4', '$option5', '$option6')";
            

        $result = $db->query($poll);
	
         ?>
      </div>

    </div>
</div>
<?php include 'footer.php'; ?>


