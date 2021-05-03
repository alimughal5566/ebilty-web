<?php 
class Cms608dacee81ee3323475198_39b7b01ba06d314fbdc46a09796871c8Class extends Cms\Classes\PageCode
{
public function onStart(){
    if(!Auth::getUser()->hasUserPermission(["report"],'r')) {
        \Flash::error($this['theme_lang']['not_allowed']);
    }

    $this->page->listing        = true;
    $this->page->actions = array(
        'buttons'   =>  array(
            array(
                'id'    =>  'Print',
                'title' =>  $this['theme_lang']['print'],
                'icon'  =>  'flaticon2-print',
                'type'  =>  'info',
                'url'   =>  'javascript:;',
            ),
            array(
                'id'    =>  'Export',
                'title' =>  $this['theme_lang']['export_excel'],
                'icon'  =>  'flaticon-download',
                'type'  =>  'info',
                'url'   =>  'javascript:;',
            ),
        ),
        'delete'    =>  true,
    );

    $this['employees']  = RainLab\User\Models\User::whereNotIn('role_id',[1,5])->select('id','name')->get();
}
public function onEnd(){
    switch($this->param('kind')){
        case 'delayed':
            $this->page->title = $this['theme_lang']['shipments_delayed_reports'];
            break;
        case 'delivered':
            $this->page->title = $this['theme_lang']['shipments_delivered_reports'];
            break;
        case 'deposited':
            $this->page->title = $this['theme_lang']['transactions_deposited_reports'];
            break;
        case 'withdrwal':
            $this->page->title = $this['theme_lang']['transactions_withdrwal_reports'];
            break;
    }
}
public function onPrint()
{
    $data = post();

    if(isset($data['delivery_date']) && $data['delivery_date'] !=''){
        \Session::put('delivery_date', $data['delivery_date']);
    }

    if($this->param('type') == 'shipments'){
        if(isset($data['sender_id']) && $data['sender_id'] !=''){
            \Session::put('sender_id', $data['sender_id']);
        }
        if(isset($data['employee_id']) && $data['employee_id'] !=''){
            \Session::put('employee_id', $data['employee_id']);
        }
    }elseif($this->param('type') == 'transactions'){
        if(isset($data['for_id']) && $data['for_id'] !=''){
            \Session::put('for_id', $data['for_id']);
        }
        if(isset($data['status_id']) && $data['status_id'] !=''){
            \Session::put('status_id', $data['status_id']);
        }
    }
    return Redirect::to('dashboard/reports/'.$this->param('type').'/'.$this->param('kind').'/print');
}
public function onExport()
{
    $data = post();

    if(isset($data['delivery_date']) && $data['delivery_date'] !=''){
        \Session::put('delivery_date', $data['delivery_date']);
    }

    if($this->param('type') == 'shipments'){
        if(isset($data['sender_id']) && $data['sender_id'] !=''){
            \Session::put('sender_id', $data['sender_id']);
        }
        if(isset($data['employee_id']) && $data['employee_id'] !=''){
            \Session::put('employee_id', $data['employee_id']);
        }
    }elseif($this->param('type') == 'transactions'){
        if(isset($data['for_id']) && $data['for_id'] !=''){
            \Session::put('for_id', $data['for_id']);
        }
        if(isset($data['status_id']) && $data['status_id'] !=''){
            \Session::put('status_id', $data['status_id']);
        }
    }
    return Redirect::to('dashboard/reports/'.$this->param('type').'/'.$this->param('kind').'/excel');
}
public function onGetclients()
{
    $data = post();
    $item = '';
    $array = array();
    if(isset($data['term']) && $data['term'] != ''){
        $item = $data['term'];
        $items = \RainLab\User\Models\User::where('role_id', 5)
                    ->where(function($q) use($item){
                        $q->where('id', 'like', "%$item%");
                        $q->orWhere('name', 'like', "%$item%");
                        $q->orWhere('username', 'like', "%$item%");
                        $q->orWhere('email', 'like', "%$item%");
                        $q->orWhere('phone', 'like', "%$item%");
                        $q->orWhere('mobile', 'like', "%$item%");
                    })
                    ->get();

        foreach($items as $item){
            $array[] = array("id"=>$item->id, "text"=>$item->name, "mobile"=>$item->mobile);
        }
    }
    return $array;
}
public function onGetusers()
{
    $data = post();
    $item = '';
    $array = array();
    if(isset($data['term']) && $data['term'] != ''){
        $item = $data['term'];
        $items = \RainLab\User\Models\User::where('role_id', '!=',1)
                    ->where(function($q) use($item){
                        $q->where('id', 'like', "%$item%");
                        $q->orWhere('name', 'like', "%$item%");
                        $q->orWhere('username', 'like', "%$item%");
                        $q->orWhere('email', 'like', "%$item%");
                        $q->orWhere('phone', 'like', "%$item%");
                        $q->orWhere('mobile', 'like', "%$item%");
                    })
                    ->get();

        foreach($items as $item){
            $array[] = array("id"=>$item->id, "text"=>$item->name, "mobile"=>$item->mobile.' ('.$item->role->name.')');
        }
    }
    return $array;
}
}
