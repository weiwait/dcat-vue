<?php

namespace Weiwait\DcatVue\Field\Traits;

trait HasWatch
{
    public function watch(string $target, string $handler): static
    {
        $this->addVariables([
            'watches' => array_merge(
                $this->variables()['watches'] ?? [],
                [compact('target', 'handler')]
            )
        ]);

        return $this;
    }
}
