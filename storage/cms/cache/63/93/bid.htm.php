<?php 
class Cms60acfad1c4313387241573_eb8a53597dcebc5c50850399533407b2Class extends Cms\Classes\PageCode
{
public function onStart(){
$this['bids'] = \Spot\Shipment\Models\Bid::
join('spot_shipment_order' , 'spot_shipment_order.id','spot_shipment_bid.order_id')
->join('users' , 'users.id' , 'spot_shipment_bid.user_id')
->select('users.id' , 'users.name' ,'spot_shipment_order.id as id', 'spot_shipment_bid.bid_amount' , 'spot_shipment_bid.route' , 'spot_shipment_bid.id as bidid', 'spot_shipment_bid.status_approved as status_approved')
->where('spot_shipment_order.sender_id' , Auth::getUser()->id)
->get();

}
}
