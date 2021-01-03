<form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
    <input type="hidden" id="disconect" name="disconect">
    <button type="submit" class="btn btn-primary" >Se deconnecter </button>
</form>
<?php if($_SERVER["REQUEST_URI"]=="/menu")  : ?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCommand">Finaliser la commande</button>
<?php endif ?>
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
                                <td><input type="hidden" id="SuppressionItem" name="SuppressionItem" value="<?= $c->getName() ?>"></td>

                            <td><?= $c->getName() ?></td>
                            <td><?= $c->getPrice() ?></td>
                            <td><button type="submit" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></td>
                            </form>
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
                    <form id="fin" action="/menu" method="post">
                        <td><input type="hidden" id="ValidationCommande" name="ValidationCommande" value="ValidationCommande"></td>
                        <button type="submit" class="btn btn-primary">Valider la commande</button>
                    </form>
                </div>
            </form>
        </div>
    </div>
</div>