<?php

namespace Digiti\Crow;

use Statamic\Statamic;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        Tags\Crow::class,
    ];

    protected $modifiers = [
        Modifiers\DoesntContain::class,
    ];

    protected $scripts = [
        __DIR__.'/../resources/js/main.js'
    ];

    // protected $publishables = [
    //     __DIR__.'/../resources/views/partials/crow' => resource_path('views/partials/crow'),
    // ];

    // public function bootPublishables()
    // {
    //     // parent::bootPublishables();

    //     // Statamic::booted(function () {
    //     //     $this->bootAssets();
    //     // });
    // }    

    // protected function bootAssets()
    // {
    //     $this->publishes([
    //         __DIR__.'/../resources/blueprints/collections/email_templates/email_templates.yaml' => resource_path('blueprints/collections/email_templates/email_templates.yaml'),
    //         __DIR__.'/../resources/views/partials/crow' => resource_path('views/partials/crow'),
    //     ]);

    //     // $this->publishes([
    //     //     __DIR__.'/../config/simple-commerce.php' => config_path('simple-commerce.php'),
    //     // ], 'simple-commerce-config');

    //     // $this->publishes([
    //     //     __DIR__.'/../resources/blueprints' => resource_path('blueprints'),
    //     // ], 'simple-commerce-blueprints');

    //     // $this->publishes([
    //     //     __DIR__.'/../resources/lang' => resource_path('lang/vendor/simple-commerce'),
    //     // ], 'simple-commerce-translations');

    //     // $this->publishes([
    //     //     __DIR__.'/../resources/views' => resource_path('views/vendor/simple-commerce'),
    //     // ], 'simple-commerce-views');

    //     // if (app()->environment() !== 'testing') {
    //     //     $this->mergeConfigFrom(__DIR__.'/../config/simple-commerce.php', 'simple-commerce');
    //     // }

    //     // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'simple-commerce');
    //     // $this->loadViewsFrom(__DIR__.'/../resources/views', 'simple-commerce');

    //     return $this;
    // }
}
