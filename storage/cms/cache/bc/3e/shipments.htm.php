<?php 
class Cms5ffc0b4532b65952563933_64c732dd619926350977d5d886d80507Class extends Cms\Classes\PageCode
{
public function onStart(){
    if(!Auth::getUser()->hasUserPermission(["order"],'r')) {
        \Flash::error($this['theme_lang']['not_allowed']);
    }

    $this->page->listing        = true;

    $this['filter_statuses']           =   array(1 =>  $this['theme_lang']['pickup'],2 =>   $this['theme_lang']['send']);

    if(Auth::getUser()->hasUserPermission(["order"],'c') && Auth::getUser()->hasUserPermission(["manifest"],'c')){
        $this->page->actions = array(
            'buttons'   =>  array(
                array(
                    'id'    =>  'addNew',
                    'title' =>  $this['theme_lang']['add_new'],
                    'icon'  =>  'flaticon2-add',
                    'type'  =>  'info',
                    'url'   =>  url('dashboard/shipments/create'),
                ),
                array(
                    'id'    =>  'PrintEmployeeOrders',
                    'title' =>  $this['theme_lang']['print_orders'],
                    'icon'  =>  'flaticon2-print',
                    'type'  =>  'info',
                    'url'   =>  'javascript:;',
                ),
            ),
            'multi'     =>  array(
                array(
                    'id'    =>  'importNew',
                    'title' =>  'Import Shipments',//$this['theme_lang']['multiple_add'],
                    'icon'  =>  false,//flaticon2-add',
                    'type'  =>  'info',
                    'url'   =>  url('dashboard/shipments/import'),
                ),
                array(
                    'id'    =>  'importMulti',
                    'title' =>  $this['theme_lang']['multiple_add'],
                    'icon'  =>  false,//'flaticon2-add',
                    'type'  =>  'warning',
                    'url'   =>  url('dashboard/shipments/multiCreate'),
                ),
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
                    'id'    =>  'assignEmployee',
                    'title' =>  "Assign Employee",
                    'icon'  =>  false,
                    'type'  =>  'primary',
                    'url'   =>  'javascript:;',
                ),
                array(
                    'id'    =>  'printShipments',
                    'title' =>  "Print Shipments",
                    'icon'  =>  false,
                    'type'  =>  'info',
                    'url'   =>  'javascript:;',
                ),
                array(
                    'id'    =>  'createManifest',
                    'title' =>  $this['theme_lang']['add_manifest'],
                    'icon'  =>  false,
                    'type'  =>  'warning',
                    'url'   =>  'javascript:;',
                ),

            ),
            'delete'    =>  true,
        );
    }elseif(Auth::getUser()->hasUserPermission(["order"],'c')){
        if(Auth::getUser()->role_id == 5){
            $this->page->actions = array(
                'buttons'   =>  array(
                    array(
                        'id'    =>  'addNew',
                        'title' =>  $this['theme_lang']['add_new'],
                        'icon'  =>  'flaticon2-add',
                        'type'  =>  'info',
                        'url'   =>  url('dashboard/shipments/create'),
                    )
                ),
                array(
                    'id'    =>  'importNew',
                    'title' =>  $this['theme_lang']['multiple_add'],
                    'icon'  =>  'flaticon2-add',
                    'type'  =>  'warning',
                    'url'   =>  url('dashboard/shipments/import'),
                ),
                'listing'   =>  array(
                    array(
                        'id'    =>  'sendAll',
                        'title' =>  $this['theme_lang']['send_all'],
                        'icon'  =>  false,
                        'type'  =>  'success',
                        'url'   =>  'javascript:;',
                    ),
                ),
            );
        }elseif(Auth::getUser()->role_id == 4){
            $this->page->actions = array(
                'buttons'   =>  array(
                    array(
                        'id'    =>  'addNew',
                        'title' =>  $this['theme_lang']['add_new'],
                        'icon'  =>  'flaticon2-add',
                        'type'  =>  'info',
                        'url'   =>  url('dashboard/shipments/create'),
                    ),
                    array(
                        'id'    =>  'importNew',
                        'title' =>  $this['theme_lang']['multiple_add'],
                        'icon'  =>  'flaticon2-add',
                        'type'  =>  'warning',
                        'url'   =>  url('dashboard/shipments/import'),
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
                        'url'   =>  url('dashboard/shipments/create'),
                    ),
                    array(
                        'id'    =>  'importNew',
                        'title' =>  $this['theme_lang']['multiple_add'],
                        'icon'  =>  'flaticon2-add',
                        'type'  =>  'warning',
                        'url'   =>  url('dashboard/shipments/import'),
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
    }elseif(Auth::getUser()->hasUserPermission(["manifest"],'c')){
        $this->page->actions = array(
            'listing'   =>  array(
                array(
                    'id'    =>  'createManifest',
                    'title' =>  $this['theme_lang']['add_manifest'],
                    'icon'  =>  false,
                    'type'  =>  'success',
                    'url'   =>  '#',
                ),
            ),
            'delete'    =>  true,
        );
    }


    $this['cars']       = \Spot\Shipment\Models\Car::get();
    $this['employees']  = RainLab\User\Models\User::whereNotIn('role_id',[1,5])->select('id','name')->get();
    $this['shipmentStatuses']       =   \Spot\Shipment\Models\Status::select('id','name')->get();
}
public function onEnd(){
    switch($this->param('type')){
        case 'saved':
            $this->page->title = $this['theme_lang']['shipment_saved'];
            break;
        case 'requests':
            $this->page->title = $this['theme_lang']['shipment_requests'];
            break;
        case 'approved':
            $this->page->title = $this['theme_lang']['shipments_approved'];
            break;
        case 'assigned':
            $this->page->title = $this['theme_lang']['shipments_assigned'];
            break;
        case 'withdriver':
            $this->page->title = $this['theme_lang']['shipments_with_driver'];
            break;
        case 'postponed':
            $this->page->title = $this['theme_lang']['postponed_shipments'];
            break;
        case 'delivered':
            $this->page->title = $this['theme_lang']['delivered_shipments'];
            break;
        case 'supplied':
            $this->page->title = $this['theme_lang']['supplied_shipments'];
            break;
        case 'manifest':
            $this->page->title = $this['theme_lang']['shipments_manifest'];
            break;
        case 'all':
            $this->page->title = $this['theme_lang']['shipments_all'];
            break;
        default:
            if(Auth::getUser()->role_id == 5){
                $this->page->title = $this['theme_lang']['shipment_saved'];
            }else{
                $this->page->title = $this['theme_lang']['shipment_requests'];
            }
    }
}
public function onSavemanifest(){
    if(Auth::getUser()->hasUserPermission(["manifest"],'c')){

        $data = post();

        $item                   = new \Spot\Shipment\Models\Manifest;
        $item->date             = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['ship_date']));
        $item->user_id          = Auth::getUser()->id;
        if(isset($data['car_id']) && $data['car_id'] != ''){
            $item->car_id           = htmlspecialchars($data['car_id']);
            $item->driver_id        = \Spot\Shipment\Models\Car::find($data['car_id'])->driver_id;
        }
        if(isset($data['employee_id']) && $data['employee_id'] != ''){
            $item->employee_id           = htmlspecialchars($data['employee_id']);
        }
        $item->created_at       = \Carbon\Carbon::now();
        $item->updated_at       = \Carbon\Carbon::now();
        $item->save();

        $ids    =   explode(",",$data['ids']);
        foreach($ids as $id){
            if($id == '' || $id == null){
                continue;
            }
            $subitem                   = \Spot\Shipment\Models\Order::find($id);
            $subitem->manifest_id      = $item->id;
            if(isset($data['employee_id']) && $data['employee_id'] != ''){
                $subitem->assigned_id      = htmlspecialchars($data['employee_id']);
            }
            $subitem->updated_at       = \Carbon\Carbon::now();
            $subitem->update();
        }


        if($item->driver_id){
            $responsiable   =   $item->driver_id;
        }elseif($item->employee_id){
            $responsiable   =   $item->employee_id;
        }

        $type   =   'manifest_assigned';
        $event_data =   array(
            'sender'                =>  Auth::getUser(),
            'shipping_sender'       =>  $item->sender_id,
            'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
            'shipping_responsible'  =>  $responsiable,
            'item'                  =>  $item,
            'type'                  =>  $type,
            'thumb'                 =>  'icon',
            'icon'                  =>  'flaticon-gift',
            'subject'               =>  $this['theme_lang'][$type],
            'message'               =>  $this['theme_lang'][$type],
            'url'                   =>  url('dashboard/shipments/manifest/'.$item->id.'/view'),
            'badge'                 =>  'success',
        );
        \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

        $activity                   = new \Spot\Shipment\Models\Activity;
        $activity->user_id          = Auth::getUser()->id;
        $activity->order_id         = $item->id;
        $activity->description      = $type;
        $activity->created_at       = \Carbon\Carbon::now();
        $activity->updated_at       = \Carbon\Carbon::now();
        $activity->save();

        \Flash::success($this['theme_lang']['created_successfully']);
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
public function onShipmentPaid(){
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $item                       = \Spot\Shipment\Models\Order::find($data['id']);

    if($item->assigned_id){
        $responsiable   =   $item->assigned_id;
    }elseif($item->manifest_id){
        if($item->manifest->driver_id){
            $responsiable   =   $item->manifest->driver_id;
        }elseif($item->manifest->employee_id){
            $responsiable   =   $item->manifest->employee_id;
        }else{
            $responsiable   =   Auth::getUser()->id;
        }
    }else{
        $responsiable   =   Auth::getUser()->id;
    }

    $employeeorder          = \Spot\Shipment\Models\Employeeorder::where('order_id', $item->id)->first();
    if($employeeorder){
        $employee_id            = $employeeorder->employee_id;
        $employeeorder->delete();
    }


    $item->requested        = 10;
    $status                 = \Spot\Shipment\Models\Status::where('equal', 10)->first();
    $type                   = 'delivered';
    if($status){
        $item->status           = $status->id;
    }

    if($item->payment_type  ==  2){

        if( \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('from_id', $item->sender_id)->where('payment_method', '!=','cash')->first()  ){

        }else{
            $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id', $item->sender_id)->get();
                    foreach($payments as $payment){
                        $payment->payment_status = 2;
                        $payment->payment_with      = $responsiable;
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->update();
                    }

            $total                      = $item->courier_fee+$item->customs_value;
            if( $this['settings']['taxes']['type'] == 1 ){
                $total                      = $total+($item->tax*$item->courier_fee/100);
            }else{
                $total                      = $total+($item->tax_cgst*$item->courier_fee/100);
                $total                      = $total+($item->tax_sgst*$item->courier_fee/100);
            }
            $total                      = $total+($item->insurance*$item->courier_fee/100);
            if($item->return_package_fee == 1){
                $total                  += $item->return_courier_fee;
            }
            if($item->return_defray == 1){
                $total                  += $item->package_fee;
            }

        }
    }else{

        if( \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('from_id', $item->sender_id)->where('payment_method', '!=','cash')->first()  ){
            //var_dump('done');
        }else{

            $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id', $item->sender_id)->get();
                    foreach($payments as $payment){
                        $payment->payment_status = 2;
                        $payment->payment_with      = $responsiable;
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->update();
                    }
        }
    }


    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $responsiable,
        'item'                  =>  $item,
        'type'                  =>  'delivered_shipment',
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang']['assign_shipment'],
        'message'               =>  $this['theme_lang']['assign_shipment'],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'delivered';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::back(); 
}
public function onShipmentDeliveried(){
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $item                       = \Spot\Shipment\Models\Order::find($data['id']);

    if($item->assigned_id){
        $responsiable   =   $item->assigned_id;
    }elseif($item->manifest_id){
        if($item->manifest->driver_id){
            $responsiable   =   $item->manifest->driver_id;
        }elseif($item->manifest->employee_id){
            $responsiable   =   $item->manifest->employee_id;
        }else{
            $responsiable   =   Auth::getUser()->id;
        }
    }else{
        $responsiable   =   Auth::getUser()->id;
    }

    $employeeorder          = \Spot\Shipment\Models\Employeeorder::where('order_id', $item->id)->first();
    if($employeeorder){
        $employee_id            = $employeeorder->employee_id;
        $employeeorder->delete();
    }


    $item->requested        = 6;
    $status                 = \Spot\Shipment\Models\Status::where('equal', 6)->first();
    $type                   = 'delivered';
    if($status){
        $item->status           = $status->id;
    }

    if($item->payment_type  ==  2){

        if( \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('from_id', $item->sender_id)->where('payment_method', '!=','cash')->first()  ){

        }else{
            $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id', $item->sender_id)->get();
            foreach($payments as $payment){
                $payment->payment_status = 1;
                $payment->payment_with      = $responsiable;
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->update();
            }

            $total                      = $item->courier_fee+$item->customs_value;
            if( $this['settings']['taxes']['type'] == 1 ){
                $total                      = $total+($item->tax*$item->courier_fee/100);
            }else{
                $total                      = $total+($item->tax_cgst*$item->courier_fee/100);
                $total                      = $total+($item->tax_sgst*$item->courier_fee/100);
            }
            $total                      = $total+($item->insurance*$item->courier_fee/100);
            if($item->return_package_fee == 1){
                $total                  += $item->return_courier_fee;
            }
            if($item->return_defray == 1){
                $total                  += $item->package_fee;
            }

        }
    }else{

        if( \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('from_id', $item->sender_id)->where('payment_method', '!=','cash')->first()  ){
            //var_dump('done');
        }else{

            $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id', $item->sender_id)->get();

                    foreach($payments as $payment){
                        $payment->payment_status = 1;
                        $payment->payment_with      = $responsiable;
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->update();
                    }
        }
    }


    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $responsiable,
        'item'                  =>  $item,
        'type'                  =>  'delivered_shipment',
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang']['assign_shipment'],
        'message'               =>  $this['theme_lang']['assign_shipment'],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'delivered';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::back(); 
}
public function onShipmentApproved(){
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $item                       = \Spot\Shipment\Models\Order::find($data['id']);

    if($item->assigned_id){
        $responsiable   =   $item->assigned_id;
    }elseif($item->manifest_id){
        if($item->manifest->driver_id){
            $responsiable   =   $item->manifest->driver_id;
        }elseif($item->manifest->employee_id){
            $responsiable   =   $item->manifest->employee_id;
        }else{
            $responsiable   =   Auth::getUser()->id;
        }
    }else{
        $responsiable   =   Auth::getUser()->id;
    }


    $item->requested        = 1;
    $status                 = \Spot\Shipment\Models\Status::where('equal', 1)->first();
    $type                   = 'approved_shipment';
    if($status){
        $item->status           = $status->id;
    }
    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $responsiable,
        'item'                  =>  $item,
        'type'                  =>  'approved_shipment',
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang']['assign_shipment'],
        'message'               =>  $this['theme_lang']['assign_shipment'],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'assigned';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::back();  


}
public function onShipmentReceived(){
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $item                       = \Spot\Shipment\Models\Order::find($data['id']);

    if($item->assigned_id){
        $responsiable   =   $item->assigned_id;
    }elseif($item->manifest_id){
        if($item->manifest->driver_id){
            $responsiable   =   $item->manifest->driver_id;
        }elseif($item->manifest->employee_id){
            $responsiable   =   $item->manifest->employee_id;
        }else{
            $responsiable   =   Auth::getUser()->id;
        }
    }else{
        $responsiable   =   Auth::getUser()->id;
    }


    $item->requested        = 9;
    $status                 = \Spot\Shipment\Models\Status::where('equal', 9)->first();
    $type                   = 'discards_driver_received';
    if($status){
        $item->status           = $status->id;
    }
    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $responsiable,
        'item'                  =>  $item,
        'type'                  =>  'received_shipment',
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang']['assign_shipment'],
        'message'               =>  $this['theme_lang']['assign_shipment'],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'assigned';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::back();  


}
public function onAssignEmployee(){
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }
    $item                       = \Spot\Shipment\Models\Order::find($data['id']);
    if($item->requested == 1 ){
        $status                 = \Spot\Shipment\Models\Status::where('equal', 4)->first();
        if($status){
            $item->status           = $status->id;
            $item->requested        = $status->equal;
        }
    }
    if($item->requested == 9 || $item->requested == 7  ){
        $status                 = \Spot\Shipment\Models\Status::where('equal', 5)->first();
        if($status){
            $item->status           = $status->id;
            $item->requested        = $status->equal;
        }
    }
    if($item->requested == 8 || $item->requested == 11  ){
        $status                 = \Spot\Shipment\Models\Status::where('equal', 12)->first();
        if($status){
            $item->status           = $status->id;
            $item->requested        = $status->equal;
        }
    }
    $item->assigned_id          = htmlspecialchars($data['employee_id']);
    $item->updated_at           = \Carbon\Carbon::now();
    $item->update();

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $data['employee_id'],
        'item'                  =>  $item,
        'type'                  =>  'assign_shipment',
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang']['assign_shipment'],
        'message'               =>  $this['theme_lang']['assign_shipment'],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
        'badge'                 =>  'success',
    );
    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'assigned';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::back();  
}
public function onAssignSelectedEmployee(){
    if(Auth::getUser()->hasUserPermission(["order"],'c')){

        $data = post();

        $ids    =   explode(",",$data['ids']);
        foreach($ids as $id){
            if($id == '' || $id == null){
                continue;
            }
            $subitem                   = \Spot\Shipment\Models\Order::find($id);
            $subitem->assigned_id      = $data['employee_id'];
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
public function onSend(){
    if(is_array(post('id'))){
        foreach(post('id') as $id){
            if($id == ''){
                continue;
            }
            $item                   = \Spot\Shipment\Models\Order::where('id',$id)->first();

            $item->requested        = 0;
            $item->updated_at       = \Carbon\Carbon::now();
            $item->update();

            $event_data =   array(
                'sender'    =>  Auth::getUser(),
                'item'      =>  $item,
                'type'      =>  'new_shipments',
                'thumb'     =>  'icon',
                'icon'      =>  'flaticon-gift',
                'subject'   =>  $this['theme_lang']['new_shipments'],
                'message'   =>  $this['theme_lang']['new_shipments'],
                'url'       =>  url('dashboard/shipments/'.$item->id.'/view'),
                'badge'     =>  'success',
            );
            \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

            $activity                   = new \Spot\Shipment\Models\Activity;
            $activity->user_id          = Auth::getUser()->id;
            $activity->order_id         = $item->id;
            $activity->description      = 'created';
            $activity->created_at       = \Carbon\Carbon::now();
            $activity->updated_at       = \Carbon\Carbon::now();
            $activity->save();
        }
    }
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
