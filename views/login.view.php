<?php require 'partials/head.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1">



                <div id="loginformbody" class="text-center" cz-shortcut-listen="true" style="">

                    <form class="form-signin" action="login" method="post">
                        <img class="mb-4" src="public/images/centered/GezinshuisRegterink_logo_gecentreerd.png" alt="" width="144" height="144">
                        <h1 class="h3 mb-3 font-weight-normal">Log in</h1>
                        <label for="inputEmail" class="sr-only">E-mail adres</label>
                        <input name = "email" type="email" id="inputEmail" class="form-control" placeholder="E-mail adres" required="" autofocus="">
                        <label for="inputPassword" class="sr-only">Wachtwoord</label>
                        <input name = "pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                        <!--
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
        -->
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
                    </form>
                </div>




            </div>
        </div> <!-- End div row -->
    </div> <!-- End container -->
<?php require 'partials/foot.php'; ?>