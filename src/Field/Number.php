<?php

namespace Weiwait\DcatVue\Field;

use Dcat\Admin\Form\Field;
use Weiwait\DcatVue\Field\Traits\FieldCommon;
use Weiwait\DcatVue\Field\Traits\HasWatch;

class Number extends Field\Number
{
    use FieldCommon, HasWatch;

    public function render()
    {
        /****************************** parent ************************************/
        $this->addVariables([
            'prepend' => $this->prepend,
            'append'  => $this->append,
        ]);

        /****************************** field ************************************/

        $this->addVariables([
            'options'       => $this->options,
        ]);

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
            'component' => 'Number',
        ]);
    }

    public function step(int $step = 1): static
    {
        $this->addVariables([
            'step' => $step,
        ]);

        return $this;
    }

    public function precision(int|float $precision): static
    {
        $this->addVariables([
            'precision' => $precision,
        ]);

        return $this;
    }

    public function clearable(bool $clearable = true): static
    {
        $this->addVariables([
            'clearable' => $clearable,
        ]);

        return $this;
    }

    public function showButton(bool $showButton = true): static
    {
        $this->addVariables([
            'showButton' => $showButton,
        ]);

        return $this;
    }

    public function bothButton(bool $both = true): static
    {
        $this->addVariables([
            'bothButton' => $both,
        ]);

        return $this;
    }

    public function min($value): static
    {
        $this->addVariables([
            'min' => $value,
        ]);

        return $this;
    }

    public function max($value): static
    {
        $this->addVariables([
            'max' => $value,
        ]);

        return $this;
    }
}
