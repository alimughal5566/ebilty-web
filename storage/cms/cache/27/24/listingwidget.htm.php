<?php 
class Cms609985673d2f6729550238_6da57b1ff717b5a6057e8f4ef43a60ccClass extends Cms\Classes\PartialCode
{
public function onStart(){
        $data = post();
        $this['user']   =   Auth::getUser();

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
