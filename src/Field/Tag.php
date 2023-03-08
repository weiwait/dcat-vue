<?php

namespace Weiwait\DcatVue\Field;

use Dcat\Admin\Form\Field;
use Dcat\Admin\Support\Helper;
use Illuminate\Support\Str;
use Weiwait\DcatVue\Field\Traits\FieldCommon;
use Weiwait\DcatVue\Field\Traits\HasWatch;

class Tag extends Field\Tags
{
    use FieldCommon, HasWatch;

    public function render()
    {
        /****************************** parent ************************************/
        $value = Helper::array($this->value());

        if ($this->options instanceof \Closure) {
            $this->options(
                $this->options->call($this->values(), $value, $this)
            );
        }

        if ($this->keyAsValue) {
            $options = $value + $this->options;
        } else {
            $options = array_unique(array_merge($value, (array) $this->options));
        }

        $this->addVariables([
            'options'    => $options,
            'keyAsValue' => $this->keyAsValue,
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
            'component' => 'Tag',
            'mountId' => 'id' . md5(Str::uuid()),
       ]);
    }

    public function max(int $max): self
    {
        $this->addVariables(['max' => $max]);

        return $this;
    }
}
