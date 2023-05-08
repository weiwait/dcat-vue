<?php

namespace Weiwait\DcatVue\Field;

use Dcat\Admin\Form\Field;
use Dcat\Admin\Support\Helper;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Weiwait\DcatVue\Field\Traits\FieldCommon;
use Weiwait\DcatVue\Field\Traits\HasWatch;

class Icon extends Field
{
    use FieldCommon, HasWatch;

    private string $colorPicker = 'append';

    public function __construct($column, $label)
    {
        parent::__construct([], $label);

        $this->view = 'weiwait.dcat-vue::common';

        $this->makeVid();

        $this->column['icon'] = $column;
    }

    protected function prepareInputValue($value)
    {
        if ('append' == $this->colorPicker && $color = \request('vic_color')) {
            $value['icon'] = $value['icon'] . ' ' . str_replace('#', 'vic-', $color);

            $colors = array_unique([$color, ...admin_setting_array('weiwait_icon_color')]);
            admin_setting(['weiwait_icon_color' => $colors]);

            return $value;
        }

        return parent::prepareInputValue($value);
    }

    protected function formatFieldData($data)
    {
        $values = parent::formatFieldData($data);

        if ('append' == $this->colorPicker) {
            $icon = Arr::get($values, $this->column['icon']);

            $icon = collect(explode(' ', $icon));

            if ($vic = $icon->last(fn($item) => Str::startsWith($item, 'vic-'))) {
                $color = str_replace('vic-', '#', $vic);
            }

            $icon =  $icon->filter(fn($item) => !Str::startsWith($item, 'vic-'))->join(' ');

            $values[$this->column['icon']] = $icon;

            $values['vic_color'] = $color ?? null;
        }

        return $values;
    }

    public function render()
    {
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
            'component' => 'Icon',
            'mountId' => 'id' . md5(Str::uuid()),
            'colorPicker' => $this->colorPicker,
       ]);
    }

    public function withColor(string $colorColumn): self
    {
        $this->column['color'] = $colorColumn;

        $this->colorPicker = 'independence';

        return $this;
    }

    public function closeColorPicker(bool $picker): self
    {
        $this->colorPicker = 'close';

        return $this;
    }
}
