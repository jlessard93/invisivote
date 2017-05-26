<?php $title = "Sign Up"; ?>
<?php include 'headerfunction.php'; ?>
<div class="container">
    <br><br><br><br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend><i class="glyphicon glyphicon-user"></i></a> Sign Up</legend>
            <form action="alert_page_signup.php" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="firstname" placeholder="First Name" type="text"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                </div>
            </div>
            <br>
            <input class="form-control" name="email" placeholder="Email" type="email" />
            <br>
            <input class="form-control" name="username" placeholder="Username" type="username" />
            <br>
            <input class="form-control" name="password" placeholder="Password" type="password" />
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">
                Sign up</button>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
