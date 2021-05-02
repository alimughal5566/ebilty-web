<?php 
class Cms608d2edc6148b474694585_ed25e659b0bc7c1f4e02b697ed0fbbf6Class extends Cms\Classes\PageCode
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
