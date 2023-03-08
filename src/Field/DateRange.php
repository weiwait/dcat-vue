<?php

namespace Weiwait\DcatVue\Field;

use Dcat\Admin\Form\Field;
use Dcat\Admin\Support\Helper;
use Illuminate\Support\Str;
use Weiwait\DcatVue\Field\Traits\FieldCommon;
use Weiwait\DcatVue\Field\Traits\HasWatch;

class DateRange extends Field\DateRange
{
    use FieldCommon, HasWatch;

    public function render()
    {
        /****************************** parent ************************************/

        $this->options['locale'] = config('app.locale');

        $this->addVariables(['options' => $this->options]);

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
            'component' => 'DateRange',
       ]);
    }

    public function max(int $max): self
    {
        $this->addVariables(['max' => $max]);

        return $this;
    }

    public function disableDates(array $dates): self
    {
        $datesObj = [];
        foreach ($dates as $item) {
            $datesObj[] = ['start' => $item[0], 'end' => $item[1] ?? null];
        }

        $this->addVariables(['disableDates' => $datesObj]);

        return $this;
    }
}
