<?php 
use \Spot\Shipment\Models\Settings;use RainLab\Translate\Classes\Translator;use RainLab\Translate\Components\LocalePicker;class Cms60b09ab332b55095575913_26a8d59069490ebb5a374ea88c9708d4Class extends Cms\Classes\LayoutCode
{



protected $translator;
public function onMyRegister()
{

    $data['role_id']         = 5;
    $this['account']->onRegister();
}
}
