<?php 
class Cms609b9c1880839855132792_00b481d094d55a7c98850be50ece4616Class extends Cms\Classes\PartialCode
{
public function onStart(){
        $data = post();
        if(isset($data['id'])){
            $this['notifications']   =   \RainLab\User\Models\User::find($data['id'])->notifications;
        }else{
            $this['notifications']   =   $this->user->notifications;
        }
    }
}
