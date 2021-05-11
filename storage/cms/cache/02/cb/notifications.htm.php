<?php 
class Cms609a0a71b42d8061358192_0b07f6cbb02024466e52620e95f73f1cClass extends Cms\Classes\PageCode
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
