<?php

namespace Weiwait\DcatVue\Field\Traits;

use Dcat\Admin\Exception\RuntimeException;
use Dcat\Admin\Form\Field;
use Illuminate\Database\Eloquent\Model;

trait HasOptions
{
    /**
     * @throws RuntimeException
     */
    public function modelLoad(string $model, string $id, string $field, array $filters = [], int $perPage = 0): static
    {
        if (! class_exists($model) || ! in_array(Model::class, class_parents($model))) {
            throw new RuntimeException("[$model] must be a valid model class");
        }

        self::composing(function (Field $field) use($filters) {
            $refs = [];

            foreach ($filters as $name => $condition) {
                if (is_numeric($name)) {
                    $ref = explode('.', $condition);
                    $name = $condition;
                    $condition = $ref[0];
                } else {
                    $ref = explode('.', $name);
                }


                $refField = $field->form
                    ->fields()
                    ->filter(fn(Field $field) => $field->column() === $ref[0])
                    ->values()
                    ->get($filter[1] ?? 0);

                if (!$refField) {
                    throw new \Exception("找不到参考字段[$ref[0]");
                }

                $refs[] = ['vid' => $refField->vid(), 'name' => $name, 'condition' => $condition];
            }

            $field->addVariables([
                'loadRefs' => $refs,
            ]);
        });

        $filters = array_map(fn($k, $v) => is_numeric($k) ? $v : $k, array_keys($filters), array_values($filters));

        $this->addVariables([
            'load' => [
                'model' => $model,
                'id' => $id,
                'field' => $field,
                'perPage' => $perPage,
                'filters' => $filters,
                'url' => route('dcat.admin.weiwait.options.model'),
            ]
        ]);

        return $this;
    }
}
