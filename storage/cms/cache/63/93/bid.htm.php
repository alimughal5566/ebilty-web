<?php 
class Cms60a6242c144e3617562976_4c54a39650c3fac65a16877784e84a5eClass extends Cms\Classes\PageCode
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
