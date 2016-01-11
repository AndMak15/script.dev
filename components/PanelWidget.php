<?php
/**
 * Created by PhpStorm.
 * User: MAC
 * Date: 09.01.2016
 * Time: 18:58
 */
namespace app\components;

use Yii;
use yii\base\Widget;
use yii\widgets\Menu;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;

class PanelWidget extends Menu
{
    /**
     * @var string the template used to render the body of a menu which is a link.
     * In this template, the token `{url}` will be replaced with the corresponding link URL;
     * while `{label}` will be replaced with the link text.
     * This property will be overridden by the `template` option set in individual menu items via [[items]].
     */
    public $linkTemplate = '<a href="{url}" class="list-group-item">{label}</a>';
    /**
     * @var string the template used to render a list of sub-menus.
     * In this template, the token `{items}` will be replaced with the rendered sub-menu items.
     */
    public $submenuTemplate = "\n<div id='{id}' class='panel-collapse collapse'>\n".
    "<div class=\"list-group-item\">\n{items}\n</div>\n".
    "</div>";
    /**
     * @var string
     */
    public $headerTemplate = '<div class="panel-heading">' .
    '<h4 class="panel-title">' .
    '<a href="{url}" data-toggle="{toggle}" data-parent="{parent}">{label}</a>' .
    '</h4>' .
    '</div>';

    public $itemsID = 0;

    /**
     * Renders the menu.
     */
    public function run()
    {
        if ($this->route === null && Yii::$app->controller !== null) {
            $this->route = Yii::$app->controller->getRoute();
        }
        if ($this->params === null) {
            $this->params = Yii::$app->request->getQueryParams();
        }
        $items = $this->normalizeItems($this->items, $hasActiveChild);
        if (!empty($items)) {
            $options = $this->options;
            $tag = ArrayHelper::remove($options, 'tag', 'div');

            if ($tag !== false) {
                echo Html::tag($tag, $this->renderItems($items), $options);
            } else {
                echo $this->renderItems($items);
            }
        }
    }

    /**
     * Renders the content of a menu item.
     * Note that the container and the sub-menus are not rendered here.
     * @param array $item the menu item to be rendered. Please refer to [[items]] to see what data might be in the item.
     * @return string the rendering result
     */
    protected function renderItem($item)
    {
        if (isset($item['url'])) {
            if (isset($item['items'])) {
                $template = ArrayHelper::getValue($item, 'template', $this->headerTemplate);

                return strtr($template, [
                    '{toggle}' => $item['toggle'],
                    '{parent}' => $item['parent'],
                    '{url}' => '#panel-'.$this->itemsID,
                    '{label}' => $item['label'],
                ]);

            } elseif (isset($item['url'])) {
                $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);

                return strtr($template, [
                    '{url}' => Html::encode(Url::to($item['url'])),
                    '{label}' => $item['label'],
                ]);
            }
        } else {
            $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);

            return strtr($template, [
                '{label}' => $item['label'],
            ]);
        }
    }
    /**
     * Recursively renders the menu items (without the container tag).
     * @param array $items the menu items to be rendered recursively
     * @return string the rendering result
     */
    protected function renderItems($items)
    {
        $n = count($items);
        $lines = [];
        foreach ($items as $i => $item) {
            $options = array_merge($this->itemOptions, ArrayHelper::getValue($item, 'options', []));
            $tag = ArrayHelper::remove($options, 'tag', 'div');
            $class = [];
            if ($item['active']) {
                $class[] = $this->activeCssClass;
            }
            if ($i === 0 && $this->firstItemCssClass !== null) {
                $class[] = $this->firstItemCssClass;
            }
            if ($i === $n - 1 && $this->lastItemCssClass !== null) {
                $class[] = $this->lastItemCssClass;
            }
            if (!empty($class)) {
                if (empty($options['class'])) {
                    $options['class'] = implode(' ', $class);
                } else {
                    $options['class'] .= ' ' . implode(' ', $class);
                }
            }

            $menu = $this->renderItem($item);
            if (!empty($item['items'])) {
                $submenuTemplate = ArrayHelper::getValue($item, 'submenuTemplate', $this->submenuTemplate);
                $menu .= strtr($submenuTemplate, [
                    '{id}' => 'panel-'.$this->itemsID++,
                    '{items}' => $this->renderItems($item['items']),
                ]);
            }
            if ($tag === false) {
                $lines[] = $menu;
            } else {
                $lines[] = Html::tag($tag, $menu, $options);
            }
        }

        return implode("\n", $lines);
    }
}