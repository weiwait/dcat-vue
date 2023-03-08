<?php

namespace Weiwait\DcatVue\Field;

use Dcat\Admin\Form\Field;
use Illuminate\Support\Str;
use Weiwait\DcatVue\Field\Traits\FieldCommon;
use Weiwait\DcatVue\Field\Traits\HasWatch;
use Weiwait\DcatVue\Models\WeiwaitUpload;

class File extends Field\File
{
    use FieldCommon, HasWatch;

    protected string $disk;

    protected function prepareInputValue($file)
    {
        WeiwaitUpload::query()->whereIn('name', (array) $file)->delete();

        return parent::prepareInputValue($file);
    }

    public function render()
    {
        if (!$this->shouldRender()) {
            return '';
        }

        $this->setDefaultClass();

        $this->callComposing();

        $this->withScript();

        $this->withProvides();

        $this->addVariables([
            'provides' => $this->variables(),
        ]);

        return view($this->view(), $this->variables());
    }

    protected function formatAttributes()
    {
        return $this->attributes;
    }

    protected function withProvides()
    {
        $disk = config('admin.upload.disk', config('filesystems.default'));

        $this->addVariables([
            'component' => 'File',
            'mountId' => 'id' . md5(Str::uuid()),
            'multiple' => false,
            'disk' => $this->disk ?? $disk,
            'dir' => $this->getDirectory(),
            'uploaded_url' => route('dcat.admin.weiwait.file.uploaded'),
            'obs_config_url' => route('dcat.admin.weiwait.file.obs-config'),
       ]);
    }

    public function disk($disk): self
    {
        $this->disk = $disk;

        return parent::disk($disk);
    }
}
