<?php $title = "Voting Results"; ?>
<?php include 'headerfunction.php'; ?>

<div class="col-lg-12">
    <br><br>
    <center><h1 class="page-header">Results   <i class="glyphicon glyphicon-list"></i></h1></center>
</div>
<br>
<?php
    $con=mysqli_connect("localhost","root","root","Invisivote.com");

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $polls = mysqli_query($con,"SELECT * FROM Votes");
    
    echo '<br><br><br><br>';
    echo '<table class ="table table-hover table-striped">';
    echo '<tr>';
        echo '<th> Poll Name </th>';
        echo '<th>Option Selected</th>';
        echo '<th>Associative Vote Number</th>';
        echo '<th></th>';
    echo '</tr>';
    
    while($row = mysqli_fetch_array($polls))
    {
            echo '<tr>';
                echo '<td>'.$row['pollsvoted'].'</td>';
                echo '<td>'.$row['voteoption'].'</td>';
                echo '<td>'.$row['votenum'].'</td>';
                echo '<td><form action="voting_results_2.php" method="post"><input type="hidden" name="pollname" value="'.$row['pollsvoted'].'"> <button type="submit" class="btn btn-primary">See More</button></td></form>';
            echo '</tr>';
    }
    echo '</table>';
?>		
		

<?php include 'footer.php'; ?>