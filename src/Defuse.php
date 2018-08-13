<?php

namespace Mzur\Kirby\DefuseSession;

use Kirby\Cms\App;

class Defuse
{
    public static function defuse(array $options = [])
    {
        $options = array_merge_recursive($options, [
            'roots' => [
                'session' => new ArraySessionStore,
            ],
        ]);

        App::instance(new App($options));
    }
}
