<?php 
class Cms608fc9ff6fc26173648513_5d3ba497aa0475429361ced11862472aClass extends Cms\Classes\PageCode
{
public function onStart() {
    if(!Auth::getUser()->hasUserPermission(["cars"],'c')) {
\Flash::error($this['theme_lang']['not_allowed']);
return Redirect::to('dashboard/settings/'.$this->page->child_of_page);
}
$this['languages']          =   RainLab\Translate\Models\Locale::get();
$this['employees']          =   RainLab\User\Models\User::where('role_id', '!=', 5)->where('driver', 1)->get();
$this['modes']          =   \Spot\Shipment\Models\Categories::select('id','title')->get();
$this['destinations']   =   \Spot\Container\Models\Destination::select('id','name')->get();
$this['vehicle']   =   \Spot\Shipment\Models\Vehicles::where('id' , $this->param('id'))->select('id','name')->first();
}
public function onSave()
{
if($this['settings']['demo_mode']){
throw new ApplicationException('NOT ALLAOWED IN DEMO');
return false;
}
if(!Auth::getUser()->hasUserPermission(["branches"],'c')) {
throw new ApplicationException($this['theme_lang']['not_allowed']);
}
$data = post();
dd($data);
$item                       = new \Spot\Shipment\Models\Vehicles;
$item->name                 = $data['name'];
$item->description          = $data['description'];
$item->categories_id         = $data['categories_id'];
$item->capacity         = $data['capacity'];
$item->save();


$languages              =   RainLab\Translate\Models\Locale::get();
foreach($languages as $lang){
if(isset($data['name'][$lang->code]) && $data['name'][$lang->code] != ''){
$item->lang($lang->code)->name             = htmlspecialchars($data['name'][$lang->code]);
}
if(isset($data['description'][$lang->code]) && $data['description'][$lang->code] != ''){
$item->lang($lang->code)->description             = htmlspecialchars($data['description'][$lang->code]);
}
$item->update();
}
\Flash::success($this['theme_lang']['created_successfully']);
return Redirect::to('dashboard/settings/'.$this->page->child_of_page);
}
}
