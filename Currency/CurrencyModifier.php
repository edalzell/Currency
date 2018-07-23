<?php

namespace Statamic\Addons\Currency;

use Statamic\API\Config;
use Statamic\Extend\Modifier;

class CurrencyModifier extends Modifier
{
    /**
     * Modify a value
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */
    public function index($value, $params, $context)
    {
        setlocale(LC_MONETARY, array_get($params, 0, Config::getFullLocale()));
        return money_format('%.2n', $value / 100);
    }
}
