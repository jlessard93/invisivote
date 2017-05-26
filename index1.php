<?php $title = "Welcome"; ?>
<?php include 'headerfunction.php'; ?>
    <div class="jumbotron">
      <div class="container">
          <h1>Welcome to Invisivote.com</h1>
        <p>The safe and secure way to create and vote on polls.<br> If you don't have an account with Invisivote.com, sign up below.</p>
        <p><a class="btn btn-primary btn-lg" role="button" href="sign_up.php">Sign Up &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Vote Here       <i class="glyphicon glyphicon-ok"></i></h2>
          <p>Want to vote on a poll?</p>
          <p><a class="btn btn-default" href="vote_page.php" role="button">Click Here &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Create a Poll     <i class="glyphicon glyphicon-pencil"></i></h2>
          <p> Want to create your very own poll?</p>
          <p><a class="btn btn-default" href="create_poll.php" role="button">Click Here &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>View Poll Results    <i class="glyphicon glyphicon-list"></i></h2>
          <p> Want to see results of all created polls?</p>
          <p><a class="btn btn-default" href="voting_results.php" role="button">Click Here &raquo;</a></p>
        </div>
      </div>

      <hr>
    <?php include 'footer.php'; ?>
  </body>
</html>
