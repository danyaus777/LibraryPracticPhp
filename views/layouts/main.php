
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=app()->route->getPrefix() ?>/public/static/style.css">
    <title>Главная</title>
</head>
<body>
    <div class="__container">
        <header class="header__container">
                <a href="<?=app()->route->getUrl('/index') ?>">Главная</a>
                <a href="<?=app()->route->getUrl('/books') ?>">Наши книги</a>
                <?php
                if (!app()->auth::check()):
                ?>
                <a href="<?=app()->route->getUrl('/login') ?>">Войти</a>
                <a href="<?=app()->route->getUrl('/signup') ?>">Регистрация</a>
                <?php
                else:
                ?>
                    <a href="<?=app()->route->getUrl('/account') ?>">Профиль</a>
                    <a href="<?=app()->route->getUrl('/logout') ?>">Выйти</a>
                <?php
                endif;
                ?>
        </header>
        <main>
            <?= $content ?? ''; ?>
        </main>
    </div>
</body>
</html>