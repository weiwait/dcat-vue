<?php

namespace Weiwait\DcatVue\Field;

use Dcat\Admin\Form\Field;
use Illuminate\Support\Str;
use Weiwait\DcatVue\Field\Traits\FieldCommon;
use Weiwait\DcatVue\Field\Traits\UploadTrait;

class Editor extends Field\Editor
{
    use UploadTrait, FieldCommon;

    public function render()
    {
        /****************************** parent ************************************/

        $this->addVariables([
            'options' => $this->formatOptions(),
        ]);

        /****************************** field ************************************/

        if (!$this->shouldRender()) {
            return '';
        }

        $this->setDefaultClass();

        $this->callComposing();

        $this->withScript();

        /****************************** custom ************************************/

        $this->withProvides();

        $this->withUpload();

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
        $this->addVariables([
            'component' => 'Editor',
            'mountId' => 'id' . md5(Str::uuid()),
       ]);
    }
}
