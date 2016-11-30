<?php
require_once("connection.php");
?>
<div class="container">
    <div class="row">
        <div id="signin" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form class="form-signin" method="POST" action="login.php">
                <h2 class="form-signin-heading">Logga in</h2>
                <label for="logInputUser" class="sr-only">Användarnamn</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user-o fa-fw"></i></span>
                    <input id="logInputUser" class="form-control" type="text" name="username" placeholder="Användarnamn"
                           required>
                </div>
                <label for="logInputPass" class="sr-only">Lösenord</label>
                <div class="input-group">
                    <span class="input-group-addon password-group-span"><i class="fa fa-key fa-fw"></i></span>
                    <input id="logInputPass" class="form-control" type="password" name="password" placeholder="Lösenord"
                           required>
                </div>
                <input class="btn btn-block btn-primary" type="submit" value="Logga in"/>
            </form>
        </div>
        <div id="register" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form class="form-signin" method="POST" action="register.php">
                <?php
                if (isset($regsuccess)) { ?>
                    <div class="alert alert-success" role="alert"> <?php echo $regsuccess; ?> </div>
                <?php }
                if (isset($regfail)) { ?>
                    <div class="alert alert-danger" role="alert"> <?php echo $regfail; ?> </div>
                <?php } ?>
                <h2 class="form-signin-heading">Registrera</h2>
                <label for="regInputUser" class="sr-only">Användarnamn</label>
                <div class="input-group">
                    <span class="input-group-addon password-group-span"><i class="fa fa-user-o fa-fw"></i></span>
                    <input id="regInputUser" class="form-control" type="text" name="username" placeholder="Användarnamn"
                           required>
                </div>
                <label for="regInputPass" class="sr-only">Lösenord</label>
                <div class="input-group">
                    <span class="input-group-addon password-group-span"><i class="fa fa-key fa-fw"></i></span>
                    <input id="regInputPass" class="form-control" type="password" name="password" placeholder="Lösenord"
                           required>
                </div>
                <input class="btn btn-block btn-primary" type="submit" value="Registrera"/>
            </form>
        </div>
    </div>
</div>