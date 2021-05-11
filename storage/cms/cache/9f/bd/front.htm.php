<?php 
use \Spot\Shipment\Models\Settings;use RainLab\Translate\Classes\Translator;use RainLab\Translate\Components\LocalePicker;class Cms6094e9cecbb7c235532506_079359ec59dbbbe42ab98a3647827be3Class extends Cms\Classes\LayoutCode
{



protected $translator;
public function onMyRegister()
{

    $data['role_id']         = 5;
    $this['account']->onRegister();
}
}
