<?php

namespace Weiwait\DcatVue\Field;

use Dcat\Admin\Form\Field;
use Exception;
use Illuminate\Support\Str;
use Weiwait\DcatVue\Field\Traits\FieldCommon;
use Weiwait\DcatVue\Field\Traits\HasWatch;

class Distpicker extends Field
{
    use FieldCommon, HasWatch;
    // 地图高度
    protected string $height = '380px';
    // 模板id
    protected string $areaId = '';
    // 关闭地图
    protected bool $disableMap = false;
    // 地址详细字段
    protected string $detailField = '';
    // 经度字段
    protected string $lngField = '';
    // 纬度字段
    protected string $latField = '';
    // 省字段
    protected string $provinceField = '';
    // 市字段
    protected string $cityField = '';
    // 区字段
    protected string $districtField = '';
    // 地图缩放字段
    protected string $zoomField = '';
    // 地图缩放
    protected float $zoom = 13.14;
    // 禁止选择
    protected array $disables = [];

    /**
     * @throws Exception
     */
    public function __construct($label)
    {
        parent::__construct([], [$label]);

        $this->areaId = md5(Str::uuid());

        $this->view = 'weiwait.dcat-vue::common';

        $this->makeVid();
    }

    public function dist(string $province = null, string $city = null, string $district = null): self
    {
        if ($province) {
            $this->column[$province] = $province;
            $this->provinceField = $province;
        }

        if ($city) {
            $this->column[$city] = $city;
            $this->cityField = $city;
        }

        if ($district) {
            $this->column[$district] = $district;
            $this->districtField = $district;
        }

        return $this;
    }

    public function coordinate(string $lat, string $lng): self
    {
        $this->column[$lat] = $lat;
        $this->column[$lng] = $lng;

        $this->latField = $lat;
        $this->lngField = $lng;

        return $this;
    }

    public function detail(string $detail): self
    {
        $this->column[$detail] = $detail;

        $this->detailField = $detail;

        return $this;
    }

    public function mapHeight(int $height, string $unit = 'px'): self
    {
        $this->height = $height . $unit;

        return $this;
    }

    public function disableMap(bool $disable = true): self
    {
        $this->disableMap = $disable;

        return $this;
    }

    public function mapZoom(float $zoom = 13.14, string $column = ''): self
    {
        $this->zoom = $zoom;

        if ($column) {
            $this->column[$column] = $column;

            $this->zoomField = $column;
        }

        return $this;
    }

    public function disableRegions(array $regions): self
    {
        $this->disables = $regions;

        return $this;
    }

    protected function withProvides()
    {
        $this->addVariables([
            'component' => 'DistPicker',
            'mountId' => 'id' . md5(Str::uuid()),
            'height' => $this->height,
            'areaId' => $this->areaId,
            'provinceField' => $this->provinceField,
            'cityField' => $this->cityField,
            'districtField' => $this->districtField,
            'detailField' => $this->detailField,
            'lngField' => $this->lngField,
            'latField' => $this->latField,
            'disableMap' => $this->disableMap,
            'zoom' => $this->zoom,
            'zoomField' => $this->zoomField,
            'disables' => $this->disables,
            'urls' => [
                'address2ll' => route('dcat.admin.weiwait.distpicker.address2ll'),
                'll2address' => route('dcat.admin.weiwait.distpicker.ll2address'),
                'regions' => route('dcat.admin.weiwait.distpicker.regions'),
            ]
        ]);
    }

    public function render()
    {
        if (! $this->shouldRender()) {
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
}
