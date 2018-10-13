<?php require 'partials/head.php'; ?>
<script>
    Popup("<div>Hello</div>").show('up')
  </script>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">Welkom</h1>
                    <p class="lead">ADSD 2018 2019</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-10 offset-1">
            <h1>Add player</h1>

            <!-- Large modal -->
<button onclick="showLoginModal()" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add a player</button>

<div id="loginModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content add-user-modal">
                  <form method="post" action="#">
                <label for="playerfname">first name</label>
                <input required type="text" name="playerfname">
                
                <label for="playerlname">last name</label>
                <input required type="text" name="playerlname">
                
                <label for="playeremail">email</label>
                <input required type="email" name="playeremail">
                
                <label for="playerphone">telefoon nummer</label>
                <input required type="text" name="playerphone">
                
                <label for="playerpass">Wachtwoord</label>
                <input required type="password" name="playerpass">
                
                <label for="playerpassconfirm">Wachtwoord herhalen</label>
                <input required type="password" name="playerpassconfirm">
                
                <label for="playerpasshint">Wachtwoord hint</label>
                <input required type="password" name="playerpasshint">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button onclick="hideLoginModal()" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Anuleer</button>


                  </form>
    </div>
  </div>
</div>
            <script>
                function showLoginModal() {
                    var x = document.getElementById("loginModal");
                        x.classList.add("show");
                }
                function hideLoginModal() {
                    var x = document.getElementById("loginModal");
                        x.classList.remove("show");
                }
            </script>
            
            <h4>Users</h4>
            <ul class="list-group">


                <?php
                    foreach ($resultsUsers as $items) {
                ?>

                    <table class="table table-responsive table-hover">
                    <tbody>
                    <tr>
                    <td><i class="fas fa-street-view"></i></td>
                    <td> <?=  $items->fname ?> </td>
                    <td> <?=  $items->lname ?> </td>
                    <td> <?=  $items->email ?> </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>
                        <form action="delete_player" method="post" class="d-inline">
                            <input type="hidden" name="user_id" value="<?=  $items->id ?>">
                            <button type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>

                        <form action="upd_user" method="post" class="d-inline">
                            <input type="hidden" name="user_id" value="<?=  $items->id ?>">
                            <input type="hidden" name="update" value="0">
                            <button type="submit"><i class="fas fa-edit"></i></button>
                        </form>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                <?php
                }
                ?>
            </ul>
        </div><!-- End div - user -->
        <hr>
        <div class="col-10 offset-1">

        </div><!-- End div - class Player-->
    </div> <!-- End div row -->
</div> <!-- End container -->
<?php // require 'partials/foot.php'; ?>