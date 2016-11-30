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
                <button class="btn btn-block btn-primary" type="submit"><span><i class="fa fa-sign-in fa-lg"></i></span>
                    Logga in
                </button>
            </form>
        </div>
        <div id="register" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form class="form-signin" method="POST" action="register.php">
                <?php
                if (isset($regsuccess)) { ?>
                    <div class="alert alert-success"
                         role="alert"> <?php echo $regsuccess; ?> </div><!--Är alerten satt, så säger den att du registrerades-->
                <?php }
                if (isset($regfail)) { ?>
                    <div class="alert alert-danger"
                         role="alert"> <?php echo $regfail; ?> </div><!--Är alerten satt, så säger den att du INTE registrerades-->
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
                    <span class="input-group-addon password-group-span"><i
                            class="fa fa-key fa-fw"></i></span>
                    <input id="regInputPass" class="form-control" type="password" name="password" placeholder="Lösenord"
                           required>
                </div>
                <buttton class="btn btn-block btn-primary" type="submit"><span><i class="fa fa-user-plus"></i></span>
                    Registrera
                </buttton>
            </form>
        </div>
    </div>
</div>