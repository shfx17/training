<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<?php $this->beginBody() ?>
<nav class="header__menu">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/img/logo.png', ['alt'=>Yii::$app->name]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => [Yii::$app->homeUrl]],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->nick . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ),

            Yii::$app->user->isGuest ? (
            ['label' => 'Signup', 'url' => ['/site/signup']]
            ) : ''

        ],
    ]);
    NavBar::end();
    ?>
</nav>
<!-- header -->
<main>
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</main>

<footer class="footer">
    <div class="footer__menu">
        <p class="footer__copyright">© 2021-2022 by WebCreate.Site</p>
        <ul class="footer__items">
            <li><a href="#">FB</a></li>
            <li><a href="#">IG</a></li>
            <li><a href="#">SC</a></li>
            <li><a href="#">IN</a></li>
        </ul>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>




