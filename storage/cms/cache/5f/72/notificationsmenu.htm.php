<?php 
class Cms608d8cfdd2672629051459_9d677c2d4ba19a0f7718764eb8a09c0fClass extends Cms\Classes\PartialCode
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
