<?php $title = "Sign Up"; ?>
<?php include 'headerfunction.php'; ?>
<div id="createForm">
<div class="container">
    <?php $_SESSION['loggedin']=FALSE;
            session_destroy();?>
      <div class="starter-template">
          <h1>Success   <i class="glyphicon glyphicon-thumbs-up"></i></h1>
        <p class="lead">You has successfully logged out of Invisivote.com</p>
      </div>
    </div>
</div>

<?php include 'footer.php'; ?>