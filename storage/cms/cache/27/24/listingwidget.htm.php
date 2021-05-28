<?php 
class Cms60b09ab9a7d23039733280_bc64a038ead0a57ec3062a8f4c79430dClass extends Cms\Classes\PartialCode
{
public function onStart(){
        $data = post();
        $this['user']   =   Auth::getUser();
        $user_id = $this['user']->id;
        $start              = '';
        $end                = '';
        if(isset($data['start']) && isset($data['end'])){
            $start          =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['start']));
            $end            =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['end']));

            $start          = $start->copy()->startOfDay();
$end            = $end->copy()->endOfDay();
}

$this['start']      = $start;
$this['end']        = $end;
}
public function onDelete()
{
$data = post();
if(!Auth::getUser()->hasUserPermission(["order"],'d')) {
return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
}

if(null !== post('id')){
if(is_array(post('id'))){
\Spot\Shipment\Models\Order::whereIn('id',post('id'))->delete();
}else{
\Spot\Shipment\Models\Order::find($data['id'])->delete();
}
return Redirect::back();
}
}
}
