<?php

namespace Weiwait\DcatVue\Field;

use Dcat\Admin\Form\Field;
use Dcat\Admin\Support\Helper;
use Dcat\Admin\Widgets\Checkbox as WidgetCheckbox;

class Vue extends Field\Checkbox
{
    protected $view = 'weiwait.dcat-vue::common';

    protected array $watch = [];

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
            'watch' => $this->watch,
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

    public function disabled($disabled): Vue
    {
        $this->addVariables([
            'disabled' => (array) $disabled
        ]);

        return $this;
    }

    public function watch($column, $handler): Vue
    {
        $this->watch[] = [
            'type' => "$column:change",
            'handler' => $handler,
        ];

        return $this;
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
