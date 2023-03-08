<?php

namespace Weiwait\DcatVue\Field\Traits;

use Dcat\Admin\Exception\RuntimeException;
use Dcat\Admin\Form\Field;
use Illuminate\Database\Eloquent\Model;

trait HasWatch
{
    public function watch(string $field, string $handler): static
    {
        $this->addVariables([
            'watches' => array_merge(
                $this->variables()['watches'] ?? [],
                [compact('field', 'handler')]
            )
        ]);

        return $this;
    }
}
