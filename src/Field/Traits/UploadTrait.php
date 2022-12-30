<?php

namespace Weiwait\DcatVue\Field\Traits;

trait UploadTrait
{
    use \Dcat\Admin\Form\Field\UploadField;

    public function withUpload()
    {
        $this->addVariables([
            'uploader' => [
                'disk' => $this->disk,
                'dir' => $this->getDirectory(),
                'uploaded_url' => route('dcat.admin.weiwait.file.uploaded'),
                'obs_config_url' => route('dcat.admin.weiwait.file.obs-config'),
            ]
        ]);
    }

    /**
     * @return mixed
     */
    public function defaultDirectory()
    {
        return config('admin.upload.directory.file');
    }
}
