<?php 
class Cms608db6919cd94386711433_7fbeb15c4c2a0818f9353bdf565e5076Class extends Cms\Classes\PageCode
{
public function onStart(){
    if(!Auth::getUser()->hasUserPermission(["order"],'r')) {
        \Flash::error($this['theme_lang']['not_allowed']);
    }

    $this->page->listing        = true;

    if(Auth::getUser()->hasUserPermission(["order"],'c')){
        if(Auth::getUser()->role_id == 5){
            $this->page->actions = array(
	            'buttons'   =>  array(
	                array(
	                    'id'    =>  'addNew',
	                    'title' =>  $this['theme_lang']['add_new'],
	                    'icon'  =>  'flaticon2-add',
	                    'type'  =>  'info',
	                    'url'   =>  url('dashboard/containers/create'),
	                )
	            ),
	            'listing'   =>  array(
	                array(
	                    'id'    =>  'updateStatus',
	                    'title' =>  "Edit Status",
	                    'icon'  =>  false,
	                    'type'  =>  'success',
	                    'url'   =>  'javascript:;',
	                ),
	                array(
	                    'id'    =>  'printContainers',
	                    'title' =>  "Print Containers",
	                    'icon'  =>  false,
	                    'type'  =>  'info',
	                    'url'   =>  'javascript:;',
	                )

	            ),
	            'delete'    =>  true,
	        );
        }elseif(Auth::getUser()->role_id == 4){
            $this->page->actions = array(
                'buttons'   =>  array(
                    array(
                        'id'    =>  'addNew',
                        'title' =>  $this['theme_lang']['add_new'],
                        'icon'  =>  'flaticon2-add',
                        'type'  =>  'info',
                        'url'   =>  url('dashboard/containers/create'),
                    ),
                    array(
                        'id'    =>  'PrintYourOrders',
                        'title' =>  $this['theme_lang']['print_orders'],
                        'icon'  =>  'flaticon2-print',
                        'type'  =>  'info',
                        'url'   =>  'javascript:;',
                    ),
                ),
            );
        }else{
            $this->page->actions = array(
                'buttons'   =>  array(
                    array(
                        'id'    =>  'addNew',
                        'title' =>  $this['theme_lang']['add_new'],
                        'icon'  =>  'flaticon2-add',
                        'type'  =>  'info',
                        'url'   =>  url('dashboard/containers/create'),
                    ),
                    array(
                        'id'    =>  'PrintEmployeeOrders',
                        'title' =>  $this['theme_lang']['print_orders'],
                        'icon'  =>  'flaticon2-print',
                        'type'  =>  'info',
                        'url'   =>  'javascript:;',
                    ),
                ),
            );
        }
    }


    $this['containerStatuses']       =   \Spot\Container\Models\Status::select('id','name')->get();
}
public function onEnd(){
    switch($this->param('type')){
        case 'saved':
            $this->page->title ="Saved Containers" ;//$this['theme_lang']['containers_saved'];
            break;
        case 'requests':
            $this->page->title ="New Request" ;//$this['theme_lang']['containers_blocked'];
            break;    
        case 'blocked':
            $this->page->title ="Blocked Containers" ;//$this['theme_lang']['containers_blocked'];
            break;
        case 'registered':
            $this->page->title ="Registered Containers"; //$this['theme_lang']['containers_registered'];
            break;
        case 'loaded':
            $this->page->title ="Loaded Containers"; //$this['theme_lang']['containers_loaded'];
            break;    
        case 'released':
            $this->page->title ="Released Containers"; //$this['theme_lang']['containers_released'];
            break;
        case 'all':
            $this->page->title ="All Containers" ;//$this['theme_lang']['containers_all'];
            break;
        default:
            if(Auth::getUser()->role_id == 5){
                $this->page->title ="Saved Containers" ;//$this['theme_lang']['containers_saved'];
            }else{
                $this->page->title ="All Containers"; //$this['theme_lang']['containers_registered'];
            }
    }
}
public function onEditStatus()
{
    if(Auth::getUser()->hasUserPermission(["order"],'c')){

        $data = post();

        $ids    =   explode(",",$data['ids']);
        foreach($ids as $id){
            if($id == '' || $id == null){
                continue;
            }
            $subitem                   = \Spot\Shipment\Models\Order::find($id);
            $subitem->status_id      = $data['status_id'];
            $subitem->updated_at       = \Carbon\Carbon::now();
            $subitem->update();
        }

    //    $event_data =   array(
    //        'sender'                =>  Auth::getUser(),
    //        'shipping_sender'       =>  (($item->sender_id) ? $item->sender_id : null),,
    //        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
    //        'shipping_responsible'  =>  $responsiable,
    //        'item'                  =>  $item,
    //        'type'                  =>  $type,
    //        'thumb'                 =>  'icon',
    //        'icon'                  =>  'flaticon-gift',
    //        'subject'               =>  $this['theme_lang'][$type],
    //        'message'               =>  $this['theme_lang'][$type],
    //        'url'                   =>  url('dashboard/shipments/manifest/'.$item->id.'/view'),
    //        'badge'                 =>  'success',
    //    );
    //    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    //    $activity                   = new \Spot\Shipment\Models\Activity;
    //    $activity->user_id          = Auth::getUser()->id;
    //    $activity->description      = "Edit Statuses";
    //    $activity->created_at       = \Carbon\Carbon::now();
    //    $activity->updated_at       = \Carbon\Carbon::now();
    //    $activity->save();

        \Flash::success($this['theme_lang']['created_successfully']);
         return Redirect::back();
    }
}
public function onPrintShipments()
{
    $data = post();
    $newIDs=null;
    $ids    =   explode(",",$data['ids']);
    foreach($ids as $id){
        if($id == '' || $id == null){
            continue;
        }
        $newIDs[]=$id;
    }
    Session::put('printIds', $newIDs);

    //var_dump($newIDs);
    return Redirect::to("/dashboard/shipments/shipments/print/"."label");
    //return redirect("/dashboard/shipments/".$newIDs[0]."/print/"."label")->with('ids',$newIDs);
}
public function onDelete()
{
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'d')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }

    if(null !== post('id')){
        if(is_array(post('id'))){
            foreach(post('id') as $id){
                $item = \Spot\Shipment\Models\Order::where('id',$id)->first();

                $activity                   = new \Spot\Shipment\Models\Activity;
                $activity->user_id          = Auth::getUser()->id;
                $activity->order_id         = $item->id;
                $activity->description      = 'deleted';
                $activity->created_at       = \Carbon\Carbon::now();
                $activity->updated_at       = \Carbon\Carbon::now();
                $activity->save();

                $item->payments->each->delete();
                $item->activities->each->delete();
                $item->tasks->each->delete();
                $item->items->each->delete();
                $item->delete();
            }
        }else{
            $item = \Spot\Shipment\Models\Order::where('id',$data['id'])->first();

            $activity                   = new \Spot\Shipment\Models\Activity;
            $activity->user_id          = Auth::getUser()->id;
            $activity->order_id         = $item->id;
            $activity->description      = 'deleted';
            $activity->created_at       = \Carbon\Carbon::now();
            $activity->updated_at       = \Carbon\Carbon::now();
            $activity->save();

            $item->payments->each->delete();
            $item->activities->each->delete();
            $item->tasks->each->delete();
            $item->items->each->delete();
            $item->delete();
        }
        return Redirect::back();
    }
}
public function onPrint()
{
    $data = post();
    if(Auth::getUser()->role_id != 4){
        return Redirect::to('dashboard/shipments/employee/'.$data['employee_id'].'/print/'.str_replace('/','-',$data['date']));
    }else{
        return Redirect::to('dashboard/shipments/employee/'.Auth::getUser()->id.'/print/'.str_replace('/','-',$data['date']));
    }
}
}
