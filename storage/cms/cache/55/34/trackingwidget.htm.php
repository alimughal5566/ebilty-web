<?php 
class Cms608d2edd1bed3015070779_7951d206a30445ce5c12cc2c497760b5Class extends Cms\Classes\PartialCode
{
public function onStart(){
        $data = get();

        $this['search'] = false;
        if(isset($data['number'])){
            $this['search'] = true;
        	$order			= new Spot\Shipment\Models\Order;
            $settings       = \Spot\Shipment\Models\Settings::instance();
            $length         = strlen($this['settings']['tracking']['prefix_order']);
            $prefix         = substr($data['number'], 0, $length);
            if (strcasecmp($prefix, $this['settings']['tracking']['prefix_order']) == 0) {
                $data['number'] =   str_ireplace($this['settings']['tracking']['prefix_order'],'',$data['number']);
            }
        	$this['order']	=	$order->where('number', $data['number'])->first();
        }elseif($this->param('number') !== null){
            $data['number'] = $this->param('number');
            $this['search'] = true;
        	$order			= new Spot\Shipment\Models\Order;
            $settings       = \Spot\Shipment\Models\Settings::instance();
            $length         = strlen($this['settings']['tracking']['prefix_order']);
            $prefix         = substr($data['number'], 0, $length);
            if (strcasecmp($prefix, $this['settings']['tracking']['prefix_order']) == 0) {
                $data['number'] =   str_ireplace($this['settings']['tracking']['prefix_order'],'',$data['number']);
            }
        	$this['order']	=	$order->where('number', $data['number'])->first();
        }
    }
}
