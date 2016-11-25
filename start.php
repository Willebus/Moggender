<div class="container">
    <div class="row">
        <div id="signin" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form class="form-signin" method="POST">
                <h2 class="form-signin-heading">Logga in</h2>
                <label for="inputUsername" class="sr-only">Användarnamn</label>
                <input id="inputUsername" class="form-control" type="username" name="username"  placeholder="Användarnamn" required>
                <label for="inputPassword" class="sr-only">Lösenord</label>
                <input id="inputPassword" class="form-control" type="password" name="password"placeholder="Lösenord" required>
                <a class="btn btn-block btn-primary" href="login.php">Logga in</a>
            </form>
        </div>
        <div id="register" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form class="form-signin" method="POST">
                <h2 class="form-signin-heading">Registrera</h2>
                <label for="inputUsername" class="sr-only">Användarnamn</label>
                <input id="inputUsername" class="form-control" type="username" name="username"  placeholder="Användarnamn" required>
                <label for="inputPassword" class="sr-only">Lösenord</label>
                <input id="inputPassword" class="form-control" type="password" name="password" placeholder="Lösenord" required>
                <button class="btn btn-block btn-primary" type="submit">Registrera</button>
            </form>
        </div>
    </div>
</div>