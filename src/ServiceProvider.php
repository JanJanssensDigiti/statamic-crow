<?php

namespace Digiti\Crow;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        Crow::class,
    ];

    public function boot()
    {
        parent::boot();

        Statamic::booted(function () {
            $this->bootVendorAssets();
        });
    }
}
