<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <?php foreach ($this->crepes as $c) : ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="/img/<?=$c->getImg()?>" class="card-img-top" alt="erreur dans le chargement de l'image">
                        <div class="card-body">
                            <p class="card-text"><?= $c->getName() ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                            <!--
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>-->
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</div>