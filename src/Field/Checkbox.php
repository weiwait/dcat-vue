<?php

namespace Weiwait\DcatVue\Field;

use Dcat\Admin\Form\Field;
use Dcat\Admin\Support\Helper;
use Weiwait\DcatVue\Field\Traits\FieldCommon;
use Weiwait\DcatVue\Field\Traits\HasOptions;
use Weiwait\DcatVue\Field\Traits\HasWatch;

class Checkbox extends Field\Checkbox
{
    use FieldCommon, HasOptions, HasWatch;

    public function render()
    {
        $this->checkboxRender();
        $this->selectRender();

        if (! $this->shouldRender()) {
            return '';
        }

        $this->setDefaultClass();

        $this->callComposing();

        $this->withScript();

        $this->addVariables([
            'checked' => $this->checked,
        ]);

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

    public function disabled($disabled): static
    {
        $this->addVariables([
            'disabled' => (array) $disabled
        ]);

        return $this;
    }

    protected function withProvides()
    {
        $this->addVariables([
            'component' => 'Checkbox',
        ]);
    }

    protected function checkboxRender()
    {
        if ($this->options instanceof \Closure) {
            $this->options(
                $this->options->call($this->values(), $this->value(), $this)
            );
        }

        $this->addCascadeScript();
    }

    protected function selectRender()
    {
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
    }
}
