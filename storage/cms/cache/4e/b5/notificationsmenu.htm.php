<?php 
class Cms608fa91d23c71337260548_c0eb1b34a6c89c1c3e84dfc0ab45eaa6Class extends Cms\Classes\PartialCode
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
