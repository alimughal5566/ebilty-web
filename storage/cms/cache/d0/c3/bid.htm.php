<?php 
class Cms60b0ec27455e4480358938_3277930c0d6122aac33605b1ba7e0f8fClass extends Cms\Classes\PageCode
{
public function onStart(){
$this['bids'] = \Spot\Shipment\Models\Bid::
join('spot_shipment_order' , 'spot_shipment_order.id','spot_shipment_bid.order_id')
->join('users' , 'users.id' , 'spot_shipment_bid.user_id')
->select('users.id' , 'users.name' ,'spot_shipment_order.id as id', 'spot_shipment_bid.bid_amount' , 'spot_shipment_bid.route' , 'spot_shipment_bid.id as bidid', 'spot_shipment_bid.revise_amount_shipper as revise_amount_shipper', 'spot_shipment_bid.status_approved as status_approved','spot_shipment_bid.revise_status as revise_status','spot_shipment_bid.revise_comment as revise_comment')
->where('spot_shipment_order.sender_id' , Auth::getUser()->id)
->get();

}
}
