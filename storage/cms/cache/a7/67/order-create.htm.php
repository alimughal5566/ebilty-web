<?php 
use \Spot\Shipment\Models\Settings;class Cms609062a4d3536397021969_92f01a1da9ed461148c429304266deb3Class extends Cms\Classes\PageCode
{

public function onStart() {
    if(!Auth::getUser()->hasUserPermission(["order"],'c')) {





        \Flash::error($this['theme_lang']['not_allowed']);
        return Redirect::to('dashboard/settings');
    }
    //dd($this['settings']['shipments']);
    $this->page->stretch        = true;

    $this['primary_currency']=   \Responsiv\Currency\Models\Currency::where('is_primary', 1)->first();
    $this['employees']      =   \RainLab\User\Models\User::whereNotIn('role_id',[1,5])->select('id','name')->get();
    $this['packaging']      =   \Spot\Shipment\Models\Packaging::select('id','name')->get();
    $this['modes']          =   \Spot\Shipment\Models\Mode::select('id','name')->get();
    $this['couriers']       =   \Spot\Shipment\Models\Courier::select('id','name')->get();
    $this['labels']       =   \Spot\Shipment\Models\Label::select('id','name')->get();
    $this['handlers']       =   \Spot\Shipment\Models\Handler::select('id','name')->get();
    $this['breakdowns']       =   \Spot\Shipment\Models\Breakdown::select('id','name')->get();
    $this['deliverytimes']  =   \Spot\Shipment\Models\DeliveryTime::select('id','name')->get();
    $this['offices']        =   \Spot\Shipment\Models\Office::select('id','name')->get();
    $this['categories']     =   \Spot\Shipment\Models\Category::select('id','name')->get();
    $this['countries']      =   \RainLab\Location\Models\Country::select('id','name')->where('is_enabled', 1)->get();
    //$this['states']         =   \RainLab\Location\Models\State::whereHas('country',function($q){$q->where('is_enabled', 1);})->select('id','name')->get();
    //$this['cities']         =   \Spot\Shipment\Models\City::select('id','name')->get();
    //$this['areas']          =   \Spot\Shipment\Models\Area::select('id','name')->get();
    $this['statuses']       =   \Spot\Shipment\Models\Status::select('id','name','equal')->get();
    $this['categories_crud']=    \Spot\Shipment\Models\Categories::select('id','title')->get();
    $this['vehcile_crud']=    \Spot\Shipment\Models\Vehicles::all();
    $this['max']    =$max        =   \Spot\Shipment\Models\Order::max('number')+1;
    $this['languages']      =   \RainLab\Translate\Models\Locale::select('id', 'name','code')->get();
    $this['addShipmentForm']      =   Settings::get('addShipmentForm',true);
    $this['payment']      =   Settings::get('payment', true);
   // dd($max);
}
public function onSave()
{
    if(!Auth::getUser()->hasUserPermission(["order"],'c')) {
        throw new ApplicationException($this['theme_lang']['not_allowed']);
    }
    $data = post();
    $categories     =   \Spot\Shipment\Models\Category::select('id','name')->get();
    $addShipmentForm  = Settings::get('addShipmentForm',true);
    $companyData            =   Settings::get('company', true);
    if ( $addShipmentForm == "add_form_normal")
    {
        $number = '';
        for($x = 0; $x <= $this['settings']['tracking']['numbers_order']; $x++){
        $number .= '0';
        }
        $number .= \Spot\Shipment\Models\Order::withTrashed()->max('number')+1;
        //dd($number);
        //$number = substr($number, -$this['settings']['tracking']['numbers_order']);

        //$data['number']                 =   $number;

        $prev   =   \Spot\Shipment\Models\Order::where('number', $number)->first();
        if($prev){
          echo 'WE ARE HERE';
            throw new ApplicationException($this['theme_lang']['another_order_with_the_same_numbers']);
        }
        $item                        = new \Spot\Shipment\Models\Order;
            if(Auth::getUser()->role_id == 5){
                $item->sender_id             = Auth::getUser()->id;
                $address                     =\Spot\Shipment\Models\Address::where('user_id',Auth::getUser()->id)->first();
                $item->sender_address_id     = (($address) ? $address->id : null);

            }else{
                $item->sender_id                    = htmlspecialchars($data['sender_id']);
                $address      =   \Spot\Shipment\Models\Address::find($data['sender_address_id']);
                $item->sender_address_id     = (($address) ? $address->id : null);

            }

            $item->number                = $number;//htmlspecialchars($data['number']);
            $item->barcode                = $number;//htmlspecialchars($data['number']);

            $item->airWayBill                = htmlspecialchars($data['airwaybill']);
            $item->location                = htmlspecialchars($data['location']);
            if(isset($data['cc'])){
                $item->cc                = htmlspecialchars($data['cc']);
            }else{
                $item->cc                = 0;
            }
            if(isset($data['transfer'])){
                $item->transfer_jost                = 1;
            }
            if(isset($data['label_id']) && $data['label_id'] != '' && $data['label_id'] != 'other'){
                $item->label_id                = htmlspecialchars($data['label_id']);
            }elseif(isset($data['label_id']) && $data['label_id'] != '' && $data['label_id'] == 'other'){
                $label = new \Spot\Shipment\Models\Label;
                $label->name = htmlspecialchars($data['label_other']);
                $label->save();
                $item->label_id = $label->id;
            }
            $item->handler_id                = htmlspecialchars($data['handler_id']);
            if(isset($data['breakdown_id'])){
                $item->breakdown_id                = htmlspecialchars($data['breakdown_id']);
            }


            $item->remarks                = htmlspecialchars($data['remarks']);
            if(isset($data['notes'])){
            $item->released_note                = htmlspecialchars($data['notes']);
            }

            if(isset($data['courier_id']) && $data['courier_id'] != ''){
                $item->courier_id           = htmlspecialchars($data['courier_id']);
            }

            if(isset($data['clearance'])){
            $item->custom_clearance                    = htmlspecialchars($data['clearance']);
            }
            if(isset($data['fiscal'])){
            $item->fiscal_representation        = htmlspecialchars($data['fiscal']);
            }
            if(isset($data['payment_term'])){
            $item->payment_term                 = htmlspecialchars($data['payment_term']);
            }
            if(isset($data['price_kg'])){
                $item->price_kg                     = htmlspecialchars($data['price_kg']);
            }
            if( isset($data['storage_fee']) && htmlspecialchars($data['storage_fee']) == 'yes' ){
                $item->storage_fee              = 1;
                $item->cost_24                      = htmlspecialchars($data['cost_24']);
                $item->cost_48                      = htmlspecialchars($data['cost_48']);
            }
            else
                $item->storage_fee              = 2;
            $item->created_at            = \Carbon\Carbon::now();
            $item->updated_at            = \Carbon\Carbon::now();

            if(isset($data['status_id']) && $data['status_id'] != ''){
                $status = explode("_" , htmlspecialchars($data['status_id']) );
                $item->status_id        = $status[0];
                $item->requested        = $status[1];
                //$item->status_id        = htmlspecialchars($data['status_id']);
            }

            if(isset($data['assigned_id']) && $data['assigned_id'] != ''){
                $item->assigned_id  = htmlspecialchars($data['assigned_id']);
            }
            $item->type                  =2;
            if(isset($data['alert_received'])){
                $item-> preAlert_received            = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['alert_received']));
            }
            if(isset($data['note_received'])){
                $item->releasedNote_received            = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['note_received']));
            }

            $item->save();

            $subitem                    = new \Spot\Shipment\Models\Item;
            $subitem->order_id          = $item->id;
            $subitem->weight            = htmlspecialchars($data['weight']);
            $subitem->num_boxes            = htmlspecialchars($data['num_boxes']);
            $subitem->num_pallets            = htmlspecialchars($data['num_pallets']);
            $subitem->save();
    }
    elseif ( $addShipmentForm == "add_form_simple")
    {
        $number = '';
        for($x = 0; $x <= $this['settings']['tracking']['numbers_order']; $x++){
        $number .= '0';
        }
        $number .= \Spot\Shipment\Models\Order::withTrashed()->max('number')+1;
        $number = substr($number, -$this['settings']['tracking']['numbers_order']);

        //$data['number']                 =   $number;

        $prev   =   \Spot\Shipment\Models\Order::where('number', $number)->first();
        if($prev){
          echo 'WE ARE HERE';
            throw new ApplicationException($this['theme_lang']['another_order_with_the_same_numbers']);
        }

        $item                        = new \Spot\Shipment\Models\Order;
        if(Auth::getUser()->role_id == 5){
            $item->sender_id             = Auth::getUser()->id;
            $address                     =\Spot\Shipment\Models\Address::where('user_id',Auth::getUser()->id)->first();
            $item->sender_address_id     = (($address) ? $address->id : null);

        }else{
            $item->sender_name                     = htmlspecialchars($data['sender_name']);
            $item->sender_mobile                   = htmlspecialchars($data['sender_mobile']);
            $item->sender_city                     = htmlspecialchars($data['sender_city_id']);
            $item->sender_sector                   = htmlspecialchars($data['sender_area_id']);
            $item->sender_addr                     = htmlspecialchars($data['sender_addr']);
        }

        $item->receiver_name                     = htmlspecialchars($data['name']);
        $item->receiver_mobile                   = htmlspecialchars($data['mobile']);
        $item->receiver_city                     = htmlspecialchars($data['city_id']);
        $item->receiver_sector                   = htmlspecialchars($data['area_id']);
        $item->receiver_addr                  = htmlspecialchars($data['street_addr']);

        $item->ship_date             = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['ship_date']));

        $item->number                = $number;//htmlspecialchars($data['number']);
        $item->created_at            = \Carbon\Carbon::now();
        $item->updated_at            = \Carbon\Carbon::now();
        $item->barcode               = $number;//htmlspecialchars($data['number']);
        if(isset($data['mode_id']) && $data['mode_id'] != ''){
            $item->mode_id           = htmlspecialchars($data['mode_id']);
        }
        $item->courier_fee           = htmlspecialchars($data['courier_fee']);
        $item->type                  =2;
        $item->status_id             =19;
        if(isset($data['assigned_id']) && $data['assigned_id'] != ''){
            $item->assigned_id  = htmlspecialchars($data['assigned_id']);}
        $item->save();

        $subitem                    = new \Spot\Shipment\Models\Item;
        $subitem->order_id          = $item->id;

        //$subitem->category_id       = htmlspecialchars($data['category_id']);
        $categoryID=null;
        foreach ($categories as $category) {
            if($category->name == strtoupper(htmlspecialchars($data['category_id'])) ||
                $category->name == strtolower(htmlspecialchars($data['category_id']))||
                $category->name == ucfirst(strtolower(    htmlspecialchars($data['category_id']))) )
            {
                $categoryID = $category->id;
                break;
            }
        }
        if($categoryID !=null ){
            $subitem->category_id = $categoryID;
        }else{
            $category       =new \Spot\Shipment\Models\Category;
            $category->name = htmlspecialchars($data['category_id']);
            $category->save();
            $subitem->category_id = $category->id;
        }


        $subitem->description       = htmlspecialchars($data['description']);
        $subitem->quantity          = htmlspecialchars($data['quantity']);
        $subitem->weight            = htmlspecialchars($data['weight']);
        $subitem->save();


        if(Auth::getUser()->role_id == 5){
          $payment                    = new \Spot\Shipment\Models\Payment;
          $payment->type              = 1;
          $payment->item_id           = $item->id;
          $payment->for_id            = $item->sender_id;
          $payment->payment_with      = $item->sender_id;
          $payment->movement          = 3; //Deduction from the wallet
          $payment->amount            = '-'.$item->courier_fee;
          $payment->date              = \Carbon\Carbon::parse($item->ship_date);
          $payment->created_at        = \Carbon\Carbon::now();
          $payment->updated_at        = \Carbon\Carbon::now();
          $payment->save();
        }

        $event_data =   array(
            'sender'                =>  Auth::getUser(),
            'shipping_sender'     =>  (($item->sender_id) ? $item->sender_id : null),
            'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
            'shipping_responsible'     =>  (($item->assigned_id) ? $item->assigned_id : null),
            'item'                  =>  $item,
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
    else{

        $number = '';
        for($x = 0; $x <= $this['settings']['tracking']['numbers_order']; $x++){
            $number .= '0';
        }
        //$next_num = \Spot\Shipment\Models\Order::withTrashed()->max('number')+1;
        //dd($next_num);
        $number .= \Spot\Shipment\Models\Order::withTrashed()->max('number')+1;
        $number = substr($number, -$this['settings']['tracking']['numbers_order']);

        if(Auth::getUser()->role_id == 5){

            //$number = '';
            //for($x = 0; $x <= $this['settings']['tracking']['numbers_order']; $x++){
            //    $number .= '0';
            //}
            //$number .= \Spot\Shipment\Models\Order::withTrashed()->max('number')+1;
            //$number = substr($number, -$this['settings']['tracking']['numbers_order']);

            //$data['number']                 =   $number;
            if(isset($data['enable_anotherSender']) && $data['enable_anotherSender'] != ''){
                $data['created_by'] = Auth::getUser()->id;
            }else{
                $data['sender_id']              =   Auth::getUser()->id;
            }


            if($this['settings']['shipments']['enable_type'] != 1)
                $data['type'] = $this['settings']['shipments']['type'];
            if($data['type']   == 1 ) {
                if($data['show_receiver_info'] == '1'){
                    $delivery_cost  =   $this['settings']['fees']['pickup_cost'];
                    $delivery_cost  +=   $this['settings']['fees']['delivery_cost'];
                }else{
                    $delivery_cost  =   $this['settings']['fees']['pickup_cost'];
                }
            }else{
                $delivery_cost  =   $this['settings']['fees']['delivery_cost'];
            }

            if($this['settings']['shipments']['enable_package_type'] != 1)
                $data['packaging_id'] = $this['settings']['shipments']['packaging_id'];
            if( $this['settings']['packaging_fees']['enable'] ==1 && isset($data['packaging_id']) && $data['packaging_id'] != ''){
                foreach($this['settings']['packaging_fees']['fees'] as $package_fee   =>  $value){
                    if($package_fee ==  $data['packaging_id']){
                        $delivery_cost  +=   $value;
                    }
                }
            }

            if($this['settings']['enable_fees_weight'] ==1  && isset($data['total_weight']) && $data['total_weight'] != ''){
                foreach($this['settings']['fees_weight'] as $weight_fee   =>  $value){
                    if($weight_fee ==  $data['total_weight']){
                        $delivery_cost  +=   $value;
                    }
                }
            }

            $return_courier_fee     =   null;
            if($this['settings']['shipments']['enable_return_package'] == 1 && isset($data['return_defray']) && $data['return_defray'] != ''){
                if($data['return_package_fee']  ==  1){
                    $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_receiver'];
                }else{
                    $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_sender'];
                }
            }


            if(isset($data['receiver_address_id']) && $data['receiver_address_id']   !=   '') {
                $sender_address_id      =   \Spot\Shipment\Models\Address::find($data['sender_address_id']);
                $receiver_address_id    =   \Spot\Shipment\Models\Address::find($data['receiver_address_id']);

                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
                if(!$fees){
                    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
                    if(!$fees){
                        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
                        if(!$fees){
                            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
                        }
                    }
                }

                if($fees){
                    if($data['type']   ==   1) {
                        if($data['show_receiver_info'] == '1'){
                            $delivery_cost  =   $fees->pickup_cost;
                            $delivery_cost  +=   $fees->delivery_cost;
                        }else{
                            $delivery_cost  =   $fees->pickup_cost;
                        }
                    }else{
                        $delivery_cost  =   $fees->delivery_cost;
                    }

                    if($fees->packaging == 1 && isset($data['packaging_id']) && $data['packaging_id'] != ''){
                        foreach($fees->packaging_fees as $package_fee   =>  $value){
                            if($package_fee ==  $data['packaging_id']){
                                $delivery_cost  +=   $value;
                            }
                        }
                    }

                    if($fees->weight == 1 && isset($data['total_weight']) && $data['total_weight'] != ''){

                        foreach($fees->weight_fees as $weight_fee   =>  $value){
                            if($weight_fee ==  $data['total_weight']){
                                $delivery_cost  +=   $value;
                            }
                        }
                    }
                    if($this['settings']['shipments']['enable_return_package'] == 1 && isset($data['return_defray']) && $data['return_defray'] != ''){
                        if($data['return_package_fee']  ==  1){
                            $return_courier_fee  =   $fees->delivery_cost_back_receiver;
                        }else{
                            $return_courier_fee  =   $fees->delivery_cost_back_sender;
                        }
                    }
                }

            }

            $data['return_courier_fee']     =   $return_courier_fee;
            $data['courier_fee']            =   $delivery_cost;
            $data['tax']                    =   $this['settings']['taxes']['percent'];
            $data['sgst']                    =   $this['settings']['taxes']['SGST'];
            $data['cgst']                    =   $this['settings']['taxes']['CGST'];
            $data['insurance']              =   $this['settings']['taxes']['insurance'];
            $data['customs_value']          =   0;
            $data['status_id']              =   $this['settings']['tracking']['default_status'];
            $data['delivery_time_id']       =   $this['settings']['tracking']['default_deliverytime'];
        }
       // dd($data);
        $prev   =   \Spot\Shipment\Models\Order::where('number', $number)->first();
        if($prev){
            throw new ApplicationException($this['theme_lang']['another_order_with_the_same_numbers']);
        }

        $item                   = new \Spot\Shipment\Models\Order;
        if(isset($data['enable_anotherSender']) && $data['enable_anotherSender'] != ''){
            $item->sender_id        = htmlspecialchars($data['another_sender_id']);
        }else{
            $item->sender_id        = htmlspecialchars($data['sender_id']);
        }
        //dd($item->sender_id);
        $item->sender_address_id= htmlspecialchars($data['sender_address_id']);
        if(isset($data['created_by']) && $data['created_by'] != '')
            $item->created_by= $data['created_by'];
        $item->type             = ((isset($data['type']) && $data['type'] != '') ? htmlspecialchars($data['type']): $this['settings']['shipments']['type']);

        $item->packaging_id     = ((isset($data['packaging_id']) && $data['packaging_id'] != '') ? htmlspecialchars($data['packaging_id']): $this['settings']['shipments']['packaging_id']);

        $item->office_id        = ((isset($data['office_id']) && $data['office_id'] != '') ? htmlspecialchars($data['office_id']): $this['settings']['shipments']['office_id']);

        $item->ship_date        = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['ship_date']));

        if($this['settings']['shipments']['enable_type'] != 1)
                $data['type'] = $this['settings']['shipments']['type'];

        if($data['type']    ==  2 or $data['show_receiver_info'] == 1){
            $item->receiver_id      = htmlspecialchars($data['receiver_id']);
            $item->receiver_address_id= htmlspecialchars($data['receiver_address_id']);
        }

        $item->payment_type     = ((isset($data['payment_type']) && $data['payment_type'] != '') ? htmlspecialchars($data['payment_type']): $this['settings']['shipments']['payment_type']);

        if(isset($data['return_defray']) && $data['return_defray'] != '' && $data['return_defray'] != 2){
            $item->return_defray    = htmlspecialchars($data['return_defray']);
            $item->package_fee      = htmlspecialchars($data['package_fee']);
            $item->return_package_fee= htmlspecialchars($data['return_package_fee']);
            $item->return_courier_fee= htmlspecialchars($data['return_courier_fee']);
        }
        $item->number           = $number;//htmlspecialchars($data['number']);
        if(isset($data['tax']) && $data['tax'] != ''){
            $item->tax              = htmlspecialchars($data['tax']);
        }
        if(isset($data['sgst']) && $data['sgst'] != ''){
            $item->tax_sgst              = htmlspecialchars($data['sgst']);
        }
        if(isset($data['cgst']) && $data['cgst'] != ''){
            $item->tax_cgst              = htmlspecialchars($data['cgst']);
        }

        if(isset($data['insurance']) && $data['insurance'] != ''){
            $item->insurance        = htmlspecialchars($data['insurance']);
        }
        if(isset($data['mode_id']) && $data['mode_id'] != ''){
            $item->mode_id          = htmlspecialchars($data['mode_id']);
        }
        if(isset($data['customs_value']) && $data['customs_value'] != ''){
            $item->customs_value    = htmlspecialchars($data['customs_value']);
        }
        if(isset($data['courier_id']) && $data['courier_id'] != ''){
            $item->courier_id       = htmlspecialchars($data['courier_id']);
        }
        $item->courier_fee      = htmlspecialchars($data['courier_fee']);
        if(isset($data['delivery_time_id']) && $data['delivery_time_id'] != ''){
            $item->delivery_time_id = htmlspecialchars($data['delivery_time_id']);
        }

        if(Auth::getUser()->role_id == 5){
            $item->status_id        = 19;
            $item->requested        = 0;
        }else{
            if(isset($data['status_id']) && $data['status_id'] != ''){
                $status = explode("_" , htmlspecialchars($data['status_id']) );
                $item->status_id        = $status[0];
                $item->requested        = $status[1];
                //$item->status_id        = htmlspecialchars($data['status_id']);
            }
        }

        if(isset($data['assigned_id']) && $data['assigned_id'] != ''){
            $item->assigned_id  = htmlspecialchars($data['assigned_id']);
        }
        $item->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);

        $item->total_weight     = htmlspecialchars($data['total_weight']);
        $item->currency_id      = \Responsiv\Currency\Models\Currency::where('is_primary', 1)->first()->id;
        $item->channel          = 'backend';
        $item->created_at       = \Carbon\Carbon::now();
        $item->updated_at       = \Carbon\Carbon::now();
        $item->barcode          = $number;//htmlspecialchars($data['number']);
        $item->save();

        if(isset($data['sender']) && Auth::getUser()->role_id == 5 && isset($data['sender_mobile'])){
            \RainLab\User\Models\User::where('id', Auth::getUser()->id)->update(['mobile' => $data['sender_mobile']]);
        }

        $shipdate               = \Carbon\Carbon::parse($item->ship_date);
        $deliverydate           = $shipdate->addHours($item->deliverytime->count);
        $item->delivery_date    = $deliverydate;
        $item->update();

        if(isset($data['items']) && $data['items'] != '' && !empty($data['items'])){
            foreach($data['items'] as $shipping_item){
                $subitem                    = new \Spot\Shipment\Models\Item;
                $subitem->order_id          = $item->id;
                $subitem->category_id       = htmlspecialchars($shipping_item['category_id']);
                $subitem->description       = ((isset($shipping_item['description']) && $shipping_item['description'] != '') ? htmlspecialchars($shipping_item['description']): null);

                $subitem->quantity          = ((isset($shipping_item['quantity']) && $shipping_item['quantity'] != '') ? htmlspecialchars($shipping_item['quantity']): 0);

                $subitem->weight            = ((isset($shipping_item['weight']) && $shipping_item['weight'] != '') ? htmlspecialchars($shipping_item['weight']): 0);

                $subitem->length            = ((isset($shipping_item['length']) && $shipping_item['length'] != '') ? htmlspecialchars($shipping_item['length']): 0);

                $subitem->width             = ((isset($shipping_item['width']) && $shipping_item['width'] != '') ? htmlspecialchars($shipping_item['width']): 0);

                $subitem->height            = ((isset($shipping_item['height']) && $shipping_item['height'] != '') ? htmlspecialchars($shipping_item['height']): 0);
                $subitem->save();
            }
        }

        $event_data =   array(
            'sender'                =>  Auth::getUser(),
            'shipping_sender'       =>  $item->sender_id,
            'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
            'shipping_responsible'     =>  (($item->assigned_id) ? $item->assigned_id : null),
            'item'                  =>  $item,
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



        $total_payment = null;
        $return_payment= null;
        $return_cost_payment = null;

        if(isset($item->customs_value) && $item->customs_value != 0){
            $payment                    = new \Spot\Shipment\Models\Payment_v2;
            if($item->payment_type == 1){
                $payment->from_id            = $item->receiver_id;
            }else{
                $payment->from_id            = $item->sender_id;
            }
            $payment->for_id            = 1;
            $payment->payment_with      = Auth::getUser()->id;
            $payment->item_id           = $item->id;
            $payment->amount            = $item->customs_value;
            $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
            $payment->payment_status    = 0;
            $payment->description       = 'customs_value';
            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();

            $total_payment +=$item->customs_value;
        }

        if( $this['settings']['taxes']['type'] == 1 ){
            if(isset($item->tax) && $item->tax != 0){
                $payment                    = new \Spot\Shipment\Models\Payment_v2;
                if($item->payment_type == 1){
                    $payment->from_id            = $item->receiver_id;
                }else{
                    $payment->from_id            = $item->sender_id;
                }
                $payment->for_id            = 1;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = ($item->tax*$item->courier_fee/100);
                $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);                $payment->payment_status    = 0;
                $payment->description       = 'tax';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                $total_payment += ($item->tax*$item->courier_fee/100);
            }
        }else{
            if(isset($item->tax_cgst) && $item->tax_cgst != 0){
                $payment                    = new \Spot\Shipment\Models\Payment_v2;
                if($item->payment_type == 1){
                    $payment->from_id            = $item->receiver_id;
                }else{
                    $payment->from_id            = $item->sender_id;
                }
                $payment->for_id            = 1;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = ($item->tax_cgst*$item->courier_fee/100);
                $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'tax_cgst';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                $total_payment += ($item->tax_cgst*$item->courier_fee/100);
            }

            if(isset($item->tax_sgst) && $item->tax_sgst != 0){
                $payment                    = new \Spot\Shipment\Models\Payment_v2;
                if($item->payment_type == 1){
                    $payment->from_id            = $item->receiver_id;
                }else{
                    $payment->from_id            = $item->sender_id;
                }
                $payment->for_id            = 1;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = ($item->tax_sgst*$item->courier_fee/100);
                $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'tax_sgst';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                $total_payment += ($item->tax_sgst*$item->courier_fee/100);
            }

        }

        if(isset($item->insurance) && $item->insurance != 0){
            $payment                    = new \Spot\Shipment\Models\Payment_v2;
            if($item->payment_type == 1){
                $payment->from_id            = $item->receiver_id;
            }else{
                $payment->from_id            = $item->sender_id;
            }
            $payment->for_id            = 1;
            $payment->payment_with      = Auth::getUser()->id;
            $payment->item_id           = $item->id;
            $payment->amount            = ($item->insurance*$item->courier_fee/100);
            $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
            $payment->payment_status    = 0;
            $payment->description       = 'insurance';
            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();

            $total_payment += ($item->insurance*$item->courier_fee/100);
        }
        if(isset($item->return_defray) && $item->return_defray == 1 && $item->sender_id && $item->receiver_id ){
            $payment                    = new \Spot\Shipment\Models\Payment_v2;
            $payment->for_id            = $item->sender_id;
            $payment->from_id            = $item->receiver_id;
            $payment->payment_with      = Auth::getUser()->id;
            $payment->item_id           = $item->id;
            $payment->amount            = $item->package_fee;
            $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
            $payment->payment_status    = 0;
            $payment->description       = 'return_package';
            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();

            $return_payment = $item->package_fee;
            $return_cost_payment = $item->return_courier_fee;

            if($item->return_package_fee == 2){
                $payment                    = new \Spot\Shipment\Models\Payment_v2;
                $payment->for_id            = 1;
                $payment->from_id            = $item->sender_id;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = $item->return_courier_fee;
                $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'return_package_fee';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

            }else{
                $payment                    = new \Spot\Shipment\Models\Payment_v2;
                $payment->for_id            = 1;
                $payment->from_id            = $item->receiver_id;
                $payment->payment_with      = Auth::getUser()->id;
                $payment->item_id           = $item->id;
                $payment->amount            = $item->return_courier_fee;
                $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'return_package_fee';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
        }


        $payment                    = new \Spot\Shipment\Models\Payment_v2;
        if($item->payment_type == 1){
            $payment->from_id            = $item->receiver_id;
        }else{
            $payment->from_id            = $item->sender_id;
        }
        $payment->for_id            = 1;
        $payment->payment_with      = Auth::getUser()->id;
        $payment->item_id           = $item->id;
        $payment->amount            = $item->courier_fee;
        $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
        $payment->payment_status    = 0;
        $payment->description       = 'courier_fee';
        $payment->date              = \Carbon\Carbon::parse($item->ship_date);
        $payment->created_at        = \Carbon\Carbon::now();
        $payment->updated_at        = \Carbon\Carbon::now();
        $payment->save();

        $total_payment +=$item->courier_fee;


        if($item->payment_type == 1){
            if($item->return_package_fee == 1){
                $total_payment += $return_cost_payment;
            }
            else{
                $transaction                    = new \Spot\Shipment\Models\Transaction;
                $transaction->order_id = $item->id;
                $transaction->user_id = $item->sender_id;
                $transaction->amount = $return_cost_payment;
                $transaction->status = 3; //Deduction from the wallet
                $transaction->done   =0;
                $transaction->date              = \Carbon\Carbon::parse($item->ship_date);
                $transaction->created_at        = \Carbon\Carbon::now();
                $transaction->updated_at        = \Carbon\Carbon::now();
                $transaction->save();
            }

            $transaction                    = new \Spot\Shipment\Models\Transaction;
            $transaction->order_id = $item->id;
            $transaction->user_id = $item->receiver_id;
            $transaction->amount = $total_payment + $return_payment;
            $transaction->status = 3; //Deduction from the wallet
            $transaction->done   =0;
            $transaction->date              = \Carbon\Carbon::parse($item->ship_date);
            $transaction->created_at        = \Carbon\Carbon::now();
            $transaction->updated_at        = \Carbon\Carbon::now();
            $transaction->save();

            if(isset($item->return_defray) && $item->return_defray == 1 && $item->sender_id && $item->receiver_id ){
                $transaction                    = new \Spot\Shipment\Models\Transaction;
                $transaction->order_id = $item->id;
                $transaction->user_id = $item->sender_id;
                $transaction->amount = $return_payment;
                $transaction->status = 4; //add from the wallet
                $transaction->done   =0;
                $transaction->date              = \Carbon\Carbon::parse($item->ship_date);
                $transaction->created_at        = \Carbon\Carbon::now();
                $transaction->updated_at        = \Carbon\Carbon::now();
                $transaction->save();
            }

        }else{
            if($item->return_package_fee == 2){
                $total_payment += $return_cost_payment;
            }else{
                $return_payment += $return_cost_payment;
            }
            $transaction                    = new \Spot\Shipment\Models\Transaction;
            $transaction->order_id = $item->id;
            $transaction->user_id = $item->sender_id;
            $transaction->amount = $total_payment;
            $transaction->status = 3; //Deduction from the wallet
            $transaction->done   =0;
            $transaction->date              = \Carbon\Carbon::parse($item->ship_date);
            $transaction->created_at        = \Carbon\Carbon::now();
            $transaction->updated_at        = \Carbon\Carbon::now();
            $transaction->save();

            if(isset($item->return_defray) && $item->return_defray == 1 && $item->sender_id && $item->receiver_id ){
                $transaction                    = new \Spot\Shipment\Models\Transaction;
                $transaction->order_id = $item->id;
                $transaction->user_id = $item->receiver_id;
                $transaction->amount = $return_payment;
                $transaction->status = 4; //add from the wallet
                $transaction->done   =0;
                $transaction->date              = \Carbon\Carbon::parse($item->ship_date);
                $transaction->created_at        = \Carbon\Carbon::now();
                $transaction->updated_at        = \Carbon\Carbon::now();
                $transaction->save();

                $transaction                    = new \Spot\Shipment\Models\Transaction;
                $transaction->order_id = $item->id;
                $transaction->user_id = $item->sender_id;
                $transaction->amount = $return_payment;
                $transaction->status = 3; //Deduction from the wallet
                $transaction->done   =0;
                $transaction->date              = \Carbon\Carbon::parse($item->ship_date);
                $transaction->created_at        = \Carbon\Carbon::now();
                $transaction->updated_at        = \Carbon\Carbon::now();
                $transaction->save();
            }
        }



    /*
        if($item->payment_type  ==  2){

            if($item->customs_value != 0){
                $payment                    = new \Spot\Shipment\Models\Payment_v2;
                $payment->from_id            = $item->sender_id;
                $payment->for_id            = 1;
                $payment->payment_with      = Auth::getUser();
                $payment->item_id           = $item->id;
                $payment->amount            = '-'.$item->customs_value;
                $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'customs_value';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->tax != 0){
                $payment                    = new \Spot\Shipment\Models\Payment_v2;
                $payment->from_id            = $item->sender_id;
                $payment->for_id            = 1;
                $payment->payment_with      = Auth::getUser();
                $payment->item_id           = $item->id;
                $payment->amount            = '-'.($item->tax*$item->courier_fee/100);
                $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'tax';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->insurance != 0){
                $payment                    = new \Spot\Shipment\Models\Payment_v2;
                $payment->from_id            = $item->sender_id;
                $payment->for_id            = 1;
                $payment->payment_with      = Auth::getUser();
                $payment->item_id           = $item->id;
                $payment->amount            = '-'.($item->insurance*$item->courier_fee/100);
                $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'insurance';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->return_defray && $item->sender_id && $item->receiver_id ){
                $payment                    = new \Spot\Shipment\Models\Payment_v2;
                $payment->for_id            = $item->sender_id;
                $payment->from_id            = $item->receiver_id;
                $payment->payment_with      = Auth::getUser();
                $payment->item_id           = $item->id;
                $payment->amount            = '-'.$item->package_fee;
                $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
                $payment->payment_status    = 0;
                $payment->description       = 'return_package';
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                if($item->return_package_fee == 2){
                    $payment                    = new \Spot\Shipment\Models\Payment_v2;
                    $payment->for_id            = 1;
                    $payment->from_id            = $item->sender_id;
                    $payment->payment_with      = Auth::getUser();
                    $payment->item_id           = $item->id;
                    $payment->amount            = '-'.$item->return_courier_fee;
                    $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
                    $payment->payment_status    = 0;
                    $payment->description       = 'return_package_fee';
                    $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();

                }else{
                    $payment                    = new \Spot\Shipment\Models\Payment_v2;
                    $payment->for_id            = 1;
                    $payment->from_id            = $item->receiver_id;
                    $payment->payment_with      = Auth::getUser();
                    $payment->item_id           = $item->id;
                    $payment->amount            = '-'.$item->return_courier_fee;
                    $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
                    $payment->payment_status    = 0;
                    $payment->description       = 'return_package_fee';
                    $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();
                }
            }


            $payment                    = new \Spot\Shipment\Models\Payment_v2;
            $payment->from_id            = $item->sender_id;
            $payment->for_id            = 1;
            $payment->payment_with      = Auth::getUser();
            $payment->item_id           = $item->id;
            $payment->amount            = '-'.$item->courier_fee;
            $payment->payment_method   = ((isset($data['payment_method']) && $data['payment_method'] != '') ? htmlspecialchars($data['payment_method']): $this['settings']['shipments']['payment_method']);
            $payment->payment_status    = 0;
            $payment->description       = 'courier_fee';
            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();

        }elseif($item->payment_type  ==  1){
            $total                      = $item->courier_fee+$item->customs_value;
            $total                      = $total+($item->tax*$item->courier_fee/100);
            $total                      = $total+($item->insurance*$item->courier_fee/100);
            if($item->return_package_fee == 1){
                $total                  += $item->return_courier_fee;
            }
            if($item->return_defray == 1){
                $total                  += $item->package_fee;
            }

            if($item->customs_value != 0){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'customs';
                $payment->item_id           = $item->id;
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $item->sender_id;
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.$item->customs_value;
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->tax != 0){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'tax';
                $payment->item_id           = $item->id;
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $item->sender_id;
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.($item->tax*$item->courier_fee/100);
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->insurance != 0){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'insurance';
                $payment->item_id           = $item->id;
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $item->sender_id;
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.($item->insurance*$item->courier_fee/100);
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }
            if($item->return_defray && $item->return_package_fee == 1){
                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'package_fee';
                $payment->item_id           = $item->id;
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $item->sender_id;
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.$item->package_fee;
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->payment_type      = 'return_package_fee';
                $payment->item_id           = $item->id;
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $item->sender_id;
                $payment->movement          = 3; //Deduction from the wallet
                $payment->amount            = '-'.$item->return_courier_fee;
                $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();
            }

            $payment                    = new \Spot\Shipment\Models\Payment;
            $payment->type              = 1;
            $payment->item_id           = $item->id;
            $payment->for_id            = $item->sender_id;
            $payment->payment_with      = $item->sender_id;
            $payment->movement          = 3; //Deduction from the wallet
            $payment->amount            = '-'.$item->courier_fee;
            $payment->date              = \Carbon\Carbon::parse($item->ship_date);
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();
        }

    */
    }
    \Flash::success($this['theme_lang']['created_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
}
public function onDraft()
{
    if(!Auth::getUser()->hasUserPermission(["order"],'c')) {
        throw new ApplicationException($this['theme_lang']['not_allowed']);
    }
    $data = post();

    if(Auth::getUser()->role_id == 5){
        $number = '';
        for($x = 0; $x <= $this['settings']['tracking']['numbers_order']; $x++){
            $number .= '0';
        }
        $number .= \Spot\Shipment\Models\Order::withTrashed()->max('number')+1;
        $number = substr($number, -$this['settings']['tracking']['numbers_order']);

        //$data['number']                 =   $number;

        $data['sender_id']              =   Auth::getUser()->id;

        if($data['type']   ==   1) {
            $delivery_cost  =   $this['settings']['fees']['pickup_cost'];
            if(isset($data['receiver_address_id']) && $data['receiver_address_id']   !=   '') {
                $delivery_cost  +=   $this['settings']['fees']['delivery_cost'];
            }
        }else{
            $delivery_cost  =   $this['settings']['fees']['delivery_cost'];
        }
        $return_courier_fee     =   null;

        if(isset($data['return_defray']) && $data['return_defray'] != ''){
            if($data['return_package_fee']  ==  1){
                $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_receiver'];
            }else{
                $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_sender'];
            }
        }

        if(isset($data['receiver_address_id']) && $data['receiver_address_id']   !=   '') {
            $sender_address_id      =   \Spot\Shipment\Models\Address::find($data['sender_address_id']);
            $receiver_address_id    =   \Spot\Shipment\Models\Address::find($data['receiver_address_id']);

            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
            if(!$fees){
                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
                if(!$fees){
                    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
                    if(!$fees){
                        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
                    }
                }
            }

            if($fees){
                if($data['type']   ==   1) {
                    $delivery_cost  =   $fees->pickup_cost;
                    $delivery_cost  +=   $fees->delivery_cost;
                }else{
                    $delivery_cost  =   $fees->delivery_cost;
                }
                if($fees->packaging == 1 && isset($data['packaging_id']) && $data['packaging_id'] != ''){
                    foreach($fees->packaging_fees as $package_fee   =>  $value){
                        if($package_fee ==  $data['packaging_id']){
                            $delivery_cost  +=   $value;
                        }
                    }
                }
                if(isset($data['return_defray']) && $data['return_defray'] != ''){
                    if($data['return_package_fee']  ==  1){
                        $return_courier_fee  =   $fees->delivery_cost_back_receiver;
                    }else{
                        $return_courier_fee  =   $fees->delivery_cost_back_sender;
                    }
                }
            }

        }

        $data['return_courier_fee']     =   $return_courier_fee;
        $data['courier_fee']            =   $delivery_cost;
        $data['tax']                    =   $this['settings']['taxes']['percent'];
        $data['insurance']              =   $this['settings']['taxes']['insurance'];
        $data['customs_value']          =   0;
        $data['status_id']              =   $this['settings']['tracking']['default_status'];
        $data['delivery_time_id']       =   $this['settings']['tracking']['default_deliverytime'];
    }

    $prev   =   \Spot\Shipment\Models\Order::where('number', $number)->first();
    if($prev){
        throw new ApplicationException($this['theme_lang']['another_order_with_the_same_numbers']);
    }

    $item                   = new \Spot\Shipment\Models\Order;
    $item->sender_id        = htmlspecialchars($data['sender_id']);
    $item->sender_address_id= htmlspecialchars($data['sender_address_id']);
    $item->type             = htmlspecialchars($data['type']);
    $item->packaging_id     = htmlspecialchars($data['packaging_id']);
    $item->office_id        = htmlspecialchars($data['office_id']);
    $item->ship_date        = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['ship_date']));

    if($data['type']    ==  2 or $data['show_receiver_info'] == 1){
        $item->receiver_id      = htmlspecialchars($data['receiver_id']);
        $item->receiver_address_id= htmlspecialchars($data['receiver_address_id']);
    }
    $item->payment_type     = htmlspecialchars($data['payment_type']);
    if(isset($data['return_defray']) && $data['return_defray'] != '' && $data['return_defray'] != 2){
        $item->return_defray    = htmlspecialchars($data['return_defray']);
        $item->package_fee      = htmlspecialchars($data['package_fee']);
        $item->return_package_fee= htmlspecialchars($data['return_package_fee']);
        $item->return_courier_fee= htmlspecialchars($data['return_courier_fee']);
    }
    $item->number           = $number;//htmlspecialchars($data['number']);
    $item->tax              = htmlspecialchars($data['tax']);
    $item->insurance        = htmlspecialchars($data['insurance']);
    if(isset($data['mode_id']) && $data['mode_id'] != ''){
        $item->mode_id          = htmlspecialchars($data['mode_id']);
    }
    $item->customs_value    = htmlspecialchars($data['customs_value']);
    if(isset($data['courier_id']) && $data['courier_id'] != ''){
        $item->courier_id       = htmlspecialchars($data['courier_id']);
    }
    $item->courier_fee      = htmlspecialchars($data['courier_fee']);
    $item->delivery_time_id = htmlspecialchars($data['delivery_time_id']);
    $item->status_id        = htmlspecialchars($data['status_id']);
    if(isset($data['assigned_id']) && $data['assigned_id'] != ''){
        $item->assigned_id  = htmlspecialchars($data['assigned_id']);
    }
    $item->currency_id      = \Responsiv\Currency\Models\Currency::where('is_primary', 1)->first()->id;
    $item->channel          = 'backend';
    $item->created_at       = \Carbon\Carbon::now();
    $item->updated_at       = \Carbon\Carbon::now();
    $item->barcode          = $number;//htmlspecialchars($data['number']);
    $item->requested        = 100;
    $item->save();

    if(isset($data['sender']) && Auth::getUser()->role_id == 5){
        \RainLab\User\Models\User::where('id', Auth::getUser()->id)->update(['mobile' => $data['sender_mobile']]);
    }

    $shipdate               = \Carbon\Carbon::parse($item->ship_date);
    $deliverydate           = $shipdate->addHours($item->deliverytime->count);
    $item->delivery_date    = $deliverydate;
    $item->update();

    if(isset($data['items']) && $data['items'] != '' && !empty($data['items'])){
        foreach($data['items'] as $shipping_item){
            $subitem                    = new \Spot\Shipment\Models\Item;
            $subitem->order_id          = $item->id;
            $subitem->category_id       = htmlspecialchars($shipping_item['category_id']);
            $subitem->description       = htmlspecialchars($shipping_item['description']);
            $subitem->quantity          = htmlspecialchars($shipping_item['quantity']);
            $subitem->weight            = htmlspecialchars($shipping_item['weight']);
            $subitem->length            = htmlspecialchars($shipping_item['length']);
            $subitem->width             = htmlspecialchars($shipping_item['width']);
            $subitem->height            = htmlspecialchars($shipping_item['height']);
            $subitem->save();
        }
    }


    $activity                   = new \Spot\Shipment\Models\Activity;
    $activity->user_id          = Auth::getUser()->id;
    $activity->order_id         = $item->id;
    $activity->description      = 'saved';
    $activity->created_at       = \Carbon\Carbon::now();
    $activity->updated_at       = \Carbon\Carbon::now();
    $activity->save();

    \Flash::success($this['theme_lang']['saved_successfully']);
    return Redirect::to('dashboard/shipments/'.$item->id.'/view');
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
    $array[] = array("id"=>'new', "text"=>'<i class="flaticon2-add"></i>&nbsp;'.$this['theme_lang']['add_new']);
    return $array;
}
public function onNewclient(){
    $addShipmentForm  = Settings::get('addShipmentForm',true);
    $data = post();
    if ( $addShipmentForm == "add_form_normal"){
        \RainLab\User\Models\User::extend(function($model){
            $myrules['email'] = 'required|between:6,255|email|unique:users';
            $myrules['mobile'] = 'required|unique:users,deleted_at,NULL';
            $model->rules = $myrules;
            $model->customMessages['email.unique'] = $this['theme_lang']['email_already_registered'];
        });

        $item                               = new \RainLab\User\Models\User;
        $item->name                         = htmlspecialchars($data['name']);
        $item->username                     = htmlspecialchars($data['name']);
        $item->email                        = htmlspecialchars($data['email']);
        $password                           = \Hash::make(123);
        $item->password                     = $password;
        $item->password_confirmation        = $password;

        $item->vat_number                   = htmlspecialchars($data['vat']);
        $item->mobile                       = htmlspecialchars($data['num']);
        $item->box                          = htmlspecialchars($data['box']);
        $item->budget                          = htmlspecialchars($data['budget']);
        $item->lang_id                     = htmlspecialchars($data['lang']);
        $item->custom_clearance                    = htmlspecialchars($data['clearance']);
        $item->fiscal_representation        = htmlspecialchars($data['fiscal']);
        $item->payment_term                 = htmlspecialchars($data['payment_term']);
        $item->price_kg                     = htmlspecialchars($data['price_kg']);
        if(htmlspecialchars($data['storage_fee']) == 'yes'){
            $item->storage_fee              = 1;
            $item->cost_24                      = htmlspecialchars($data['cost_24']);
            $item->cost_48                      = htmlspecialchars($data['cost_48']);
        }
        else
            $item->storage_fee              = 2;

        $item->role_id                      = 5;
        $item->created_at                   = \Carbon\Carbon::now();
        $item->updated_at                   = \Carbon\Carbon::now();
        $item->save();

        $subitem                    = new \Spot\Shipment\Models\Address;
        $subitem->user_id           = $item->id;
        $subitem->name              = htmlspecialchars($data['street_addr']);
        $subitem->street            = htmlspecialchars($data['street_addr']);
        $subitem->city              = htmlspecialchars($data['city_id']);
        $subitem->zipcode           = htmlspecialchars($data['postal_code']);
        $subitem->country            = htmlspecialchars($data['country_id']);
        $subitem->default           = 1;
        $subitem->created_at        = \Carbon\Carbon::now();
        $subitem->updated_at        = \Carbon\Carbon::now();
        $subitem->save();

        $event_data =   array(
            'persons'   =>  [$item->id],
            'sender'    =>  Auth::getUser(),
            'item'      =>  $item,
            'type'      =>  'new_account',
            'thumb'     =>  'icon',
            'icon'      =>  'flaticon-gift',
            'subject'   =>  $this['theme_lang']['new_account'],
            'message'   =>  $this['theme_lang']['new_account'],
            'url'       =>  url('dashboard/shipments/'.$item->id.'/view'),
            'badge'     =>  'success',
        );
        \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

        $resultArr = array(
                "id"=>$item->id, "name"=>$item->name, 'address_id' => $subitem->id, 'address_name' => $subitem->name,
                "clearance"=>$item->custom_clearance,"fiscal"=>$item->fiscal_representation,"payment_term"=>$item->payment_term,"price_kg"=>$item->price_kg,"storage_fee"=>$item->storage_fee,"cost_24"=>$item->cost_24,"cost_48"=>$item->cost_48  );

        return $resultArr;


    }else{
        if(isset($data['connect'])){
            \RainLab\User\Models\User::extend(function($model){
                $myrules['email'] = 'required|between:6,255|email|unique:users';
                $myrules['mobile'] = 'required|unique:users,deleted_at,NULL';
                $myrules['username'] = 'required|between:2,255|unique:users';
                $myrules['password'] = 'required';
                $model->rules = $myrules;
                $model->customMessages['mobile.unique'] = $this['theme_lang']['mobile_already_registered'];
                $model->customMessages['email.unique'] = $this['theme_lang']['email_already_registered'];
                $model->customMessages['username.unique'] = $this['theme_lang']['username_already_registered'];
            });
        }else{
            \RainLab\User\Models\User::extend(function($model){
                $myrules['mobile'] = 'required|unique:users,deleted_at,NULL';
                $myrules['password'] = 'required';
                $model->rules = $myrules;
                $model->customMessages['mobile.mobile'] = $this['theme_lang']['mobile_already_registered'];
            });
        }

        $item                   = new \RainLab\User\Models\User;
        $item->name             = htmlspecialchars($data['name']);
        if(isset($data['connect'])){
            $item->username         = htmlspecialchars($data['username']);
            $item->email            = htmlspecialchars($data['email']);
            if(isset($data['password']) && $data['password'] != null && !empty($data['password']) && $data['password'] != ''){
                $password                       = \Hash::make($data['password']);
                $item->password                 = $password;
                $item->password_confirmation    = $password;
            }
        }else{
            $password                       = \Hash::make(123);
            $item->password                 = $password;
            $item->password_confirmation    = $password;
        }
        $item->mobile           = htmlspecialchars($data['mobile']);
        $item->gender           = (isset($data['gender']) ? $data['gender'] : null);
        $item->role_id          = 5;
        $item->created_at       = \Carbon\Carbon::now();
        $item->updated_at       = \Carbon\Carbon::now();
        $item->save();

        $subitem                    = new \Spot\Shipment\Models\Address;
        $subitem->user_id           = $item->id;
        $subitem->name              = (isset($data['street_addr']) ? htmlspecialchars($data['street_addr']) : null);
        $subitem->street            = (isset($data['street_addr']) ? htmlspecialchars($data['street_addr']) : null);
        $subitem->lat               = (isset($data['lat']) ? htmlspecialchars($data['lat']) : 0);
        $subitem->lng               = (isset($data['lng']) ? htmlspecialchars($data['lng']) : 0);
        $subitem->url               = (isset($data['url']) ? htmlspecialchars($data['url']) : null);
        $subitem->county            = (isset($data['area_id']) ? htmlspecialchars($data['area_id']) : 0);
        $subitem->city              = htmlspecialchars($data['city_id']);
        $subitem->zipcode           = (isset($data['postal_code']) ? htmlspecialchars($data['postal_code']) : 0);
        $subitem->state             = (isset($data['state_id']) ? htmlspecialchars($data['state_id']) : 0);
        $subitem->country            = htmlspecialchars($data['country_id']);
        $subitem->default           = 1;
        $subitem->created_at        = \Carbon\Carbon::now();
        $subitem->updated_at        = \Carbon\Carbon::now();
        $subitem->save();

        if(isset($data['connect'])){
        $event_data =   array(
                'persons'   =>  [$item->id],
                'sender'    =>  Auth::getUser(),
                'item'      =>  $item,
                'type'      =>  'new_account',
                'thumb'     =>  'icon',
                'icon'      =>  'flaticon-gift',
                'subject'   =>  $this['theme_lang']['new_account'],
                'message'   =>  $this['theme_lang']['new_account'],
                'url'       =>  url('dashboard/shipments/'.$item->id.'/view'),
                'badge'     =>  'success',
            );
            \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);
        }
        return array("id"=>$item->id, "name"=>$item->name, 'address_id' => $subitem->id, 'address_name' => $subitem->name);
    }


}
public function onNewclientaddress(){
    $addShipmentForm  = Settings::get('addShipmentForm',true);
    $data = post();

    \Spot\Shipment\Models\Address::where('user_id', $data['client_id'])->update(['default' => 0]);

    if ( $addShipmentForm == "add_form_normal"){
        $subitem = new \Spot\Shipment\Models\Address;
        $subitem->name              = htmlspecialchars($data['street_addr']);
        $subitem->user_id           = htmlspecialchars($data['client_id']);
        $subitem->street            = htmlspecialchars($data['street_addr']);
        $subitem->city              = htmlspecialchars($data['city_id']);
        $subitem->zipcode           = htmlspecialchars($data['postal_code']);
        $subitem->country            = htmlspecialchars($data['country_id']);
        $subitem->default           = 1;
        $subitem->created_at        = \Carbon\Carbon::now();
        $subitem->updated_at        = \Carbon\Carbon::now();
        $subitem->save();
    }
    else{

        $subitem                    = new \Spot\Shipment\Models\Address;
        $subitem->user_id           = htmlspecialchars($data['client_id']);
        $subitem->name              = htmlspecialchars($data['street_addr']);
        $subitem->street            = htmlspecialchars($data['street_addr']);
        $subitem->lat               = htmlspecialchars($data['lat']);
        $subitem->lng               = htmlspecialchars($data['lng']);
        $subitem->url               = htmlspecialchars($data['url']);
        $subitem->county            = htmlspecialchars($data['area_id']);
        $subitem->city              = htmlspecialchars($data['city_id']);
        $subitem->zipcode           = htmlspecialchars($data['postal_code']);
        $subitem->state             = htmlspecialchars($data['state_id']);
        $subitem->country           = htmlspecialchars($data['country_id']);
        $subitem->default           = 1;
        $subitem->created_at        = \Carbon\Carbon::now();
        $subitem->updated_at        = \Carbon\Carbon::now();
        $subitem->save();
    }

    $addresses = \Spot\Shipment\Models\Address::where('user_id', $data['client_id'])->get();
    $html = '<option data-hidden="true"></option>';
    $default = 'new';
    if($addresses){
        foreach($addresses as $address){
            if($address->default == 1){
                $default = $address->id;
            }
            $html .= '<option value="'.$address->id.'">'.$address->name.'</option>';
        }
    }
    if(Auth::getUser()->hasUserPermission(["client"],'c')) {
        $html .= '<option value="new" data-icon="flaticon2-add">'.$this['theme_lang']['add_new'].'</option>';
    }
    return array("html" => $html, "default" => $default);
}
public function onClientaddresses(){
    $addShipmentForm  = Settings::get('addShipmentForm',true);
    $data = post();
    $item = \RainLab\User\Models\User::find($data['id']);
    $addresses = \Spot\Shipment\Models\Address::where('user_id', $data['id'])->get();
    $html = '<option data-hidden="true"></option>';
    $default = 'new';
    if($addresses){
        foreach($addresses as $address){
            if($address->default == 1){
                $default = $address->id;
            }
            $html .= '<option value="'.$address->id.'">'.$address->name.'</option>';
        }
    }
    $html .= '<option value="new" data-icon="flaticon2-add">'.$this['theme_lang']['add_new'].'</option>';
    if ( $addShipmentForm == "add_form_normal"){
        $resultArr = array("html" => $html, "default" => $default,"clearance"=>$item->custom_clearance,
                        "fiscal"=>$item->fiscal_representation,"payment_term"=>$item->payment_term,
                        "price_kg"=>$item->price_kg,"storage_fee"=>$item->storage_fee,"cost_24"=>$item->cost_24,
                        "cost_48"=>$item->cost_48 );
        return $resultArr;
    }else{
        return array("html" => $html, "default" => $default);
    }
}
public function onListstates(){
    $data = post();

    $items = \RainLab\Location\Models\State::where('country_id', $data['id'])->get();
    $html = '<option data-hidden="true"></option>';
    if($items){
        foreach($items as $item){
            $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
        }
    }
    return array("html" => $html);
}
public function onListcities(){
    $addShipmentForm  = Settings::get('addShipmentForm',true);
    $data = post();
    if ( $addShipmentForm == "add_form_normal"){
        $items = \Spot\Shipment\Models\City::where('country_id', $data['id'])->get();
    }else{
        $items = \Spot\Shipment\Models\City::where('state_id', $data['id'])->get();
    }
    $html = '<option data-hidden="true"></option>';
    if($items){
        foreach($items as $item){
            $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
        }
    }
    return array("html" => $html);
}
public function onListareas(){
    $data = post();

    $items = \Spot\Shipment\Models\Area::where('city_id', $data['id'])->get();
    $html = '<option data-hidden="true"></option>';
    if($items){
        foreach($items as $item){
            $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
        }
    }
    return array("html" => $html);
}
public function onChangefees(){
    $addShipmentForm  = Settings::get('addShipmentForm',true);

    $data = post();

    if( $addShipmentForm == "add_form_normal")
    {
        $data['type'] =2;
        $data['return_package_fee']  = 1;
    }

    if($this['settings']['shipments']['enable_type'] != 1)
                $data['type'] = $this['settings']['shipments']['type'];
    if($data['type']   == 1 ) {
        if($data['show_receiver_info'] == '1'){
            $delivery_cost  =   $this['settings']['fees']['pickup_cost'];
            $delivery_cost  +=   $this['settings']['fees']['delivery_cost'];
        }else{
            $delivery_cost  =   $this['settings']['fees']['pickup_cost'];
        }
    }else{
        $delivery_cost  =   $this['settings']['fees']['delivery_cost'];
    }

    if( $this['settings']['packaging_fees']['enable'] ==1 && isset($data['packaging_id']) && $data['packaging_id'] != ''){
        foreach($this['settings']['packaging_fees']['fees'] as $package_fee   =>  $value){
            if($package_fee ==  $data['packaging_id']){
                $delivery_cost  +=   $value;
            }
        }
    }

    if($this['settings']['enable_fees_weight'] ==1  && isset($data['total_weight']) && $data['total_weight'] != ''){
        foreach($this['settings']['fees_weight'] as $weight_fee   =>  $value){
            if($weight_fee ==  $data['total_weight']){
                $delivery_cost  +=   $value;
            }
        }
    }


    if($data['return_package_fee']  ==  1){
        $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_receiver'];
    }else{
        $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_sender'];
    }



    if(isset($data['receiver_address_id']) && $data['receiver_address_id']   !=   '' && isset($data['sender_address_id']) && $data['sender_address_id']   !=   '') {
        $sender_address_id      =   \Spot\Shipment\Models\Address::find($data['sender_address_id']);
        $receiver_address_id    =   \Spot\Shipment\Models\Address::find($data['receiver_address_id']);

        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
        if(!$fees){
            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
            if(!$fees){
                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
                if(!$fees){
                    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
                }
            }
        }

        if($fees){
            if($data['type']   ==   1) {
                if($data['show_receiver_info'] == '1'){
                    $delivery_cost  =   $fees->pickup_cost;
                    $delivery_cost  +=   $fees->delivery_cost;
                }else{
                    $delivery_cost  =   $fees->pickup_cost;
                }
            }else{
                $delivery_cost  =   $fees->delivery_cost;
            }
            if($fees->packaging == 1 && isset($data['packaging_id']) && $data['packaging_id'] != ''){
                foreach($fees->packaging_fees as $package_fee   =>  $value){
                    if($package_fee ==  $data['packaging_id']){
                        $delivery_cost  +=   $value;
                    }
                }
            }

            if($fees->weight == 1 && isset($data['total_weight']) && $data['total_weight'] != ''){
                foreach($fees->weight_fees as $weight_fee   =>  $value){
                    if($weight_fee ==  $data['total_weight']){
                        $delivery_cost  +=   $value;
                    }
                }
            }

            if(isset($data['return_defray']) && $data['return_defray'] != ''){
                if($data['return_package_fee']  ==  1){
                    $return_courier_fee  =   $fees->delivery_cost_back_receiver;
                }else{
                    $return_courier_fee  =   $fees->delivery_cost_back_sender;
                }
            }
        }

    }

    return array("delivery_cost" => $delivery_cost,"return_courier_fee" => $return_courier_fee);
}
}
