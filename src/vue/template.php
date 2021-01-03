<!DOCTYPE html>
<html class="h-100">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?= $this->title ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='/css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/style.css'>
    <script src='./js/main.js'></script>
    <script src='./js/jquery.slim.min.js'></script>
    <script src="./js/bootstrap.js"></script>
</head>

<body class="h-100">
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <a class="navbar-brand" href="/">Home</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/menu">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/crepes">Admin</a>
            </li>
        </ul>
    </div>

    <?= $this->user ?>

</nav>

<?= $this->content ?>
</body>

</html>
