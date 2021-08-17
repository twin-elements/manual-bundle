<?php


namespace TwinElements\ManualBundle;


use TwinElements\AdminBundle\Menu\AdminMenuInterface;
use TwinElements\AdminBundle\Menu\MenuItem;

class AdminMenu implements AdminMenuInterface
{
    public function getItems()
    {
        return [
            MenuItem::newInstance('Instrukcja użytkowania', 'cms_manual', [], 149)
        ];
    }
}
