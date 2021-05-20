<?php 
class Cms609bd106bfada972380625_a9db63dba851c1030a1c98def0810f0cClass extends Cms\Classes\PageCode
{
public function onStart() {
    if($this->param('id')){
        $notification           =   $this->user->notifications()->find($this->param('id'));
        $notification->read_at  =   \Carbon\Carbon::now();
        $notification->update();

        if(isset($notification->data['url'])){
            return Redirect::to($notification->data['url']);
        }else{
            return Redirect::to('dashboard/notifications');
        }
    }


    $this->page->listing    = true;
    $this->page->actions    = array(
        'buttons'   =>  array(
            'checkall'      =>  array(
                'title'     =>  $this['theme_lang']['mark_all_readed'],
                'id'        =>  'check_all',
                'icon'      =>  'la la-check',
            ),
        ),
    );
}
public function onCheckall() {
    Auth::getUser()->notifications()->where('read_at', null)->update(['read_at' => \Carbon\Carbon::now()]);
}
}
