<?php
use app\assets\AppAsset;
use app\components\AlertWidget;
use yii\helpers\Html;
/**
 * Created by PhpStorm.
 * User: MAC
 * Date: 05.01.2016
 * Time: 20:24
 */
/* @var $content string
 * @var $this yii\web\View
 */
AppAsset::register($this);
$this->beginPage();
?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <?= Html::csrfMetaTags() ?>
        <meta charset="<?= Yii::$app->charset ?>">
        <title><?= Yii::$app->name ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody(); ?>
    <header class="header-wrap">
        <!-- START Top Navbar-->
        <?= $this->render('/layouts/_navbar')?>
        <!-- END Top Navbar-->
    </header>
    <div class="wrap">
        <div class="container-fluid">
                <div class="row">
                    <aside id="left-menu" class="col-sm-3 col-md-2">
                        <!-- START Sidebar (left)-->
                        <?= $this->render('/layouts/_sidebar')?>
                        <!-- END Sidebar (left)-->
                    </aside>
                    <conteiner class="col-sm-9 col-md-10">
                        <?= AlertWidget::widget() ?>
                        <?= $content ?>
                    </conteiner>
                </div>
        </div>
    </div>
    <!-- Page footer-->
    <footer class="footer">
        <div class="container">
            <p class="text-center">&copy; My Script <?= date('Y') ?></p>
        </div>
    </footer>

    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>