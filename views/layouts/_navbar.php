<?php
/**
 * Created by PhpStorm.
 * User: MAC
 * Date: 08.01.2016
 * Time: 21:08
 */
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

NavBar::begin([
    'brandLabel' => 'My Script',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-fixed-top topnavbar',
        'id' => 'logo'
    ],
]);
echo Nav::widget([
    'items' => [
        ['label' => '<em class="fa fa-navicon"></em>', 'url' => ['/site/index'], 'encode' => false],
        ['label' => '<em class="icon-user"></em>', 'url' => ['/site/about'], 'encode' => false],
        ['label' => '<em class="icon-lock"></em>', 'url' => ['/site/about'], 'encode' => false],
        ['label' => '<em class="icon-login"> Вхід</em>', 'url' => ['main/login'], 'encode' => false],
        ['label' => '<em class="icon-logout"> Вихід</em>', 'url' => ['main/reg'], 'encode' => false],
        [
            'label' => '<em class="icon-logout"> Вихід('.Yii::$app->user->identity['username'].')</em>',
            'url' => ['main/logout'], 'encode' => false,
            'linkOptions' => ['data-method' => 'post']
        ],
    ],
    'options' => ['class' => 'navbar-nav'],
]);
NavBar::end();


