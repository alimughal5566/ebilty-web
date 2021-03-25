<?php 
use \Spot\Shipment\Models\Settings;use RainLab\Translate\Classes\Translator;use RainLab\Translate\Components\LocalePicker;class Cms605c1ea60b32b510909266_e97a47b75080af5b34f36b06bc211245Class extends Cms\Classes\LayoutCode
{



protected $translator;
public function onMyRegister()
{
    $data['role_id']         = 5;
    $this['account']->onRegister();
}
}
