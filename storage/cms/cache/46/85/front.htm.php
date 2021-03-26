<?php 
use \Spot\Shipment\Models\Settings;use RainLab\Translate\Classes\Translator;use RainLab\Translate\Components\LocalePicker;class Cms605dc7f988c35563975998_448c7a144c84754ed258235988ce0cf7Class extends Cms\Classes\LayoutCode
{



protected $translator;
public function onMyRegister()
{
    $data['role_id']         = 5;
    $this['account']->onRegister();
}
}
