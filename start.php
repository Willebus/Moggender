<?php
require_once("connection.php");

if (isset($_POST["username"]) && isset($_POST["password"]))
{
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $stmt = $conn->prepare("INSERT INTO `user` (username, password) VALUES (:username, :password)");
    $result = $stmt->execute(array(
        ":username" => $username,
        ":password" => $password
    ));
    if($result)
    {
        $smsg = "Registrering lyckades!";
    }
    else
    {
        $fmsg = "Registrering misslyckades!";
    }
}
    ?>
<div class="container">
    <div class="row">
        <div id="signin" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form class="form-signin" method="POST">
                <h2 class="form-signin-heading">Logga in</h2>
                <label for="inputUsername" class="sr-only">Användarnamn</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user-o fa-fw"></i></span>
                    <input id="inputUsername" class="form-control" type="text" name="username"  placeholder="Användarnamn" required>
                </div>
                <label for="inputPassword" class="sr-only">Lösenord</label>
                <div class="input-group">
                    <span class="input-group-addon password-group-span"><i class="fa fa-key fa-fw"></i></span>
                    <input id="inputPassword" class="form-control" type="password" name="password"placeholder="Lösenord" required>
                </div>
                <a class="btn btn-block btn-primary" href="login.php">Logga in</a>
            </form>
        </div>
        <div id="register" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form class="form-signin" method="POST">
                <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                <h2 class="form-signin-heading">Registrera</h2>
                <label for="inputUsername" class="sr-only">Användarnamn</label>
                <div class="input-group">
                    <span class="input-group-addon password-group-span"><i class="fa fa-user-o fa-fw"></i></span>
                    <input id="inputUsername" class="form-control" type="text" name="username"  placeholder="Användarnamn" required>
                </div>
                <label for="inputPassword" class="sr-only">Lösenord</label>
                <div class="input-group">
                    <span class="input-group-addon password-group-span"><i class="fa fa-key fa-fw"></i></span>
                    <input id="inputPassword" class="form-control" type="password" name="password"placeholder="Lösenord" required>
                </div>
                <button class="btn btn-block btn-primary" type="submit">Registrera</button>
            </form>
        </div>
    </div>
</div>