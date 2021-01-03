<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <form action="/api/crepes/post" method="post">
                    <input type="text" id="img" name="img" value="/img/"><br><br>
                    <div class="card-body">
                        <p>nouvelle crêpe</p>
                        <input type="text" id="name" name="name" value="name"><br><br>
                        <input type="hidden" id="desc" name="desc" value=" ">
                        <div class="btn-group">
                            <button id="coffee-submit" type="submit" class="btn btn-sm btn-success" name="submit"
                                    value="post">ajout
                            </button>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php foreach ($this->crepes as $c) : ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <form action="/api/crepes/edit" method="post">
                        <img src="/img/<?= $c->getImg() ?>" class="card-img-top"
                             alt="erreur dans le chargement de l'image">
                        <div class="card-body">
                            <input type="hidden" id="id" name="id" value="<?= $c->getId() ?>">
                            <input type="text" id="img" name="img" value="<?= $c->getImg() ?>"><br><br>
                            <input type="text" id="name" name="name" value="<?= $c->getName() ?>"><br><br>
                            <input type="hidden" id="desc" name="desc" value="<?= $c->getDesc() ?>">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button id="coffee-submit" type="submit" class="btn btn-sm btn-warning"
                                            name="submit" value="edit">edit
                                    </button>
                                    <button id="coffee-submit" type="submit" class="btn btn-sm btn-danger"
                                            name="submit" value="delete">delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php endforeach ?>

    </div>

</div>