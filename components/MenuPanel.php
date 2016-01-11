<?php
/**
 * Created by PhpStorm.
 * User: MAC
 * Date: 10.01.2016
 * Time: 12:15
 */

namespace app\components;

use yii\base\Widget;
use yii\bootstrap\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class MenuPanel extends Widget
{
    public $options = [];
    public $items = [];
    public $visible = true;
    public $encodeLabels = true;
    public $menu = 'Menu';
    public $itemOptions = [];
    protected $idGroup = '';
    protected $idPanel = '';
    protected $countGroup = 0;
    protected $countPanel = 0;
    public $headerLinkTemplate = '<a href="{url}" data-toggle="collapse" data-parent="{parent}">{label}</a>';
    public $linkTemplate = '<a href="{url}" class="list-group-item">{label}</a>';
    public $labelTemplate = '{label}';

    public function run()
    {
        $items = $this->normalizeItems($this->items);
        if (!empty($items)) {
            return $this->renderGroup($items);
        }
    }


    /**
     * Normalizes the [[items]] property to remove invisible items and activate certain items.
     * @param array $items the items to be normalized.
     * @param boolean $active whether there is an active child menu item.
     * @return array the normalized menu items
     */
    protected function normalizeItems($items)
    {
        foreach ($items as $i => $item) {
            if (isset($item['visible']) && !$item['visible']) {
                unset($items[$i]);
                continue;
            }
            if (!isset($item['label'])) {
                $item['label'] = '';
            }
            $encodeLabel = isset($item['encode']) ? $item['encode'] : $this->encodeLabels;
            $items[$i]['label'] = $encodeLabel ? Html::encode($item['label']) : $item['label'];
            $hasActiveChild = false;
            if (isset($item['items'])) {
                $items[$i]['items'] = $this->normalizeItems($item['items']);
                if (empty($items[$i]['items']) && $this->hideEmptyItems) {
                    unset($items[$i]['items']);
                    if (!isset($item['url'])) {
                        unset($items[$i]);
                        continue;
                    }
                }
            }
        }

        return array_values($items);
    }
    protected function addDefaultClass(&$arrayOptions, $class)
    {
        if (empty($arrayOptions['class'])) {
            $arrayOptions['class'] = $class;
        } else {
            $arrayOptions['class'] .= ' ' . $class;
        }
    }
    /**
     * Recursively renders the menu items (without the container tag).
     * @param array $items the menu items to be rendered recursively
     * @return string the rendering result
     */
    protected function renderItems($items)
    {
        $lines = [];
        foreach ($items as $i => $item) {
            $options =  ArrayHelper::getValue($item, 'options', []);
            $optionsHeader = ArrayHelper::getValue($item, 'optionsHeader', []);
            $optionsTitle = ArrayHelper::getValue($item, 'optionsTitle', []);
            $optionsWrapBody = ArrayHelper::getValue($item, 'optionsWrapBody', []);
            $optionsBody = ArrayHelper::getValue($item, 'optionsBody', []);

            $this->idPanel ='panel';
            $this->idPanel = ArrayHelper::remove($item, 'idPanel', $this->idPanel);
            $this->idPanel .= $this->idPanel === 'panel' ? '-' . $this->countPanel : '';
            $this->countPanel++;

            $this->addDefaultClass($options, 'panel panel-default');
            $this->addDefaultClass($optionsHeader, 'panel-heading');
            $this->addDefaultClass($optionsTitle, 'panel-title');
            $this->addDefaultClass($optionsWrapBody, 'panel-collapse collapse');
            $this->addDefaultClass($optionsBody, 'panel-body list-group');

            $optionsWrapBody['id'] = $this->idPanel;

            $nameHeader = strtr( $this->headerLinkTemplate,
                [
                    '{url}' => '#'.$this->idPanel,
                    '{parent}' => '#'.$this->idGroup,
                    '{label}' => $item['label'],
                ]);

            $titleHeader = Html::tag('h4', $nameHeader, $optionsTitle);
            $panelHeader = Html::tag('div', $titleHeader, $optionsHeader);

            $group = '';
            $link = '';
            if (!empty($item['items'])) {
                $group = $this->renderGroup($item['items']);
            }
            if (!empty($item['link']))  {
                $link = $this->renderLink($item['link']);
            }
            $panelBody = Html::tag('div', $group.$link, $optionsBody);
            $panelWrapBody = Html::tag('div', $panelBody, $optionsWrapBody);

            $lines[] = Html::tag('div', $panelHeader."\n".$panelWrapBody, $options);
        }

        return implode("\n", $lines);
    }

    /**
     * Створює обгортку для груп паренелей меню
     * @param null $items - Панелі меню
     * @return string - Група панелей меню
     */
    protected function renderGroup($items = null)
    {
        $options = $this->options;

        $this->idGroup = 'group';
        $this->idGroup = ArrayHelper::remove($options, 'id', $this->idGroup);
        $this->idGroup.= '-' . $this->countGroup;
        $this->countGroup++;

        $options['id'] = $this->idGroup;
        if (empty($options['class'])) {
            $options['class'] = 'panel-group';
        } else {
            $options['class'] .= ' ' . 'panel-group';
        }

        $menu = $this->renderItems($items);

        return Html::tag('div', $menu, $options);
    }


    protected function renderLink($item)
    {
        $lines = [];
        foreach ($item as $i => $item) {
            if (isset($item['url'])) {
                $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);

                $lines[] = strtr($template, [
                    '{url}' => Html::encode(Url::to($item['url'])),
                    '{label}' => $item['label'],
                ]);
            } else {
                $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);

                $lines[] = strtr($template, [
                    '{label}' => $item['label'],
                ]);
            }
        }


        return implode("\n", $lines);
    }

}