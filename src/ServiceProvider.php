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

    protected $commands = [
        Commands\InstallCommand::class,
        Commands\UpdateCommand::class,
    ];

    protected $publishables = [
        __DIR__.'/../resources/images' => 'images',
    ];

    public function boot()
    {
        parent::boot();

        Statamic::booted(function () {
            $this->bootVendorAssets();
        });
    }    

    protected function bootVendorAssets()
    {
        //Blueprints
        $this->publishes([
            __DIR__.'/../resources/blueprints/collections/email_templates/email_templates.yaml' => resource_path('blueprints/collections/email_templates/email_templates.yaml'),
        ], 'crow-blueprints'); 
        
        //Collections
        $this->publishes([
            __DIR__.'/../resources/content/collections/email_templates.yaml' => base_path('content/collections/email_templates.yaml'),
        ], 'crow-collections'); 

        //Config
        $this->publishes([
            __DIR__.'/../config/crow.php' => config_path('crow.php'),
        ], 'crow-config');  

        //Partials
        $this->publishes([
            __DIR__.'/../resources/views/partials/crow' => resource_path('views/partials/crow'),
        ], 'crow-partials');

        //Layouts
        $this->publishes([
            __DIR__.'/../resources/views/email-layout-1.antlers.html' => resource_path('views/email-layout-1.antlers.html'),
            __DIR__.'/../resources/views/email-template.antlers.html' => resource_path('views/email-template.antlers.html')
        ], 'crow-layouts');

        //Fieldsets
        $this->publishes([
            __DIR__.'/../resources/fieldsets/crow-block_base_content.yaml' => resource_path('fieldsets/crow-block_base_content.yaml'),
            __DIR__.'/../resources/fieldsets/crow-block_header.yaml' => resource_path('fieldsets/crow-block_header.yaml'),
            __DIR__.'/../resources/fieldsets/crow-builder.yaml' => resource_path('fieldsets/crow-builder.yaml'),
            __DIR__.'/../resources/fieldsets/crow-fieldset_button.yaml' => resource_path('fieldsets/crow-fieldset_button.yaml'),
            __DIR__.'/../resources/fieldsets/crow-fieldset_column_builder.yaml' => resource_path('fieldsets/crow-fieldset_column_builder.yaml'),
            __DIR__.'/../resources/fieldsets/crow-fieldset_column.yaml' => resource_path('fieldsets/crow-fieldset_column.yaml'),
            __DIR__.'/../resources/fieldsets/crow-fieldset_description.yaml' => resource_path('fieldsets/crow-fieldset_description.yaml'),
            __DIR__.'/../resources/fieldsets/crow-fieldset_features.yaml' => resource_path('fieldsets/crow-fieldset_features.yaml'),
            __DIR__.'/../resources/fieldsets/crow-fieldset_image.yaml' => resource_path('fieldsets/crow-fieldset_image.yaml'),
            __DIR__.'/../resources/fieldsets/crow-fieldset_shared_fields.yaml' => resource_path('fieldsets/crow-fieldset_shared_fields.yaml'),
            __DIR__.'/../resources/fieldsets/crow-fieldset_spacer.yaml' => resource_path('fieldsets/crow-fieldset_spacer.yaml'),
            __DIR__.'/../resources/fieldsets/crow-fieldset_title.yaml' => resource_path('fieldsets/crow-fieldset_title.yaml')
        ], 'crow-fieldsets');

        $this->mergeConfigFrom(__DIR__.'/../config/crow.php', 'crow');

        return $this;
    }
}
