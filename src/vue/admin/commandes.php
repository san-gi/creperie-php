<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">crepe</th>
        <th scope="col">facture</th>
        <th scope="col"></th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <form action="/api/commandes/post" method="post">
            <td>NEW</td>
            <td><input type="text" id="crepe" name="crepe" value=""></td>
            <td><input type="text" id="facture" name="facture" value=""></td>
            <td><input type="hidden" id="id" name="id" value=""></td>
            <td><div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button id="coffee-submit" type="submit" class="btn btn-sm btn-success" name="submit"
                                value="post">ajout
                        </button>
                    </div>
                </div></td>

        </form>
    </tr>
    <?php foreach ($this->commandes as $c) : ?>
        <tr>
            <form action="/api/commandes/edit" method="post">
                <td><?= $c->getId() ?></td>
                <td><input type="text" id="crepe" name="crepe" value="<?= $c->getCrepe() ?>"></td>
                <td><input type="text" id="facture" name="facture" value="<?= $c->getFacture() ?>"></td>
                <td><input type="hidden" id="id" name="id" value="<?= $c->getId() ?>"></td>
                <td><div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button id="coffee-submit" type="submit" class="btn btn-sm btn-warning"
                                    name="submit" value="edit">edit
                            </button>
                            <button id="coffee-submit" type="submit" class="btn btn-sm btn-danger"
                                    name="submit" value="delete">delete
                            </button>
                        </div>
                    </div></td>
            </form>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>