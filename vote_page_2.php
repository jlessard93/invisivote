<?php $title = "Vote Here On A Poll"; ?>
<?php include 'headerfunction.php'; ?>
<?php
    $con=mysqli_connect("localhost","root","root","Invisivote.com");
    
            
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $id = $_POST['id'];
    
    $info = mysqli_query($con,'SELECT * FROM Polls where id="'.$id.'"');
    
    //this invokes a function to take the specific row associated with the id
    $row = $info->fetch_assoc();
    
    $name = $row['name'];
    $description= $row['description'];
    $option1 = $row['option1'];
    $option2 = $row['option2'];
    $option3 = $row['option3'];
    $option4 = $row['option4'];
    $option5 = $row['option5'];
    $option6 = $row['option6'];
?>
    <div class="col-lg-12">
        <br><br>
        <center><h1 class="page-header">VOTE HERE   <i class="glyphicon glyphicon-ok"></i></h1></center>
          <div id="voteForm">
              <form class="form-horizontal" method="post" action="alert_page_vote.php">
        <div class="control-group">
          <label class="control-label" for="pollname" name="pollname"><?php echo $name;?></label>
          <br>
          <div class="controls">                     
              <textarea id="title&amp" name="polldescription" readonly style="margin: 0px; width: 250px; height: 100px;"><?php echo $description; ?></textarea>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="options">Options:</label>
          <div class="controls">
            <label class="radio" for="options-0">
              <input type="radio" name="option" id="options-0" value="<?php echo $option1; ?>">
              <?php   echo $option1; ?>
            </label>
            <label class="radio" for="options-1">
              <input type="radio" name="option" id="options-1" value="<?php echo $option2; ?>">
              <?php   echo $option2; ?>
            </label>
            <label class="radio" for="options-2">
              <input type="radio" name="option" id="options-2" value="<?php echo $option3; ?>">
              <?php   echo $option3; ?>
            </label>
            <label class="radio" for="options-3">
              <input type="radio" name="option" id="options-3" value="<?php echo $option4; ?>">
              <?php   echo $option4; ?>
            </label>
            <label class="radio" for="options-4">
              <input type="radio" name="option" id="options-4" value="<?php echo $option5; ?>">
              <?php   echo $option5; ?>
            </label>
            <label class="radio" for="options-5">
              <input type="radio" name="option" id="options-5" value="<?php echo $option6; ?>">
              <?php   echo $option6; ?>
            </label>
              <input type="hidden" name="pollname" value="<?php echo $name; ?>">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="submitbutton"></label>
          <div class="controls">
            <button id="submitbutton" name="submitbutton" class="btn btn-success">Submit Vote</button>
          </div>
        </div>
      </form>
    </div>
          </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <footer>
        <p>&copy; Invisivote.com 2014</p>
      </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>