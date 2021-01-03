<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">user</th>
        <th scope="col">price</th>
        <th scope="col">date</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <form action="/api/facture/post" method="post">
            <td>NEW</td>
            <td><input type="text" id="user" name="user" value=""></td>
            <td><input type="text" id="price" name="price" value=""></td>
            <td><input type="text" id="date" name="date" value=""></td>
            <td> <select class="w3-select" name="etat">
                    <option value="clos">Clos</option>
                    <option value="Livraison en cours">Livraison en cours</option>
                    <option value="Non valider">Non valider</option>
                </select> </td>
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
    <?php foreach ($this->factures as $f) : ?>
        <tr>
            <form action="/api/facture/edit" method="post">
                <td><?= $f->getId() ?></td>
                <td><input type="text" id="user" name="user" value="<?= $f->getUser() ?>"></td>
                <td><input type="text" id="price" name="price" value="<?= $f->getPrice() ?>"></td>
                <td><input type="text" id="date" name="date" value="<?= $f->getDate() ?>"></td>
                <td> <select class="w3-select" name="etat">
                        <option value=""><?=($f->getEtat())?></option>
                        <option value="clos">Clos</option>
                        <option value="Livraison en cours">Livraison en cours</option>
                        <option value="Non valider">Non valider</option>
                    </select> </td>
                <td><input type="hidden" id="id" name="id" value="<?= $f->getId() ?>"></td>
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