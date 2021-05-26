<?php 
class Cms60acfbe7b1176145373147_106c3266f786bdb9d9b9df7581cacb2aClass extends Cms\Classes\PageCode
{
public function onStart(){

$this['cars']       = \Spot\Shipment\Models\Status::get();
$this['bids'] = \Spot\Shipment\Models\Bid::
join('spot_shipment_order' , 'spot_shipment_order.id','spot_shipment_bid.order_id')
->join('spot_shipment_office' , 'spot_shipment_order.office_id','spot_shipment_office.id')
->join('users' , 'users.id' , 'spot_shipment_order.sender_id')
->leftjoin('spot_shipment_status' , 'spot_shipment_status.id' , 'spot_shipment_order.status_id')
->select('users.id' , 'users.name' , 'spot_shipment_bid.bid_amount' , 'spot_shipment_bid.route' , 'spot_shipment_bid.id as bidid', 'spot_shipment_bid.order_id as order_id','spot_shipment_order.delivery_date as delivery_date','spot_shipment_status.name as stat','spot_shipment_status.id as stats','spot_shipment_office.name as city','spot_shipment_office.street as street','spot_shipment_bid.status_approved as bid_status')
->where('spot_shipment_bid.user_id' , Auth::getUser()->id)

->get();

}
public function onChangefees1(){
$order=\Spot\Shipment\Models\Order::where('id',$_POST['id'])->first();
$order->status_id=$_POST['status'];
$order->save();
return 1;
}
}
