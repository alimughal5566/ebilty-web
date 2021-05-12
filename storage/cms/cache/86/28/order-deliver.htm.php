<?php 
class Cms609bb10bc65e5468430894_a7ab29e8e894d41270e4708100ee97beClass extends Cms\Classes\PageCode
{
public function onStart() {
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        \Flash::error($this['theme_lang']['not_allowed']);
        return Redirect::to('dashboard/settings');
    }

    $this->page->stretch        = true;


    $this['order']      =   $order  =   \Spot\Shipment\Models\Order::find($this->param('id'));


    switch (Auth::getUser()->role_id) {
        case 6:
            if(!in_array($order->office_id, Auth::getUser()->manage->pluck('id')->toArray())){
                \Flash::error($this['theme_lang']['not_allowed']);
                return Redirect::to('dashboard/shipments/');
            }
            break;
        case 5:
            if($order->sender_id != Auth::getUser()->id && $order->receiver_id != Auth::getUser()->id){
                \Flash::error($this['theme_lang']['not_allowed']);
                return Redirect::to('dashboard/shipments/');
            }
            break;
        case 4:
            if(Auth::getUser()->is_superuser){
                if($order->office_id != Auth::getUser()->office){
                    \Flash::error($this['theme_lang']['not_allowed']);
                    return Redirect::to('dashboard/shipments/');
                }
            }else{
                if($order->assigned_id != Auth::getUser()->id){
                    if($order->manifest_id != null){
                        if($order->driver_id != Auth::getUser()->id && $order->employee_id != Auth::getUser()->id){
                            \Flash::error($this['theme_lang']['not_allowed']);
                            return Redirect::to('dashboard/shipments/');
                        }
                    }else{
                        \Flash::error($this['theme_lang']['not_allowed']);
                        return Redirect::to('dashboard/shipments/');
                    }
                }
            }
            break;
        case 3:
            $employees  =   \RainLab\User\Models\User::whereHas('groups',function($q){$q->whereIn('user_group_id', Auth::getUser()->groups->pluck('id')->toArray());})->pluck('id')->toArray();
            if(!in_array($order->assigned_id, $employees)){
                if($order->manifest_id != null){
                    if(!in_array($order->driver_id, $employees) && !in_array($order->employee_id, $employees)){
                        \Flash::error($this['theme_lang']['not_allowed']);
                        return Redirect::to('dashboard/shipments/');
                    }
                }else{
                    \Flash::error($this['theme_lang']['not_allowed']);
                    return Redirect::to('dashboard/shipments/');
                }
            }
            break;
    }

