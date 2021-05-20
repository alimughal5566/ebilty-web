<?php 
class Cms609c1a517ee78099664395_a5e06c23033bb7a4773078919bbb4e9cClass extends Cms\Classes\PageCode
{
public function onStart(){
$this['bids'] = \Spot\Shipment\Models\Bid::
join('spot_shipment_order' , 'spot_shipment_order.id','spot_shipment_bid.order_id')
->join('users' , 'users.id' , 'spot_shipment_bid.user_id')
->select('users.id' , 'users.name' , 'spot_shipment_bid.bid_amount' , 'spot_shipment_bid.route' , 'spot_shipment_bid.id as bidid')
->where('spot_shipment_order.sender_id' , Auth::getUser()->id)
->where('spot_shipment_bid.status_approved' , '!=' , 1)
->where('spot_shipment_bid.status_approved' , '!=' , 2)
->get();
}
}
