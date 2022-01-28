<?php

namespace Digiti\StatamicCrow\Tags;

use Statamic\Tags\Tags;

class Crow extends Tags
{
    /**
     * The {{ crow }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        return "test";
    }

    /**
     * The {{ crow:example }} tag.
     *
     * @return string|array
     */
    public function example()
    {
        //
    }
}
