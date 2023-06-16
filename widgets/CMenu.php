<?php

namespace app\widgets;

use yii\widgets\Menu;

class CMenu extends Menu
{
    public $linkTemplate = '<a href="{url}" class="nav-link"><i class="nav-icon fas fa-{icon}"></i> <p>{label}</p></a>';
    public $submenuTemplate = "\n<ul class='nav nav-treeview'>\n{items}\n</ul>";

    protected function renderItem($item)
    {
        $item['template'] = str_replace('{icon}', $item['icon'] ?? 'circle', $this->linkTemplate);
        $item['submenuTemplate'] = $item['submenuTemplate'] ?? $this->submenuTemplate;
        return parent::renderItem($item);
    }
}
