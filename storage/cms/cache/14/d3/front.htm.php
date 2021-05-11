<?php 
use \Spot\Shipment\Models\Settings;use RainLab\Translate\Classes\Translator;use RainLab\Translate\Components\LocalePicker;class Cms6099fc6c6d55c474561149_79b745724f287ab45004e80db67c9975Class extends Cms\Classes\LayoutCode
{



protected $translator;
public function onMyRegister()
{

    $data['role_id']         = 5;
    $this['account']->onRegister();
}
}
