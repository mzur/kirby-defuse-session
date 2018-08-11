<?php

namespace Mzur\Kirby\DefuseSession;

use Kirby\Cms\App as BaseApp;

class Defuse
{
    public static function defuse()
    {
        BaseApp::instance(new App);
    }
}
