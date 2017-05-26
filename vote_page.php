<?php $title = "Vote Here"; ?>
<?php include 'headerfunction.php'; ?>

<div class="col-lg-12">
    <br><br>
    <center><h1 class="page-header">Polls   <i class="glyphicon glyphicon-list"></i></h1></center>
</div>
<br>
<?php
    $con=mysqli_connect("localhost","root","root","Invisivote.com");

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $polls = mysqli_query($con,"SELECT * FROM Polls");
    
    echo '<br><br><br><br>';
    echo '<table class ="table table-hover table-striped">';
    echo '<tr>';
        echo '<th> Poll Name </th>';
        echo '<th>Description </th>';
        echo '<th></th>';
    echo '</tr>';
    
    while($row = mysqli_fetch_array($polls))
    {
            echo '<tr>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['description'].'</td>';
                echo '<td><form action="vote_page_2.php" method="post"><input type="hidden" name="id" value="'.$row['id'].'"> <button type="submit" class="btn btn-primary">Vote</button></td></form>';
            echo '</tr>';
    }
    echo '</table>';
?>

<?php include 'footer.php'; ?>