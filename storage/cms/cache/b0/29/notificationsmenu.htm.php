<?php 
class Cms60951eff62721996424363_c0151bc7644a282ccaf88ab1aa30c227Class extends Cms\Classes\PartialCode
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
