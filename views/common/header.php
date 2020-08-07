<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<div class="page-wrapper">
    <header class="page-header">
        <div class="container">
            <div class="page-header__row">
                <div class="page-header__logo">
                    <a href="/">
                        <img class="page-header__logo-image" src="/assets/images/logo.png" width="163" height="172" alt="Future internet agency logo">
                    </a>
                </div>

                <div class="page-header__title-group">
                    <div class="page-header__contacts">
                        Телефон: (499) 340-94-71<br>
                        Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a>
                    </div>

                    <h1 class="page-title">
                        <?php echo Html::encode(App::get('title')); ?>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <main class="page-main">
