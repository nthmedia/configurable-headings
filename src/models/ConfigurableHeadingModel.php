<?php

namespace nthmedia\configurableheadings\models;

use yii\base\Model as BaseModel;

class ConfigurableHeadingModel extends BaseModel
{
    public ?string $heading = null;
    public ?string $element = null;
    public ?bool $enableId = false;
    public ?string $overwriteId = null;

    public function __construct($attributes = [], array $config = [])
    {
        foreach ($attributes as $key => $value) {
            if (property_exists($this, $key)) {
                $this[$key] = $value;
            }
        }
        parent::__construct($config);
    }
}
