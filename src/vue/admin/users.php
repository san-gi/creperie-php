<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">username</th>
        <th scope="col">password</th>
        <th scope="col">mail</th>
        <th scope="col">img</th>
        <th scope="col">role</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($this->users as $u) : ?>
        <tr>
            <td><?= $u->getId() ?></td>
            <td><?= $u->getUsername() ?></td>
            <td><?= $u->getPassword() ?></td>
            <td><?= $u->getMail() ?></td>
            <td><?= $u->getImg() ?></td>
            <td><?= $u->getRole() ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>