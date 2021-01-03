<form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
    <input type="hidden" id="disconect" name="disconect">
    <button type="submit" class="btn btn-primary" >Se deconnecter </button>
</form>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCommand">Finaliser la commande</button>

<div class="modal fade" id="ModalCommand" tabindex="-1" role="dialog" aria-labelledby="ModalCreerCompteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCreerCompteLabel">Finaliser la commande</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Crepe</th>
                            <th scope="col">prix</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>


                    <?php foreach ($this->crepesInFacture as $c) : ?>
                        <tr>
                            <form action="/menu" method="post">

                            </form>
                            <td><?= $c->getName() ?></td>
                            <td><?= $c->getPrice() ?></td>
                            <td><button type="submit" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></td>
                        </tr>


                    <?php endforeach ?>
                        </tbody>
                    </table>

                    <!--<div class="form-group">
                         <label for="recipient-name" class="col-form-label">profile image(non implémenter)</label>
                         <input type="text" class="form-control" id="recipient-name">
                     </div>-->


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Créer un compte</button>
                </div>
            </form>
        </div>
    </div>
</div>