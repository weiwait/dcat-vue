<?php

namespace Weiwait\DcatVue\Field;

use Dcat\Admin\Form\Field;
use Dcat\Admin\Support\Helper;
use Illuminate\Support\Str;

class ListField extends Field\ListField
{
    protected $view = 'weiwait.dcat-vue::common';

    public function render()
    {
        /****************************** parent ************************************/

        $value = $this->value();

        $this->addVariables(['count' => $value ? count($value) : 0]);

        /****************************** field ************************************/

        if (!$this->shouldRender()) {
            return '';
        }

        $this->setDefaultClass();

        $this->callComposing();

        $this->withScript();

        /****************************** custom ************************************/

        $this->withProvides();

        $this->addVariables([
            'max' => $this->max ?? 999,
            'min' => $this->min,
        ]);

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
            'component' => 'List',
            'mountId' => 'id' . md5(Str::uuid()),
       ]);
    }

    public function sortable(bool $sortable = true): self
    {
        $this->addVariables([
            'sortable' => $sortable,
        ]);

        return $this;
    }
}
