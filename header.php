<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Invisivote - <?php echo $title ;?></title>
    <link rel="shortcut icon" img href="images/favicon.ico" />
    
    <link href="bootstrapcss/bootstrap.min.css" rel="stylesheet">

    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index1.php">Invisivote</a>
        </div>
          
         
          
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li><a href="about_us.php">About Us</a></li>
      <li><a href="contact_us.php">Contact Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Connect With Us <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="https://twitter.com/Invisivote">Twitter</a></li>
            <li><a href="https://www.facebook.com/pages/Invisivotecom/239082439610678">Facebook</a></li>
          </ul>
        </li>
      </ul>
        <form class="navbar-form navbar-right" action="alert_page_signin.php" role="form" method="post">
            <div class="form-group">
              <input type="text" name="username" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
              <button type="submit" class="btn btn-success">Log In</button>
          </form>
        </div>
      </div>
    </div>
   