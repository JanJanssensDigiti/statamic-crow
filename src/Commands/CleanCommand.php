<?php

namespace Digiti\Crow\Commands;

use Illuminate\Console\Command;

class CleanCommand extends Command
{
    public $signature = 'crow-clean';

    public $description = 'My command';

    public function clean($str)
    {
        if (is_file($str)) {
            chmod($str, 0777);
            $this->comment('Cleaned: '.$str);
            return unlink($str);
        } elseif (is_dir($str)) {
            $scan = glob(rtrim($str, '/').'/*');
            foreach ($scan as $index => $path) {
                $this->clean($path);
            }
            chmod($str, 0777);
            $this->comment('Cleaned: '.$str);
            return @rmdir($str);
        }
    }

    public function replace($path, $data)
    {
        if (file_exists($path)) {
            file_put_contents($path, $data);
        }
    }

    public function handle()
    {
        $this->clean(resource_path('fieldsets/crow-block_base_content.yaml'));
        $this->clean(resource_path('fieldsets/crow-block_header.yaml'));
        $this->clean(resource_path('fieldsets/crow-builder.yaml'));
        $this->clean(resource_path('fieldsets/crow-fieldset_button.yaml'));
        $this->clean(resource_path('fieldsets/crow-fieldset_column_builder.yaml'));
        $this->clean(resource_path('fieldsets/crow-fieldset_column.yaml'));
        $this->clean(resource_path('fieldsets/crow-fieldset_description.yaml'));
        $this->clean(resource_path('fieldsets/crow-fieldset_features.yaml'));
        $this->clean(resource_path('fieldsets/crow-fieldset_image.yaml'));
        $this->clean(resource_path('fieldsets/crow-fieldset_shared_fields.yaml'));
        $this->clean(resource_path('fieldsets/crow-fieldset_spacer.yaml'));
        $this->clean(resource_path('fieldsets/crow-fieldset_title.yaml'));

        $this->clean(resource_path('views/partials/crow'));
        $this->clean(resource_path('views/email-template.antlers.html'));
        $this->clean(resource_path('views/email-layout-1.antlers.html'));

        $this->clean(resource_path('blueprints/collections/email_templates/email_templates.yaml'));

        $this->comment('All Clean!');
    }
}
