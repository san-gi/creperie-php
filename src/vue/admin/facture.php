<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">user</th>
        <th scope="col">price</th>
        <th scope="col">date</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <form action="/api/factures/post" method="post">
            <td>NEW</td>
            <td><input type="text" id="user" name="user" value=""></td>
            <td><input type="text" id="price" name="price" value=""></td>
            <td><input type="text" id="date" name="date" value=""></td>
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
            <form action="/api/factures/edit" method="post">
                <td><?= $u->getId() ?></td>
                <td><input type="text" id="username" name="username" value="<?= $u->getUser() ?>"></td>
                <td><input type="text" id="password" name="password" value="<?= $u->getPrice() ?>"></td>
                <td><input type="text" id="mail" name="mail" value="<?= $u->getDate() ?>"></td>

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