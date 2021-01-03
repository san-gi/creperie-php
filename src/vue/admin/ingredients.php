<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">price</th>

        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <form action="/api/ingredients/post" method="post">
            <td>NEW</td>
            <td><input type="text" id="name" name="name" value=""></td>
            <td><input type="text" id="price" name="price" value=""></td>
            <td><div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button id="coffee-submit" type="submit" class="btn btn-sm btn-success" name="submit"
                                value="post">ajout
                        </button>
                    </div>
                </div></td>

        </form>
    </tr>
    <?php foreach ($this->ingredients as $i) : ?>
        <tr>
            <form action="/api/ingredients/edit" method="post">
                <td><?= $u->getId() ?></td>
                <td><input type="text" id="username" name="username" value="<?= $u->getName() ?>"></td>
                <td><input type="text" id="password" name="password" value="<?= $u->getPrice() ?>"></td>



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