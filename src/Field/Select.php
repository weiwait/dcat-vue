<?php

namespace Weiwait\DcatVue\Field;

use Dcat\Admin\Form\Field;
use Dcat\Admin\Support\Helper;
use Weiwait\DcatVue\Field\Traits\FieldCommon;
use Weiwait\DcatVue\Field\Traits\HasOptions;
use Weiwait\DcatVue\Field\Traits\HasWatch;

class Select extends Field\Select
{
    use HasOptions, FieldCommon, HasWatch;

    private string $optionsFromKeyValueField = '';
    private string $concatSeparator = '';

    public function render()
    {
        /****************************** parent ************************************/

        if (! $this->shouldRender()) {
            return '';
        }

        $this->setDefaultClass();

        $this->callComposing();

        $this->withScript();

        /****************************** field ************************************/

        $this->addDefaultConfig([
            'allowClear'  => true,
            'placeholder' => [
                'id'   => '',
                'text' => $this->placeholder(),
            ],
        ]);

        $this->formatOptions();

        $this->addVariables([
            'options'       => $this->options,
            'groups'        => $this->groups,
            'configs'       => $this->config,
            'cascadeScript' => $this->getCascadeScript(),
        ]);

        $this->initSize();

        $this->attribute('data-value', implode(',', Helper::array($this->value())));

        /****************************** custom ************************************/

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
        $this->addVariables([
            'component' => 'Select',
            'optionsFromKeyValueField' => $this->optionsFromKeyValueField,
            'concatSeparator' => $this->concatSeparator,
        ]);
    }

    public function optionsFromKeyValue(string $field): self
    {
        $this->optionsFromKeyValueField = $field;

        return $this;
    }

    public function concatKey(string $separator = ': '): self
    {
        $this->concatSeparator = $separator;

        return $this;
    }
}
