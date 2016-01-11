<?php
/**
 * Created by PhpStorm.
 * User: MAC
 * Date: 08.01.2016
 * Time: 21:13
 */
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Html;
use yii\widgets\Menu;
use app\components\PanelWidget;
use app\components\MenuPanel;

;

NavBar::begin([
    'options' => [
        'class' => ''
    ],
    'renderInnerContainer' => false
]);

echo MenuPanel::widget([
    'options' => [
        'id' => 'accordion',
    ],
    'items' => [
        [
            'label' => 'Генерувати',
            'idPanel' => 'collapseOne',
            'link' => [
                [
                    'label' => 'Головну',
                    'url' => ''
                ],
                [
                    'label' => 'Стилі',
                    'url' => ''
                ],
                [
                    'label' => 'favicon',
                    'url' => ''
                ],
                [
                    'label' => 'Title',
                    'url' => ''
                ],
            ],
        ],
        [
            'label' => 'FTP Правки',
            'idPanel' => 'collapseTwo',
            'link' => [
                [
                    'label' => 'robot.txt',
                    'url' => ''
                ],
                [
                    'label' => 'Картинки favicon',
                    'url' => ''
                ],
            ],
        ],
        [
            'label' => 'Адмінка',
            'idPanel' => 'Admin',
            'link' => [
                [
                    'label' => 'Доступи',
                    'url' => ''
                ],
                [
                    'label' => 'Управління',
                    'url' => ''
                ],
            ],
        ]
    ]

]);


















//echo PanelWidget::widget([
//    'options' => ['class' => 'panel-group', 'tag' => 'div', 'id' => 'accordion'],
//    'items' => [
//        [
//            'label' => 'Генерувати',
//            'url' => ['#'],
//            'options' => ['class' => 'panel panel-default'],
//        ],
//        // 'Products' menu item will be selected as long as the route is 'product/index'
//        [
//            'label' => 'Products',
//            'url' => ['#'],
//            'toggle' => 'collapse',
//            'parent' => '#accordion',
//            'options' => [
//                'class' => 'panel panel-default',
//                'tag' => 'div'
//            ],
//            'items' => [
//
//                [
//                    'label' => 'New Arrivals',
//                    'url' => ['#'],
//                    'options' => [
//                        'tag' => false,
//                    ],
//                ],
//                [
//                    'label' => 'Most Popular',
//                    'url' => ['#'],
//                    'options' => ['class' => 'panel panel-default', 'tag' => false],
//                ],
//            ]],
//        [
//            'label' => 'Products',
//            'url' => ['#'],
//            'toggle' => 'collapse',
//            'parent' => '#accordion',
//            'options' => [
//                'class' => 'panel panel-default',
//                'tag' => 'div'
//            ],
//            'items' => [
//
//                [
//                    'label' => 'New Arrivals',
//                    'url' => ['#'],
//                    'options' => [
//                        'tag' => false,
//                    ],
//                ],
//                [
//                    'label' => 'Most Popular',
//                    'url' => ['#'],
//                    'options' => ['class' => 'panel panel-default', 'tag' => false],
//                ],
//            ]],
////        ['label' => 'Login',
////            'url' => ['site/login'],
////            'options' => ['class' => 'list-group-item'],
////            'visible' => Yii::$app->user->isGuest]
//    ],
//]);

NavBar::end();