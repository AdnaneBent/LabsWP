<?php
namespace App\Features\Pages;

class PageNewsletter
{
    /**
     * Initialisation des pages.
     *
     * @return void
     */
    public static function init()
    {
        SendNewsletter::init();
    }
}
