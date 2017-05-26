<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> FETCH_HEAD
<?php $title = "Voting Results"; ?>
<?php include 'headerfunction.php'; ?>
<div class="col-lg-12">
<br><br>
<center><h1 class="page-header">Results   <i class="glyphicon glyphicon-ok"></i></h1></center>
<<<<<<< HEAD
=======

>>>>>>> FETCH_HEAD
      <?php 
      $con=mysqli_connect("localhost","root","root","Invisivote.com");
      $pollname = $_POST["pollname"];
      
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $votes = mysqli_query($con,'SELECT * FROM Votes WHERE pollsvoted="'.$pollname.'"');
        $polls = mysqli_query($con, 'SELECT * FROM Polls WHERE name="'.$pollname.'"');
        
        echo '<br><br><br><br>';
        echo '<table class ="table table-hover table-striped">';
        echo '<tr>';
            echo '<th>Votes Cast</th>';
            echo '<th>Total</th>';
//            echo '<th>Vote Cast</th>';
        echo '</tr>';
        
        //These are the array variables that will store the names of the votes.
        $votename[0] = NULL;
        $votename[1] = NULL;
        $votename[2] = NULL;
        $votename[3] = NULL;
        $votename[4] = NULL;
        $votename[5] = NULL;

        $i = 0; //This is the counter for the first loop.

        //This loop is to store all the names of the votes that have been voted on.
        while($row = mysqli_fetch_array($polls))
        {       
            $votename[0] = $row['option1'];
            $votename[1] = $row['option2'];
            $votename[2] = $row['option3'];
            $votename[3] = $row['option4'];
            $votename[4] = $row['option5'];
            $votename[5] = $row['option6'];
        }//end while loop.

        //This is to increment each option vote total.
        //Store the total number of votes for all the options.
        $votenametotal[0] = 0;
        $votenametotal[1] = 0;
        $votenametotal[2] = 0;
        $votenametotal[3] = 0;
        $votenametotal[4] = 0;
        $votenametotal[5] = 0;
                
        while($row = mysqli_fetch_array($votes))
        {
            if($votename[0] == $row["voteoption"])
            {
                $votenametotal[0]++;
            }//end if.
            
            if($votename[1] == $row["voteoption"])
            {
                $votenametotal[1]++;
            }//end if.
            
            if($votename[2] == $row["voteoption"])
            {
                $votenametotal[2]++;
            }//end if.
            
            if($votename[3] == $row["voteoption"])
            {
                $votenametotal[3]++;
            }//end if.
            
            if($votename[4] == $row["voteoption"])
            {
                $votenametotal[4]++;
            }//end if.
            
            if($votename[5] == $row["voteoption"])
            {
                $votenametotal[5]++;
            }//end if.

        }//end while loop.
        
        //calculate the total
<<<<<<< HEAD
        $total = 0;
        for($i = 0; i < 6; $i++)
        {
            $total += $votenametotal[$i];
        }
=======
//        $total = 0;
//        for($i = 0; i < 6; $i++)
//        {
//            $total += $votenametotal[$i];
//        }
>>>>>>> FETCH_HEAD
        
        //--------------------------------------------------------------------------------
        /*
                This is for echoing the names and values of the polls.
        */

        for($z = 0; ($z < 6 && $votename[$z] != NULL); $z++)
        {       
            echo '<tr>';

            //Puts the vote name in the table.
            echo '<td>'.$votename[$z].'</td>';

            //Puts the vote name total in the table.
            echo '<td>'.$votenametotal[$z].'</td>';

            echo '</tr>';

        }
//====================================================================================

//        $i = 0;
//
//        while($row = mysqli_fetch_array($polls))
//        {
//            $i++;
//            echo '<tr>';
//                echo '<td>'.$row["voteoption"].'</td>';
//                
//                //this line of code needs to actually have a counter that countshow many times the 
//                //value 'voteoption' 
//                echo '<td><i class="glyphicon glyphicon-ok"></td>';
//            echo '</tr>';
//        }
//====================================================================================

         echo '</table>';
      ?>
  </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <footer>
        <p>&copy; Invisivote.com 2014</p>
      </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<<<<<<< HEAD
=======
=======
<?php $title = "Voting Results"; ?>
<?php include 'header.php'; ?>
<div class="col-lg-12">
<br><br>
<center><h1 class="page-header">Results   <i class="glyphicon glyphicon-ok"></i></h1></center>
      <?php 
      $con=mysqli_connect("localhost","root","root","Invisivote.com");
      $pollname = $_POST["pollname"];

        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $polls = mysqli_query($con,'SELECT * FROM Votes WHERE pollsvoted="'.$pollname.'"');
        
       

        
        echo '<br><br><br><br>';
        echo '<table class ="table table-hover table-striped">';
        echo '<tr>';
            echo '<th>Votes Cast</th>';
            echo '<th>Total</th>';
        echo '</tr>';
//         $i = 0;
//         
//        $optionname[];
//
//        //this is a loop to get the options that have had a vote cast on it
//        while($row = mysqli_fetch_array($polls))
//        {
//            for($i = 0; $optionname[$i] < 6; $i++)
//            {
//                if($optionname[$i] == null)
//                {
//                    $optionname[$i] = $row["voteoption"];
//                    echo '<tr>';
//                    echo '<td>'.$optionname[$i].'</td>'; 
//                }
//            }
//        }
         
         
         //this is a loop to display the results of the options voted on said poll
        while($row = mysqli_fetch_array($polls))
        {            
            echo '<tr>';
                echo '<td>'.$row["voteoption"].'(Only show options that have been cast and no repeats)</td>';
                echo '<td>Counter for how many time a vote hasbeen cast on an option</td>';
            echo '</tr>';
        }
         echo '</table>';
      ?>
  </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <footer>
        <p>&copy; Invisivote.com 2014</p>
      </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

>>>>>>> FETCH_HEAD
>>>>>>> FETCH_HEAD
