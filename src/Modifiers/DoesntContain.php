<?php

namespace Digiti\Crow\Modifiers;

use Statamic\Support\Arr;
use Statamic\Modifiers\Modifier;
use Stringy\StaticStringy as Stringy;

class DoesntContain extends Modifier
{
    /**
     * Returns false if the string contains $needle, true otherwise. By default,
     * the comparison is case-insensitive, but can be made sensitive by setting $params[1] to true.
     *
     * @param $value
     * @param $params
     * @param $context
     * @return bool
     */
    public function index($haystack, $params, $context)
    {
        $needle = Arr::get($context, $params[0], $params[0]);

        if (is_array($haystack)) {
            if (Arr::isAssoc($haystack)) {
                return Arr::exists($haystack, $needle);
            }

            return in_array($needle, $haystack);
        }
        
        return Stringy::contains($haystack, $needle, Arr::get($params, 1, false));
    }
}
