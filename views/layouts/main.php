<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="page">
    <?=$this->render('_mobile_menu')?>
    <?=$this->render('_header')?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

    <footer class="footer footer2018">
        <div class="footer__line footer__line--bot">
            <div class="footer__copyright">
                <p class="footer__cnt bold  copyright">© TopHotels 2003-<?= date('Y') ?></p>
                <a href="#legal-information-pp" class="legal-information-pp footer__cnt-link legal ">правовая информация</a>
            </div>

            <div class="footer__cnt-wrap">
                <p class="footer__cnt footer__cnt--sm fz12 footer-text">Все права защищены. Перепечатка, включение информации, содержащейся в рекламных и иных материалах сайта, во всевозможные базы данных для дальнейшего их коммерческого использования, размещение таких материалов в любых СМИ и Интернете допускаются только с письменного разрешения редакции сайта. Предоставляемый сервис является информационным. Администрация сайта не несет ответственности за достоверность и качество информации, предоставляемой посетителями сайта, в том числе турфирмами и отельерами. </p>
            </div>
        </div>
    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