    $this['employees']      =   \RainLab\User\Models\User::whereNotIn('role_id',[1,5])->select('id','name')->get();
    $this['statuses']       =   \Spot\Shipment\Models\Status::select('id','name')->get();
}
public function onSave()
{
    if(!Auth::getUser()->hasUserPermission(["order"],'u')) {
        throw new ApplicationException($this['theme_lang']['not_allowed']);
    }
    $data = post();
    if(Auth::getUser()->role_id == 5){
        throw new ApplicationException($this['theme_lang']['not_allowed']);
    }

    $item                   = \Spot\Shipment\Models\Order::find($this->param('id'));

    $item->requested        = $this->param('status');
    $item->postponed        = null;
    $status                 = \Spot\Shipment\Models\Status::where('equal', $this->param('status'))->first();
    $type                   = 'delivered';
    if($status){
        $item->status           = $status->id;
    }

    $employee_id            = $item->assigned_id;
    $employeeorder          = \Spot\Shipment\Models\Employeeorder::where('order_id', $item->id)->first();
    if($employeeorder){
        $employee_id            = $employeeorder->employee_id;
        $employeeorder->delete();
    }

    if($item->payment_type  ==  2){

        if( \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('from_id', $item->sender_id)->where('payment_method', '!=','cash')->first()  ){

        }else{
            switch($this->param('status')){
                case 6:
                    $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id', $item->sender_id)->get();
                    foreach($payments as $payment){
                        $payment->payment_status = 1;
                        $payment->payment_with      = $employee_id;
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->update();
                    }
                    //if( $item->return_defray == 1 && $item->return_package_fee == 1){}
                break;
                case 8:
                    $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id', $item->sender_id)->get();
                    foreach($payments as $payment){
                        $payment->payment_status = 1;
                        $payment->payment_with      = $employee_id;
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->update();
                    }
                    if( $item->return_defray == 1 ){
                        $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id',$item->receiver_id)->get();
                        foreach($payments as $payment){
                            if($payment->description == 'return_package'){
                                $payment->payment_status = 1;
                            }else{
                                $payment->payment_status = 2;
                            }
                            $payment->payment_with      = $employee_id;
                            $payment->updated_at        = \Carbon\Carbon::now();
                            $payment->update();
                        }
                    }
                break;
                case 10:
                    $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id', $item->sender_id)->get();
                    foreach($payments as $payment){
                        $payment->payment_status = 2;
                        $payment->payment_with      = $employee_id;
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->update();
                    }
                break;
                case 11:
                    $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id', $item->sender_id)->get();
                    foreach($payments as $payment){
                        $payment->payment_status = 2;
                        $payment->payment_with      = $employee_id;
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->update();
                    }
                    if( $item->return_defray == 1 ){
                        $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id',$item->receiver_id)->get();
                        foreach($payments as $payment){
                            if($payment->description == 'return_package'){
                                $payment->payment_status = 1;
                            }else{
                                $payment->payment_status = 2;
                            }
                            $payment->payment_with      = $employee_id;
                            $payment->updated_at        = \Carbon\Carbon::now();
                            $payment->update();
                        }
                    }
                break;

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


            //if($item->customs_value != 0){
            //    $payment                    = new \Spot\Shipment\Models\Payment;
            //    $payment->type              = 1;
            //    $payment->payment_type      = 'customs';
            //    $payment->item_id           = $item->id;
            //    $payment->for_id            = $item->sender_id;
            //    $payment->payment_with      = $employee_id;
            //    $payment->movement          = 8; //Add  to the balance of packages
            //    $payment->amount            = $item->customs_value;
            //    $payment->date              = \Carbon\Carbon::now();
            //    $payment->created_at        = \Carbon\Carbon::now();
            //    $payment->updated_at        = \Carbon\Carbon::now();
            //    $payment->save();
            //}
            //if($item->tax != 0){
            //    $payment                    = new \Spot\Shipment\Models\Payment;
            //    $payment->type              = 1;
            //    $payment->payment_type      = 'tax';
            //    $payment->item_id           = $item->id;
            //    $payment->for_id            = $item->sender_id;
            //    $payment->payment_with      = $employee_id;
            //    $payment->movement          = 8; //Add  to the balance of packages
            //    $payment->amount            = ($item->tax*$item->courier_fee/100);
            //    $payment->date              = \Carbon\Carbon::now();
            //    $payment->created_at        = \Carbon\Carbon::now();
            //    $payment->updated_at        = \Carbon\Carbon::now();
            //    $payment->save();
            //}
            //if($item->insurance != 0){
            //    $payment                    = new \Spot\Shipment\Models\Payment;
            //    $payment->type              = 1;
            //    $payment->payment_type      = 'insurance';
            //    $payment->item_id           = $item->id;
            //    $payment->for_id            = $item->sender_id;
            //    $payment->payment_with      = $employee_id;
            //    $payment->movement          = 8; //Add  to the balance of packages
            //    $payment->amount            = '-'.($item->insurance*$item->courier_fee/100);
            //    $payment->date              = \Carbon\Carbon::now();
            //    $payment->created_at        = \Carbon\Carbon::now();
            //    $payment->updated_at        = \Carbon\Carbon::now();
            //    $payment->save();
            //}


            //$payment                    = new \Spot\Shipment\Models\Payment;
            //$payment->type              = 1;
            //$payment->item_id           = $item->id;
            //$payment->payment_type      = 'courier_fee';
            //$payment->for_id            = $item->sender_id;
            //$payment->payment_with      = $employee_id;
            //$payment->movement          = 8; //Add  to the balance of packages
            //$payment->amount            = $item->courier_fee;
            //$payment->date              = \Carbon\Carbon::now();
            //$payment->created_at        = \Carbon\Carbon::now();
            //$payment->updated_at        = \Carbon\Carbon::now();
            //$payment->save();


            //if($item->return_defray == 1){
            //    $payment                    = new \Spot\Shipment\Models\Payment;
            //    $payment->type              = 1;
            //    $payment->item_id           = $item->id;
            //    $payment->payment_type      = 'package_fee';
            //    $payment->for_id            = $item->sender_id;
            //    $payment->payment_with      = $employee_id;
            //    $payment->movement          = 8; //Add  to the balance of packages
            //    $payment->amount            = $item->package_fee;
            //    $payment->date              = \Carbon\Carbon::now();
            //    $payment->created_at        = \Carbon\Carbon::now();
            //    $payment->updated_at        = \Carbon\Carbon::now();
            //    $payment->save();

            //    if($item->return_package_fee == 1){
            //        $payment                    = new \Spot\Shipment\Models\Payment;
            //        $payment->type              = 1;
            //        $payment->item_id           = $item->id;
            //        $payment->payment_type      = 'return_package_fee';
            //        $payment->for_id            = $item->sender_id;
            //        $payment->payment_with      = $employee_id;
            //        $payment->movement          = 8; //Add  to the balance of packages
            //        $payment->amount            = $item->return_courier_fee;
            //        $payment->date              = \Carbon\Carbon::now();
            //        $payment->created_at        = \Carbon\Carbon::now();
            //        $payment->updated_at        = \Carbon\Carbon::now();
            //        $payment->save();
            //    }
            //}
        }
    }else{

        if( \Spot\Shipment\Models\Payment_v2::where('item_id', $item->id)->where('from_id', $item->sender_id)->where('payment_method', '!=','cash')->first()  ){

        }else{

            switch($this->param('status')){
                case 6:
                    $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id', $item->sender_id)->get();
                    foreach($payments as $payment){
                        $payment->payment_status = 1;
                        $payment->payment_with      = $employee_id;
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->update();
                    }
                    //if( $item->return_defray == 1 && $item->return_package_fee == 1){}
                break;
                case 8:
                    $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id', $item->sender_id)->get();
                    foreach($payments as $payment){
                        $payment->payment_status = 1;
                        $payment->payment_with      = $employee_id;
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->update();
                    }
                    if( $item->return_defray == 1 ){
                        $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id',$item->receiver_id)->get();
                        foreach($payments as $payment){
                            if($payment->description == 'return_package'){
                                $payment->payment_status = 1;
                            }else{
                                $payment->payment_status = 2;
                            }
                            $payment->payment_with      = $employee_id;
                            $payment->updated_at        = \Carbon\Carbon::now();
                            $payment->update();
                        }
                    }
                break;
                case 10:
                    $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id', $item->sender_id)->get();
                    foreach($payments as $payment){
                        $payment->payment_status = 2;
                        $payment->payment_with      = $employee_id;
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->update();
                    }
                break;
                case 11:
                    $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id', $item->sender_id)->get();
                    foreach($payments as $payment){
                        $payment->payment_status = 2;
                        $payment->payment_with      = $employee_id;
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->update();
                    }
                    if( $item->return_defray == 1 ){
                        $payments                    = \Spot\Shipment\Models\Payment_v2::where('item_id',   $item->id)->where('from_id',$item->receiver_id)->get();
                        foreach($payments as $payment){
                            if($payment->description == 'return_package'){
                                $payment->payment_status = 1;
                            }else{
                                $payment->payment_status = 2;
                            }
                            $payment->payment_with      = $employee_id;
                            $payment->updated_at        = \Carbon\Carbon::now();
                            $payment->update();
                        }
                    }
                break;

            }


            //$payment                    = new \Spot\Shipment\Models\Payment;
            //$payment->type              = 1;
            //$payment->item_id           = $item->id;
            //$payment->payment_type      = 'courier_fee';
            //$payment->for_id            = $item->sender_id;
            //$payment->payment_with      = $employee_id;
            //$payment->movement          = 8; //Add  to the balance of packages
            //$payment->amount            = $item->courier_fee;
            //$payment->date              = \Carbon\Carbon::now();
            //$payment->created_at        = \Carbon\Carbon::now();
            //$payment->updated_at        = \Carbon\Carbon::now();
            //$payment->save();

            //if($item->return_defray == 1){
            //    $payment                    = new \Spot\Shipment\Models\Payment;
            //    $payment->type              = 1;
            //    $payment->item_id           = $item->id;
            //    $payment->payment_type      = 'package_fee';
            //    $payment->for_id            = $item->sender_id;
            //    $payment->payment_with      = $employee_id;
            //    $payment->movement          = 8; //Add  to the balance of packages
            //    $payment->amount            = $item->package_fee;
            //    $payment->date              = \Carbon\Carbon::now();
            //    $payment->created_at        = \Carbon\Carbon::now();
            //    $payment->updated_at        = \Carbon\Carbon::now();
            //    $payment->save();

            //    $payment                    = new \Spot\Shipment\Models\Payment;
            //    $payment->type              = 1;
            //    $payment->item_id           = $item->id;
            //    $payment->payment_type      = 'package_fee';
            //    $payment->for_id            = $item->sender_id;
            //    $payment->movement          = 4;
            //    $payment->amount            = $item->package_fee;
            //    $payment->date              = \Carbon\Carbon::now();
            //    $payment->created_at        = \Carbon\Carbon::now();
            //    $payment->updated_at        = \Carbon\Carbon::now();
            //    $payment->save();

            //    if($item->return_package_fee == 1){
            //        $payment                    = new \Spot\Shipment\Models\Payment;
            //        $payment->type              = 1;
            //        $payment->item_id           = $item->id;
            //        $payment->payment_type      = 'return_package_fee';
            //        $payment->for_id            = $item->sender_id;
            //        $payment->payment_with      = $employee_id;
            //        $payment->movement          = 8; //Add  to the balance of packages
            //        $payment->amount            = $item->return_courier_fee;
            //        $payment->date              = \Carbon\Carbon::now();
            //        $payment->created_at        = \Carbon\Carbon::now();
            //        $payment->updated_at        = \Carbon\Carbon::now();
            //        $payment->save();
            //    }
            //}
        }
    }

    $item->esign            = htmlspecialchars($data['signaturePadImg']);
    $item->delivered_by     = $employee_id;
    $item->delivered_responsiable     = Auth::getUser()->id;
    $item->received_by      = htmlspecialchars($data['receiver']);
    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();



    if(isset($data['note']) && $data['note'] != ''){
        $data = post();
        $note                               = new \Spot\Shipment\Models\Notes;
        $note->user_id                      = Auth::getUser()->id;
        $note->item_id                      = $this->param('id');
        $note->item_type                    = 1;
        $note->content                      = $data['note'];
        $note->created_at                   = \Carbon\Carbon::now();
        $note->updated_at                   = \Carbon\Carbon::now();
        $note->save();
    }

    $event_data =   array(
        'sender'                =>  Auth::getUser(),
        'shipping_sender'       =>  $item->sender_id,
        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
        'shipping_responsible'  =>  $employee_id,
        'item'                  =>  $item,
        'type'                  =>  $type,
        'thumb'                 =>  'icon',
        'icon'                  =>  'flaticon-gift',
        'subject'               =>  $this['theme_lang'][$type],
        'message'               =>  $this['theme_lang'][$type],
        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
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

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard');
}
}
