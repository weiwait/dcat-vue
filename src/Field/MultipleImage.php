<?php

namespace Weiwait\DcatVue\Field;

use Dcat\Admin\Form\Field;
use Dcat\Admin\Support\Helper;
use Illuminate\Support\Str;
use Weiwait\DcatVue\Field\Traits\FieldCommon;
use Weiwait\DcatVue\Field\Traits\HasWatch;
use Weiwait\DcatVue\Models\WeiwaitUpload;

class MultipleImage extends Field\MultipleImage
{
    use FieldCommon, HasWatch;

    protected string $disk;

    protected function prepareInputValue($file)
    {
        WeiwaitUpload::query()->whereIn('name', (array) $file)->delete();

        return parent::prepareInputValue($file);
    }

    public function render()
    {
        if (!$this->shouldRender()) {
            return '';
        }

        $this->setDefaultClass();

        $this->callComposing();

        $this->withScript();

        $this->withProvides();

        if (! empty($this->value())) {
            $this->setupPreviewOptions();
        }

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
        $disk = config('admin.upload.disk', config('filesystems.default'));

        $this->addVariables([
            'component' => 'Image',
            'mountId' => 'id' . md5(Str::uuid()),
            'multiple' => true,
            'disk' => $this->disk ?? $disk,
            'dir' => $this->getDirectory(),
            'uploaded_url' => route('dcat.admin.weiwait.file.uploaded'),
            'obs_config_url' => route('dcat.admin.weiwait.file.obs-config'),
       ]);
    }

    public function disk($disk): self
    {
        $this->disk = $disk;

        return parent::disk($disk);
    }

    /**
     * @param float|array $ratio
     * @return self
     */
    public function ratio($ratio): self
    {
        if (empty($ratio)) return $this;

        if (is_numeric($ratio)) {
            return parent::ratio($ratio);
        }

        if (is_array($ratio)) {
            $this->mergeOptions(['dimensions' => ['ratio' => $ratio]]);
        }

        return $this;
    }

    /**
     * @param int | array $width
     * @param null $height
     * @return $this
     */
    public function resolution($width, $height = null): self
    {
        if (!is_array($width)) {
            $width = [
                'default' => [$width, $height ?: $width]
            ];
        }

        $this->mergeOptions(['resolution' => $width]);

        return $this;
    }

    /**
     * @throws \Exception
     */
    public function jpeg(float $quality = 1): self
    {
        if ($quality > 1 || $quality < 0) {
            throw new \Exception('图片质量区间[0~1]');
        }

        $this->mergeOptions(['quality' => $quality]);

        return $this;
    }

    public function large(): self
    {
        $this->mergeOptions(['large' => 'large']);

        return $this;
    }

    protected function initialPreviewConfig(): array
    {
        $previews = [];

        foreach (Helper::array($this->value()) as $value) {
            $previews[] = $this->objectUrl($value);
        }

        return $previews;
    }
}
