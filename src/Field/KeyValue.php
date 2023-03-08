<?php

namespace Weiwait\DcatVue\Field;

use Dcat\Admin\Form\Field;
use Dcat\Admin\Support\Helper;
use Illuminate\Support\Arr;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Str;
use Weiwait\DcatVue\Field\Traits\FieldCommon;
use Weiwait\DcatVue\Field\Traits\HasWatch;
use function Swoole\Coroutine\map;

class KeyValue extends Field\KeyValue
{
    use FieldCommon, HasWatch;

    private bool $is_list = false;
    private bool $is_serial = false;
    private bool $is_sortable = false;
    private array $keys = [];

    public function getValidator(array $input)
    {
        if ($this->is_list) {
            if ($this->validator) {
                return $this->validator->call($this, $input);
            }

            if (! is_string($this->column)) {
                return false;
            }

            $rules = $attributes = [];

            if (! Arr::has($input, $this->column)) {
                return false;
            }

            if ($fieldRules = $this->getRules()) {
                $rules["{$this->column}.values.*"] = $fieldRules;
            }
            $attributes["{$this->column}.values.*"] = __('Value');
            $rules["{$this->column}.values"][] = 'array';

            $attributes["{$this->column}.values"] = $this->label;

            $input = $this->prepareValidatorInput($input);

            return validator($input, $rules, $this->getValidationMessages(), $attributes);
        }

        return parent::getValidator($input);
    }

    public function formatValidatorMessages($messageBag): MessageBag
    {
        if ($this->is_list) {
            $messages = new MessageBag();

            foreach ($messageBag->toArray() as $column => $message) {
                $messages->add($this->column, $message);
            }

            return $messages;
        }

        return parent::formatValidatorMessages($messageBag);
    }

    protected function prepareValidatorInput(array $input): array
    {
        if ($this->is_list) {
            Arr::forget($input, "{$this->column}.values.".static::DEFAULT_FLAG_NAME);

            return $input;
        }

        return parent::prepareValidatorInput($input);
    }

    protected function prepareInputValue($value)
    {
        if ($this->is_list) {
            unset($value['values'][self::DEFAULT_FLAG_NAME]);

            if (empty($value['values'])) {
                return [];
            }

            return array_values($value['values']);
        }

        return parent::prepareInputValue($value);
    }

    public function render()
    {
        /****************************** parent ************************************/

        $value = $this->value();

        $this->value(collect($value)->map(fn($value, $key) => ['key' => $key, 'value' => $value])->values());

        $this->addVariables([
            'count' => $value ? count($value) : 0,
            'keyLabel' => $this->getKeyLabel(),
            'valueLabel' => $this->getValueLabel(),
        ]);

        /****************************** field ************************************/

        if (!$this->shouldRender()) {
            return '';
        }

        $this->setDefaultClass();

        $this->callComposing();

        $this->withScript();

        /****************************** custom ************************************/

        $this->addVariables([
            'is_list' => $this->is_list,
            'is_serial' => $this->is_serial,
            'is_sortable' => $this->is_sortable,
            'keys' => $this->keys,
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

    protected function withProvides()
    {
        $this->addVariables([
            'component' => 'KeyValue',
            'mountId' => 'id' . md5(Str::uuid()),
        ]);
    }

    public function sortable(bool $sortable = true): self
    {
        $this->is_sortable = $sortable;

        return $this;
    }

    public function serial(bool $serial = true): self
    {
        $this->is_serial = $serial;

        return $this;
    }

    public function keys(array $keys): self
    {
        $this->keys = $keys;

        return $this;
    }

    public function list(bool $list = true): self
    {
        $this->is_list = $list;

        return $this;
    }

}
