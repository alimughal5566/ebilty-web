<?php 
class Cms608db2e2d13aa803532171_1ec27024cd8684d32eff140db14ef009Class extends Cms\Classes\PageCode
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
