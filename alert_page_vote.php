<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> FETCH_HEAD
<?php $title = "Vote Submitted"; ?>
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

    $pollname = $_POST['pollname'];
    $option = $_POST['option'];
    $votenum = rand(0,500000);

?>
      <div class="starter-template">
          <h1>Success   <i class="glyphicon glyphicon-thumbs-up"></i></h1>
          <p class="lead">Your vote has successfully been counted.<br>Your associative random number for your vote is: <?php echo $votenum; ?>
              <br>
              Make sure to write down this number!
              <br><br>
          <a class="btn btn-default" href="voting_results.php" role="button">See Results &raquo;</a>
          </p>
    <?php
    
        $vote = "INSERT INTO Votes (id,pollsvoted,votenum,voteoption) VALUES (null,'$pollname','$votenum', '$option')";
        $result = $db->query($vote);
    ?>          
      </div>
    </div>
</div>
<?php include 'footer.php'; ?>

<<<<<<< HEAD
=======
=======
<?php $title = "Vote Submitted"; ?>
<?php include 'header.php'; ?>
<div id="createForm">
<div class="container">
<?php
    @ $db = mysqli_connect('localhost', 'root', 'root', 'Invisivote.com');

    if(mysqli_connect_errno())
    {
        echo 'Error: Could not connect.';
        exit;
    }

    $pollname = $_POST['pollname'];
    $option = $_POST['option'];
    $votenum = rand(0,500000);

?>
      <div class="starter-template">
          <h1>Success   <i class="glyphicon glyphicon-thumbs-up"></i></h1>
          <p class="lead">Your vote has successfully been counted.<br>Your associative random number for your vote is: <?php echo $votenum; ?>
              <br>
              Make sure to write down this number!
              <br><br><br>s
              <a class="btn btn-default" href="voting_results.php" role="button">See Results &raquo;</a>
          </p>
    <?php
    
        $vote = "INSERT INTO Votes (id,pollsvoted,votenum,voteoption) VALUES (null,'$pollname','$votenum', '$option')";
        $result = $db->query($vote);
    ?>          
      </div>
    </div>
</div>
<?php include 'footer.php'; ?>

>>>>>>> FETCH_HEAD
>>>>>>> FETCH_HEAD
