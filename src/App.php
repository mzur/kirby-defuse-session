<?php

namespace Mzur\Kirby\DefuseSession;

use Kirby\Cms\App as BaseApp;

class App extends BaseApp
{
    public function session(array $options = [])
    {
        $this->session = $this->session ?? new Session;

        return $this->session;
    }
}
