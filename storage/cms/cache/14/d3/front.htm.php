<?php 
use \Spot\Shipment\Models\Settings;use RainLab\Translate\Classes\Translator;use RainLab\Translate\Components\LocalePicker;class Cms60b099f84cfa7593335844_93dff9c64820ed56eeecc0ae307c3b33Class extends Cms\Classes\LayoutCode
{



protected $translator;
public function onMyRegister()
{
    $data['role_id']         = 5;
    $this['account']->onRegister();
}
}
