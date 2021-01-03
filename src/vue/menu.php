
<div class="album py-5 bg-dark">
    <div class="container">

        <div class="row">
            <?php foreach ($this->crepes as $c) : ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="/img/<?=$c->getImg()?>" class="card-img-top" alt="erreur dans le chargement de l'image">
                        <div class="card-body">
                        <h4><?=$c->getName()?></h4>

                            <div class="d-flex justify-content-between align-items-center">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Center<?= $c->getId() ?>">
                                    Commander
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="Center<?= $c->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle"><?= $c->getName() ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= $_SERVER["REQUEST_URI"]?>" method="post">
                                                <div class="modal-body">
                                                    <p><?= $c->getDesc() ?></p>
                                                    <?php foreach ($this->ingredientManager->getAllForCrepe($c->getID())as $i) : ?>
                                                        <button type="button" class="btn btn-lg btn-primary" disabled><?= $i->getIngredient() ?></button>

                                                    <?php endforeach ?>

                                                    <input type="hidden" name="crepeName" value="<?= $c->getName() ?>">
                                                    <!--<div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Ientifiant (mail)</label>
                                                        <input type="text" class="form-control" id="mail" name="mail">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Mot de passe</label>
                                                        <input type="password" class="form-control" id="password"  name="password">
                                                    </div>-->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Ajouter a la commande</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</div>
