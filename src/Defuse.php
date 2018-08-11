<?php

namespace Mzur\Kirby\DefuseSession;

use Kirby\Cms\App as BaseApp;

class Defuse
{
    public static function defuse(array $options = [])
    {
        BaseApp::instance(new App($options));
    }
}
