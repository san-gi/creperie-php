<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalConnect" data-whatever="@mdo">Se connecter </button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCreerCompte" data-whatever="@fat">Créer un compte</button>

<div class="modal fade" id="ModalConnect" tabindex="-1" role="dialog" aria-labelledby="ModalConnectLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="ModalConnectLabel">Se connecter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Ientifiant (mail)</label>
                        <input type="text" class="form-control" id="mail" name="mail">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password"  name="password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCreerCompte" tabindex="-1" role="dialog" aria-labelledby="ModalCreerCompteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCreerCompteLabel">Créer un compte</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Username</label>
                        <input type="text" class="form-control" id="username"  name="username">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Mail</label>
                        <input type="text" class="form-control" id="mail"  name="mail">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="password"  name="password">
                    </div>
                    <!--<div class="form-group">
                         <label for="recipient-name" class="col-form-label">profile image(non implémenter)</label>
                         <input type="text" class="form-control" id="recipient-name">
                     </div>-->


                </div>
                <div class="modal-footer">F
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Créer un compte</button>
                </div>
            </form>
        </div>
    </div>
</div>
