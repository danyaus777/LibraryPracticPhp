<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>
    <header>
        <nav>
            <a href="<?=app()->route->getUrl('/index') ?>">Главная</a>
            <?php
            if (!app()->auth::check()):
            ?>
            <a href="<?=app()->route->getUrl('/login') ?>">Войти</a>
            <a href="<?=app()->route->getUrl('/signup') ?>">Регистрация</a>
            <?php
            else:
            ?>
            <a href="<?=app()->route->getUrl('/logout') ?>">Выйти (<?=app()->auth::user()->FIO ?>)</a>
            <?php
            endif;
            ?>
        </nav>
    </header>
    <main>
        <?= $content ?? ''; ?>
    </main>
</body>
</html>