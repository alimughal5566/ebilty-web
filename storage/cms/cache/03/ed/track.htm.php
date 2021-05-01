<?php 
class Cms608c00428a8ba786587450_42908fa32053b90b35432d4ec3ba671fClass extends Cms\Classes\PageCode
{
public function onStart()
{
    $data = get();
    if(isset($data['number'])){
        $this['number'] = $data['number'];
    }else{
        $this['number'] = $this->param('number');
    }
}
public function onTracking()
{
    return true;
}
}
