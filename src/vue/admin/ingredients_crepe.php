<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">crepe</th>
        <th scope="col">ingrédient</th>


        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <form action="/api/ingcrepes/post" method="post">
            <td>NEW</td>
            <td><input type="text" id="crepe" name="crepe" value=""></td>
            <td><input type="text" id="ingredient" name="ingredient" value=""></td>
            <td><div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button id="coffee-submit" type="submit" class="btn btn-sm btn-success" name="submit"
                                value="post">ajout
                        </button>
                    </div>
                </div></td>

        </form>
    </tr>
    <?php foreach ($this->ingCrepe as $i) : ?>
        <tr>
            <form action="/api/ingcrepes/edit" method="post">
                <td><?= $i->getId() ?></td>
                <td><input type="text" id="crepe" name="crepe" value="<?= $i->getCrepe() ?>"></td>
                <td><input type="text" id="ingredient" name="ingredient" value="<?= $i->getIngredient() ?>"></td>

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