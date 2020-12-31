<?php

namespace App\Services\Searches\Configurators;

use ScoutElastic\IndexConfigurator;
use ScoutElastic\Migratable;

class UserConfigurator extends IndexConfigurator
{
    use Migratable;

    /**
     * @var array
     */
    protected $settings = [
        //
    ];
}
