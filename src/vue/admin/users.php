<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">username</th>
        <th scope="col">password</th>
        <th scope="col">mail</th>
        <th scope="col">img</th>
        <th scope="col">role</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <form action="/api/users/post" method="post">
            <td>NEW</td>
            <td><input type="text" id="username" name="username" value=""></td>
            <td><input type="text" id="password" name="password" value=""></td>
            <td><input type="text" id="mail" name="mail" value=""></td>
            <td><input type="text" id="img" name="img" value=""></td>
            <td> <select class="w3-select" name="option">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select> </td>
            <td><div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button id="coffee-submit" type="submit" class="btn btn-sm btn-success" name="submit"
                                value="post">ajout
                        </button>
                    </div>
                </div></td>

        </form>
    </tr>
    <?php foreach ($this->users as $u) : ?>
        <tr>
            <form action="/api/users/edit" method="post">
                <td><?= $u->getId() ?></td>
                <td><input type="text" id="username" name="username" value="<?= $u->getUsername() ?>"></td>
                <td><input type="text" id="password" name="password" value="<?= $u->getPassword() ?>"></td>
                <td><input type="text" id="mail" name="mail" value="<?= $u->getMail() ?>"></td>
                <td><input type="text" id="img" name="img" value="<?= $u->getImg() ?>"></td>
                <td> <select class="w3-select" name="option">
                        <option value="<?= $u->getRole() ?>"><?= $u->getRole() ?></option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select> </td>
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