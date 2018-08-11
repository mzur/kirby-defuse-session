# Kirby Defuse Session

[![Build Status](https://travis-ci.org/mzur/kirby-defuse-session.svg?branch=master)](https://travis-ci.org/mzur/kirby-defuse-session)

Allows you to to write tests for code that uses the Kirby 3 session.


## Usage

```php
use Kirby\Cms\App;
use Mzur\Kirby\DefuseSession\Defuse;

public function testSession()
{
    Defuse::defuse();
    $session = App::instance()->session();
    $session->set('testKey', 'testValue');
    $this->assertEquals('testValue', $session->get('testKey'));
}
```

## Installation

```bash
composer require-dev mzur/kirby-defuse-session
```

## Contributing

Feel free to send a pull request!

## Issues/Bugs

Please use the [GitHub issue tracker](https://github.com/mzur/kirby-defuse-session/issues).
