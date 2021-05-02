<?php 
use Illuminate\Support\Facades\Storage;use Illuminate\Http\Request;use \Responsiv\Currency\Models\Currency;use \Spot\Shipment\Models\Settings;use \Tiipiik\SmsSender\Models\Setting as SMS;class Cms608a87e8a5664749031801_11eb3b7cd1372dfabefdcf0ebed94a63Class extends Cms\Classes\PageCode
{




public function onInit(){
    $setting =   \Spot\Shipment\Models\Settings::where('item','acme_demo_settings')->first();
    $this->Logo->bindModel('logo', $setting);
    $this->MobileLogo->bindModel('mobile_logo', $setting);
    $this->Favicon->bindModel('favicon', $setting);
   // $this->ServicesPics->bindModel('services_pics', $setting);
}
public function onStart(){
    if(!Auth::getUser()->hasUserPermission(["setting"],'r')) {
        \Flash::error($this['theme_lang']['not_allowed']);
        return Redirect::to('dashboard');
    }
    \System\Helpers\Cache::clear();
    if($this->param('page') == 'general' || !$this->param('page')){
        $this['currencies']           =   Currency::select('name','id','is_primary')->get();
        $this['primary_currency']     =   Currency::where('is_primary', 1)->first();
        $this['language']             =   Settings::get('language', true);
        $this['timezone_offset']      =   Settings::get('timezone_offset', true);
        $this['dateformat']           =   Settings::get('dateformat', true);
        $this['addShipmentForm']      =   Settings::get('addShipmentForm',true);
        $this['updateShipmentForm']   =   Settings::get('updateShipmentForm',true);
        $this['printTemplate']        =   Settings::get('printTemplate',true);
        $this['addUserSHipment']        =   Settings::get('addUserSHipment',true);
        
    }elseif($this->param('page') == 'company'){
        $this['company']            =   Settings::get('company', true);
    }elseif($this->param('page') == 'website'){
        $this['website']    = $website        =   Settings::get('website', true);
        $settings = Settings::instance();
        //dd($settings);
        //if($settings->services_pics)
        //{
        //    foreach($settings->services_pics as $key => $file)
        //    {
        //        dd($file->name);
        //    }
        //}
        
        if($settings->sliders_pics)
        {
            foreach($settings->sliders_pics as $key => $file)
            {
                //Storage::delete('/uploads/public/images/'.$file->file_name);
            }        
        }
            
        //unset($website['faqs']);
        //dd($website);
    }elseif($this->param('page') == 'fees'){
        $this['taxes']              =   Settings::get('taxes', true);
        $this['fees']               =   Settings::get('fees', true);
        $this['packaging_fees']     =   Settings::get('packaging_fees', true);
        $this['fees_weights']     =   Settings::get('fees_weight', true); 
        $this['enable_fees_weight']     =   Settings::get('enable_fees_weight', true);
        //dd(Settings::get('fees_weight', true));
        $this['primary_currency']   =   Currency::where('is_primary', 1)->first();
        $this['packaging']      =   \Spot\Shipment\Models\Packaging::get();
    }elseif($this->param('page') == 'invoice'){
        $this['tracking']           =   Settings::get('tracking', true);
        $this['deliverytimes']      =   \Spot\Shipment\Models\DeliveryTime::select('id','name')->get();
        $this['statuses']           =   \Spot\Shipment\Models\Status::select('id','name')->get();
        $this['invoice']            =   Settings::get('invoice', true);
    }elseif($this->param('page') == 'sms'){
        $this->page->settings_breadcrumb       =   'components';
        

        $sms =  array(
                    'enable'                    =>  SMS::get('enable'),
                    'from'                      =>  SMS::get('from'),
                    'gateway'                   =>  SMS::get('gateway'),
                    'clickatell_api_id'         =>  SMS::get('clickatell_api_id'),
                    'clickatell_username'       =>  SMS::get('clickatell_username'),
                    'clickatell_password'       =>  SMS::get('clickatell_password'),
                    'smsala_api_id'             =>  SMS::get('smsala_api_id'),
                    'smsala_api_password'       =>  SMS::get('smsala_api_password'),
                    'smsala_sms_type'           =>  SMS::get('smsala_sms_type'),
                    'smsala_encoding'           =>  SMS::get('smsala_encoding'),
                    'smsala_sender_id'          =>  SMS::get('smsala_sender_id'),
                    // 'sms_server'                =>  SMS::get('sms_server'), 
                    // 'sms_authKey'               =>  SMS::get('sms_authKey'),
                    // 'sms_getway_id'             =>  SMS::get('sms_getway_id'),
                    // 'sms_mode'                  =>  SMS::get('sms_mode'), 
                    // 'sms_sender_id'             =>  SMS::get('sms_sender_id'),
                    // 'sms_country_id'            =>  SMS::get('sms_country_id'),
                    // 'sms_encoding'              =>  SMS::get('sms_encoding'),
                );

        $this['sms']                =   $sms;
    }elseif($this->param('page') == 'mail'){
        $this->page->settings_breadcrumb       =   'components';
        $email = Db::table('system_settings')->where('item','system_mail_settings')->pluck('value');
        if(isset($email[0]))
        $this['email']                =   json_decode($email[0]);
    }elseif($this->param('page') == 'payment'){
        $this->page->settings_breadcrumb       =   'components';
        $this['payment']      =   Settings::get('payment', true);
    }elseif($this->param('page') == 'notifications'){
        $this->page->settings_breadcrumb       =   'components';
        $this['notifications']      =   Settings::get('notifications', true);
        $this['push_notifications']      =   Settings::get('push_notifications', true);
        $this['departments']        =   \RainLab\User\Models\UserGroup::get();
        $this['employees']          =   \RainLab\User\Models\User::where('role_id', '!=', 5)->get();
    }elseif($this->param('page') == 'ShipmentsSettings'){
        $this->page->settings_breadcrumb       =   'shipments';
        $this['shipments']      =   Settings::get('shipments', true);
        $this['packaging']      =   \Spot\Shipment\Models\Packaging::select('id','name')->get();
        $this['offices']        =   \Spot\Shipment\Models\Office::select('id','name')->get();
        $this['employees']      =   \RainLab\User\Models\User::whereNotIn('role_id',[1,5])->select('id','name')->get();
        $this['packaging']      =   \Spot\Shipment\Models\Packaging::select('id','name')->get();
        $this['modes']          =   \Spot\Shipment\Models\Mode::select('id','name')->get();
        $this['couriers']       =   \Spot\Shipment\Models\Courier::select('id','name')->get();
        $this['deliverytimes']  =   \Spot\Shipment\Models\DeliveryTime::select('id','name')->get();
        $this['categories']     =   \Spot\Shipment\Models\Category::select('id','name')->get();
        $this['statuses']       =   \Spot\Shipment\Models\Status::select('id','name','equal')->get();
       // dd($this['shipments']);
    }elseif($this->param('page') == 'CustomersSettings'){
        $this->page->settings_breadcrumb       =   'shipments';
        $this['customers']      =   Settings::get('customers', true);
        $this['areas']          =   \Spot\Shipment\Models\Area::select('id','name')->get();
        $this['states']         =  \RainLab\Location\Models\State::whereHas('country',function($q){$q->where('is_enabled', 1);})->select('id','name')->get();
       // dd($this['customers']);   
    }elseif($this->param('page') == 'google'){
        $this->page->settings_breadcrumb       =   'components';
        $this['google']             =   Settings::get('google', true);
    }elseif($this->param('page') == 'departments'){
        if(!Auth::getUser()->hasUserPermission(["departments"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'employees';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["departments"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/departments/create')
            );
        }
    }elseif($this->param('page') == 'branches'){
        if(!Auth::getUser()->hasUserPermission(["branches"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'definitions';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["branches"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/branches/create')
            );
        }
    }elseif($this->param('page') == 'cars'){
        if(!Auth::getUser()->hasUserPermission(["cars"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'definitions';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["cars"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/cars/create')
            );
        }
    }elseif($this->param('page') == 'destination'){
        if(!Auth::getUser()->hasUserPermission(["destination"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }

        $this->page->settings_breadcrumb       =   'definitions';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["destination"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/destination/create')
            );
        }
    }elseif($this->param('page') == 'location'){
        if(!Auth::getUser()->hasUserPermission(["location"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'container';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["location"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/location/create')
            );
        }
    }elseif($this->param('page') == 'statuscontainer'){
        if(!Auth::getUser()->hasUserPermission(["statuscontainer"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'container';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["statuscontainer"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/statuscontainer/create')
            );
        }
    }elseif($this->param('page') == 'reasonarrival'){
        if(!Auth::getUser()->hasUserPermission(["reasonarrival"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'container';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["reasonarrival"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/reasonarrival/create')
            );
        } 
    }elseif($this->param('page') == 'size'){
        if(!Auth::getUser()->hasUserPermission(["size"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'container';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["size"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/size/create')
            );
        }          
    }elseif($this->param('page') == 'categories'){
        if(!Auth::getUser()->hasUserPermission(["category"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'definitions';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["category"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/categories/create')
            );
        }
    }elseif($this->param('page') == 'couriers'){
        if(!Auth::getUser()->hasUserPermission(["couriers"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'definitions';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["couriers"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/couriers/create')
            );
        }
    }elseif($this->param('page') == 'deliverytimes'){
        if(!Auth::getUser()->hasUserPermission(["deliverytimes"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'definitions';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["deliverytimes"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/deliverytimes/create')
            );
        }
    }elseif($this->param('page') == 'shipping'){
        if(!Auth::getUser()->hasUserPermission(["shipping"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'definitions';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["shipping"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/shipping/create')
            );
        }
    }elseif($this->param('page') == 'labels'){
        if(!Auth::getUser()->hasUserPermission(["labels"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'definitions';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["labels"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/labels/create')
            );
        }
    }elseif($this->param('page') == 'handler'){
        if(!Auth::getUser()->hasUserPermission(["handler"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'definitions';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["handler"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/handler/create')
            );
        }
    }elseif($this->param('page') == 'break'){
        if(!Auth::getUser()->hasUserPermission(["break"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'definitions';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["break"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/break/create')
            );
        }            
    }elseif($this->param('page') == 'statuses'){
        if(!Auth::getUser()->hasUserPermission(["statuses"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'definitions';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["statuses"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/statuses/create')
            );
        }
    //}elseif($this->param('page') == 'Stockstatuses'){
    //    if(!Auth::getUser()->hasUserPermission(["statuses"],'r')) {
    //        \Flash::error($this['theme_lang']['not_allowed']);
    //        return Redirect::to('dashboard/settings');
    //    }
    //    $this->page->settings_breadcrumb       =   'definitions';
    //    $this->page->listing        = true;
    //    if(Auth::getUser()->hasUserPermission(["statuses"],'c')){
    //        $this->page->actions   = array(
    //            'add'   =>  url('dashboard/settings/statuses/create/Stockstatuses')
    //        );
    //    }   
    //}elseif($this->param('page') == 'Customstatuses'){
    //    if(!Auth::getUser()->hasUserPermission(["statuses"],'r')) {
    //        \Flash::error($this['theme_lang']['not_allowed']);
    //        return Redirect::to('dashboard/settings');
    //    }
    //    $this->page->settings_breadcrumb       =   'definitions';
    //    $this->page->listing        = true;
    //    if(Auth::getUser()->hasUserPermission(["statuses"],'c')){
    //        $this->page->actions   = array(
    //            'add'   =>  url('dashboard/settings/statuses/create/Customstatuses')
    //        );
    //    }      
    }elseif($this->param('page') == 'treasury'){
        if(!Auth::getUser()->hasUserPermission(["treasury"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'definitions';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["treasury"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/treasury/create')
            );
        }
    }elseif($this->param('page') == 'packaging'){
        if(!Auth::getUser()->hasUserPermission(["packaging"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'definitions';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["packaging"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/packaging/create')
            );
        }
    }elseif($this->param('page') == 'countries'){
        if(!Auth::getUser()->hasUserPermission(["countries"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb        =   'definitions';
        $this->page->child_of_page              =   'places';
        $this->page->listing                    = true;
        if(Auth::getUser()->hasUserPermission(["countries"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/countries/create')
            );
        }
    }elseif($this->param('page') == 'states'){
        if(!Auth::getUser()->hasUserPermission(["states"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb        =   'definitions';
        $this->page->child_of_page              =   'places';
        $this->page->listing                    = true;
        if(Auth::getUser()->hasUserPermission(["states"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/states/create')
            );
        }
    }elseif($this->param('page') == 'cities'){
        if(!Auth::getUser()->hasUserPermission(["cities"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb        =   'definitions';
        $this->page->child_of_page              =   'places';
        $this->page->listing                    = true;
        if(Auth::getUser()->hasUserPermission(["cities"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/cities/create')
            );
        }
    }elseif($this->param('page') == 'areas'){
        if(!Auth::getUser()->hasUserPermission(["areas"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb        =   'definitions';
        $this->page->child_of_page              =   'places';
        $this->page->listing                    = true;
        if(Auth::getUser()->hasUserPermission(["areas"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/areas/create')
            );
        }
    }elseif($this->param('page') == 'employees'){
        if(!Auth::getUser()->hasUserPermission(["employees"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'employees';
        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["employees"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/employees/create')
            );
        }
    }elseif($this->param('page') == 'languages'){
        if(!Auth::getUser()->hasUserPermission(["languages"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'languages';
        $this['languages']          =   RainLab\Translate\Models\Locale::get();

        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["languages"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/languages/create')
            );
        }
    }elseif($this->param('page') == 'currencies'){
        if(!Auth::getUser()->hasUserPermission(["currencies"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'languages';

        $this->page->listing        = true;
        if(Auth::getUser()->hasUserPermission(["currencies"],'c')){
            $this->page->actions   = array(
                'add'   =>  url('dashboard/settings/currencies/create')
            );
        }
    }elseif($this->param('page') == 'translate'){
        if(!Auth::getUser()->hasUserPermission(["languages"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        \System\Helpers\Cache::clear();
        $this->page->settings_breadcrumb       =   'languages';
        $this['languages']          =   RainLab\Translate\Models\Locale::get();
        $this['messages']           =   RainLab\Translate\Models\Message::all();
    }elseif($this->param('page') == 'backup'){
        if(!Auth::getUser()->hasUserPermission(["backups"],'r')) {
            \Flash::error($this['theme_lang']['not_allowed']);
            return Redirect::to('dashboard/settings');
        }
        $this->page->settings_breadcrumb       =   'backup';
        if(Auth::getUser()->hasUserPermission(["backups"],'c')) {
            $this->page->actions   = array(
                'buttons'   =>  array(
                    array(
                        'id'    =>  'database',
                        'title' =>  $this['theme_lang']['create_database_backup'],
                        'url'   =>  'javascript:;'
                    ),
                    array(
                        'id'    =>  'files',
                        'title' =>  $this['theme_lang']['create_files_backup'],
                        'url'   =>  'javascript:;'
                    ),
                    array(
                        'id'    =>  'whole',
                        'title' =>  $this['theme_lang']['create_system_backup'],
                        'url'   =>  'javascript:;'
                    ),
                )
            );
        }
    }
}
public function onBackup()
{

    if($this['settings']['demo_mode']){
      throw new ApplicationException('NOT ALLAOWED IN DEMO');
      return false;
    }

    $data   = post();
    if($data['type'] == 'db'){
        $artisanArguments = ['--disable-notifications' => true, '--only-db' => true];
    }elseif($data['type'] == 'files'){
        $artisanArguments = ['--disable-notifications' => true, '--only-files' => true];
    }else{
        config([
            "backup.backup.source.files.include" => base_path(),
            "backup.backup.source.files.exclude" => [],

        ]);
        $artisanArguments = ['--disable-notifications' => true, '--filename' => "whole_project_backup.zip"];
    }
    October\Rain\Support\Facades\Config::set('filesystems.disks.local.root', storage_path(Panakour\Backup\Models\Settings::UPLOAD_PATH));
    \Artisan::call('backup:run', $artisanArguments);
    return $this['theme_lang']['created_successfully'];
}
public function onGetCurrency()
{
    $data       =   post();
    $currency   =   Currency::find($data['id']);
    return array('currency' => $currency);
}
public function onTranslate()
{

    if($this['settings']['demo_mode']){
      throw new ApplicationException('NOT ALLAOWED IN DEMO');
      return false;
    }

    $data                   =   post();
    $languages              =   \RainLab\Translate\Models\Locale::all();
    $message                =   \RainLab\Translate\Models\Message::find($data['id']);

    $message_data           =   array();
    $message_data['x']      =   $message->message_data['x'];
    foreach($languages as $lang){
        if(isset($message->message_data[$lang->code])){
            if($data['lang']    ==  $lang->code){
                $message_data[$lang->code]      =   htmlspecialchars($data['translate']);
            }else{
                $message_data[$lang->code]      =  htmlspecialchars($message->message_data[$lang->code]);
            }
        }else{
            if($data['lang']    ==  $lang->code){
                $message_data[$lang->code]      =   htmlspecialchars($data['translate']);
            }
        }
    }
    $message->message_data  =   $message_data;
    $message->save();

    \System\Helpers\Cache::clear();
    return true;
}
public function onEnd()
{
    if($this->param('page')){
        $this->page->title      =   ucfirst($this->param('page')) .' - '.$this->page->title;
    }else{
        $this->page->title      =   $this->page->title;
    }
}
public function onSave()
{


    $data = post();

    $settings                       =   Settings::instance();
    if($this->param('page') == 'general' || !$this->param('page')){
        $settings->language                     =   htmlspecialchars($data['language']);
        $settings->timezone_offset              =   htmlspecialchars($data['timezone_offset']);
        $settings->dateformat                   =   htmlspecialchars($data['dateformat']);
        $settings->addShipmentForm              =   htmlspecialchars($data['add_form']);
        $settings->updateShipmentForm           =   htmlspecialchars($data['update_form']);
        $settings->printTemplate                =   htmlspecialchars($data['print_template']);
        $settings->addUserSHipment              =   htmlspecialchars($data['add_user']);
        

        $currency                                   =   Currency::find($data['currency']);
        $currency->is_primary                       =   1;
        $currency->place_symbol_before              =   ((isset($data['place_symbol_before'])) ? 1 : 0);
        $currency->with_space                       =   ((isset($data['with_space'])) ? 1 : 0);
        $currency->decimal_point                    =   htmlspecialchars($data['decimal_point']);
        $currency->thousand_separator               =   htmlspecialchars($data['thousand_separator']);
        $currency->initbiz_money_fraction_digits    =   htmlspecialchars($data['initbiz_money_fraction_digits']);
        $currency->save();

        $locale                 =   \RainLab\Translate\Models\Locale::where('code',$data['language'])->first();
        $locale->is_default     =   1;
        $locale->save();
    }elseif($this->param('page') == 'company'){
        $keywords       =   '';
        $n = 0;
        foreach(json_decode($data['company']['keywords']) as $keyword){
            $n++;
            $keywords   .=  $keyword->value;
            if($n < count(json_decode($data['company']['keywords']))){
                $keywords   .=  ',';
            }
        }
       // dd(htmlspecialchars($data['company']['address']));
        $company    =   array(
                            'title'             =>  htmlspecialchars($data['company']['title']),
                            'charset'           =>  htmlspecialchars($data['company']['charset']),
                            'description'       =>  htmlspecialchars($data['company']['description']),
                            'keywords'          =>  $keywords,
                            'primary_email'     =>  htmlspecialchars($data['company']['primary_email']),
                            'tax_number'        =>  ((isset($data['company']['tax_number']) && $data['company']['tax_number'] != '') ? htmlspecialchars($data['company']['tax_number']) : null),
                            'company_phone'     =>  ((isset($data['company']['company_phone']) && $data['company']['company_phone'] != '') ? htmlspecialchars($data['company']['company_phone']) : null),
                            'company_phone_2'   =>  ((isset($data['company']['company_phone_2']) && $data['company']['company_phone_2'] != '') ? htmlspecialchars($data['company']['company_phone_2']) : null),
                            'company_phone_3'   =>  ((isset($data['company']['company_phone_3']) && $data['company']['company_phone_3'] != '') ? htmlspecialchars($data['company']['company_phone_3']) : null),
                            'facebook'          =>  ((isset($data['company']['facebook']) && $data['company']['facebook'] != '') ? htmlspecialchars($data['company']['facebook']) : null),
                            'twitter'           =>  ((isset($data['company']['twitter']) && $data['company']['twitter'] != '') ? htmlspecialchars($data['company']['twitter']) : null),
                            'instagram'         =>  ((isset($data['company']['instagram']) && $data['company']['instagram'] != '') ? htmlspecialchars($data['company']['instagram']) : null),
                            'address'           =>  ((isset($data['company']['address']) && $data['company']['address'] != '') ? htmlspecialchars($data['company']['address']) : null),
                            'lat'               =>  ((isset($data['company']['lat']) && $data['company']['lat'] != '') ? htmlspecialchars($data['company']['lat']) : null),
                            'lng'               =>  ((isset($data['company']['lng']) && $data['company']['lng'] != '') ? htmlspecialchars($data['company']['lng']) : null),
                            'county'            =>  ((isset($data['company']['sublocality']) && $data['company']['sublocality'] != '') ? htmlspecialchars($data['company']['sublocality']) : null),
                            'city'              =>  ((isset($data['company']['locality']) && $data['company']['locality'] != '') ? htmlspecialchars($data['company']['locality']) : null),
                            'state'             =>  ((isset($data['company']['administrative_area_level_1']) && $data['company']['administrative_area_level_1'] != '') ? htmlspecialchars($data['company']['administrative_area_level_1']) : null),
                            'postal_code'       =>  ((isset($data['company']['postal_code']) && $data['company']['postal_code'] != '') ? htmlspecialchars($data['company']['postal_code']) : null),
                            'country'           =>  ((isset($data['company']['country']) && $data['company']['country'] != '') ? htmlspecialchars($data['company']['country']) : null),
                        );
        $settings->company              =   $company;

    }elseif($this->param('page') == 'website'){
        $faqs = null;$services=null;$sliders=null;

        if(isset($data['faqs']) && $data['faqs'] != '' && !empty($data['faqs'])){
            $faqs = array();
            foreach($data['faqs'] as $faq){
                $faqs[]       = array(
                                    'question' =>  htmlspecialchars($faq['question']),
                                    'answer'   =>  htmlspecialchars($faq['answer']),
                                );   
            }
        }

    
        if(Input::file('sliders')){
            $settings->sliders_pics()->delete();
            foreach( Input::file('sliders') as $key => $slide_image){
                $file_name = '/uploads/public/images/'.$slide_image['imgslider']->getClientOriginalName();
                $content = file_get_contents($slide_image['imgslider']);
                Storage::put($file_name,$content);

                $file = new System\Models\File;
                $file->data = $slide_image['imgslider'];
                $file->is_public = true;
                $file->save();

                $settings->sliders_pics()->add($file);
            }
        }

        if(Input::file('services')){
            $settings->services_pics()->delete();
            foreach( Input::file('services') as $key => $service_image){
                $file_name = '/uploads/public/images/'.$service_image['img']->getClientOriginalName();
                $content = file_get_contents($service_image['img']);
                Storage::put($file_name,$content);

                $file = new System\Models\File;
                $file->data = $service_image['img'];
                $file->is_public = true;
                $file->save();

                $settings->services_pics()->add($file);
            }
        }

        if($_FILES){
            foreach($_FILES['sliders'] as $key => $slide_image){
                
            }
        }
        if(isset($data['services']) && $data['services'] != '' && !empty($data['services'])){
            $services = array();
            
            foreach($data['services'] as  $key => $service){
                if (Input::hasFile('services') && Input::file('services')[$key]) {
                dd(Input::file('services')[$key]);
                    $settings->services_pics()->create(['data' => Input::file('services')[$key]]);
                }
                $services[]       = array(
                                    'title'         =>  htmlspecialchars($service['title']),
                                    'description'   =>  htmlspecialchars($service['description']),
                                    'img_name'      =>  'test',
                                );   
            }
        }

        if(isset($data['sliders']) && $data['sliders'] != '' && !empty($data['sliders'])){
            $sliders = array();
            
            foreach($data['sliders'] as $key => $slider){
                if (Input::hasFile('sliders') && isset(Input::file('sliders')[$key])) {
                dd(Input::file('sliders')[$key]);
                    $settings->sliders_pics()->create(['data' => Input::file('sliders')[$key]]);
                }
                $sliders[]       = array(
                                    'titleslider'         =>  htmlspecialchars($slider['titleslider']),
                                    'subtitle'   =>  htmlspecialchars($slider['subtitle']),
                                    'link'          =>  htmlspecialchars($slider['link']),
                                );   
            }
        }

        $website    =   array(
                            'about'             =>  htmlspecialchars($data['about']),
                            'faqs'              =>  $faqs,
                            'services'          =>  $services,
                            'sliders'          =>  $sliders,
                        );
   //dd($website);
        $settings->website              =   $website;
    }elseif($this->param('page') == 'fees'){
        $taxes    =   array(
                            'type'                =>  htmlspecialchars($data['taxes']['type']),
                            'percent'             =>  isset($data['taxes']['percent'])?                                    htmlspecialchars($data['taxes']['percent']) : 0,
                            'SGST'             =>  isset($data['taxes']['SGST'])?                                    htmlspecialchars($data['taxes']['SGST']) : 0,
                            'CGST'             =>  isset($data['taxes']['CGST'])?                                    htmlspecialchars($data['taxes']['CGST']) : 0,
                            'insurance'           =>  htmlspecialchars($data['taxes']['insurance']),
                        );
        $settings->taxes              =   $taxes;
        $fees    =   array(
                            'delivery_cost'                     =>  htmlspecialchars($data['fees']['delivery_cost']),
                            'pickup_cost'                       =>  htmlspecialchars($data['fees']['pickup_cost']),
                            'delivery_cost_back_sender'         =>  htmlspecialchars($data['fees']['delivery_cost_back_sender']),
                            'delivery_cost_back_receiver'       =>  htmlspecialchars($data['fees']['delivery_cost_back_receiver']),
                        );
        $settings->fees              =   $fees;

        if(isset($data['weights']) && $data['weights'] != '' && !empty($data['weights'])){
            foreach($data['weights'] as $key => $weight){
                $fees_weight [htmlspecialchars($weight['weight'])]     =  htmlspecialchars($weight['price']);
            }
            $settings->fees_weight              =   $fees_weight;
            $settings->enable_fees_weight              =   (isset($data['fees_weight']['enable']) ? 1 : 0);

        }

        //$fees_weight    =   array(
        //                    'enable'         =>  (isset($data['fees_weight']['enable']) ? 1 : 0),
        //                    '1'              =>  htmlspecialchars($data['fees_weight']['1']),
        //                    '10'             =>  htmlspecialchars($data['fees_weight']['10']),
        //                    '20'             =>  htmlspecialchars($data['fees_weight']['20']),
        //                    '50'             =>  htmlspecialchars($data['fees_weight']['50']),
        //                    '100'            =>  htmlspecialchars($data['fees_weight']['100']),
        //                    'above100'       =>  htmlspecialchars($data['fees_weight']['above100']),
        //                );
        
        
        $settings->packaging_fees   = array(
                                        'fees' => $data['packaging_fees'],
                                        'enable' => (isset($data['packaging_fees']['enable']) ? 1 : 0),
                                                );
    }elseif($this->param('page') == 'invoice'){
        $tracking    =   array(
                            'prefix_order'           =>  htmlspecialchars($data['tracking']['prefix_order']),
                            'numbers_order'          =>  htmlspecialchars($data['tracking']['numbers_order']),
                            //'prefix_container'       =>  htmlspecialchars($data['tracking']['prefix_container']),
                            //'numbers_container'      =>  htmlspecialchars($data['tracking']['numbers_container']),
                            //'prefix_consolidate'     =>  htmlspecialchars($data['tracking']['prefix_consolidate']),
                            //'numbers_consolidate'    =>  htmlspecialchars($data['tracking']['numbers_consolidate']),
                            'default_deliverytime'   =>  htmlspecialchars($data['tracking']['default_deliverytime']),
                            'default_status'         =>  htmlspecialchars($data['tracking']['default_status']),
                            'default_tracking_id'         =>  htmlspecialchars($data['tracking']['default_tracking_id']),
                        );
        $settings->tracking              =   $tracking;
        $invoice    =   array(
                            'terms'                 =>  htmlspecialchars($data['invoice']['terms']),
                            'signing_company'       =>  htmlspecialchars($data['invoice']['signing_company']),
                            'signing_customer'      =>  htmlspecialchars($data['invoice']['signing_customer']),
                        );
        $settings->invoice              =   $invoice;
    }elseif($this->param('page') == 'sms'){


        SMS::extend(function($model){
            $myrules['gateway'] = 'required';
            $model->rules = $myrules;
        });

        $sms = SMS::instance();
        if(isset($data['enable'])){
            $sms->enable = 1;
        }else{
            $sms->enable = 0;
        }
        $sms->gateway = htmlspecialchars($data['gateway']);
        $sms->from = (isset($data['gateway_from']) ? htmlspecialchars($data['gateway_from']) : '+14075054816');
        if($data['gateway'] == 'clickatell'){
            $sms->clickatell_api_id = htmlspecialchars($data['clickatell_api_id']);
            $sms->clickatell_username = htmlspecialchars($data['clickatell_username']);
            $sms->clickatell_password = htmlspecialchars($data['clickatell_password']);
        }
        if($data['gateway'] == 'smsala'){
            $sms->smsala_api_id = htmlspecialchars($data['smsala_api_id']);
            $sms->smsala_api_password = htmlspecialchars($data['smsala_api_password']);
            $sms->smsala_sms_type = htmlspecialchars($data['smsala_sms_type']);
            $sms->smsala_encoding = htmlspecialchars($data['smsala_encoding']);
            $sms->smsala_sender_id = htmlspecialchars($data['smsala_sender_id']);
        }
        if($data['gateway'] == 'twilio'){
            $sms->twilio_sid = htmlspecialchars($data['twilio_sid']);
            $sms->twilio_token = htmlspecialchars($data['twilio_token']);
        }

        // $sms->sms_server = htmlspecialchars($data['sms_server']);
        // $sms->sms_authKey = htmlspecialchars($data['sms_authKey']);
        // $sms->sms_getway_id = htmlspecialchars($data['sms_getway_id']);
        // $sms->sms_mode = htmlspecialchars($data['sms_mode']);
        // $sms->sms_sender_id = htmlspecialchars($data['sms_sender_id']);
        // $sms->sms_country_id = htmlspecialchars($data['sms_country_id']);
        // $sms->sms_encoding = htmlspecialchars($data['sms_encoding']);

        $sms->save();
    }elseif($this->param('page') == 'mail'){
        $array = array(
            "send_mode" =>  $data["send_mode"],
            "sender_name"   =>  $data["sender_name"],
            "sender_email"  =>  $data["sender_email"],
            "sendmail_path" =>  $data["sendmail_path"],
            "smtp_address"  =>  $data["smtp_address"],
            "smtp_port" =>  $data["smtp_port"],
            "smtp_user"    =>   $data["smtp_user"],
            "smtp_password" =>  $data["smtp_password"],
            "smtp_authorization"    =>  (isset($data["smtp_authorization"]) ? $data["smtp_authorization"] : false),
            "smtp_encryption"   =>  $data["smtp_encryption"],
            "mailgun_domain"    =>  "",
            "mailgun_secret"    =>  "",
            "mandrill_secret"   =>  "",
            "ses_key"   =>  "",
            "ses_secret"    =>  "",
            "ses_region"    =>  "",
            "sparkpost_secret"  =>  ""
        );
        Db::table('system_settings')
            ->where('item','system_mail_settings')
            ->update(['value' => json_encode($array)]);

    }elseif($this->param('page') == 'ShipmentsSettings'){
        $shipments    =   array(
                            'enable_type' => (isset($data['enable_type']) ? 1 : 0),
                            'type'                =>  htmlspecialchars($data['shipments']['type']),

                            'enable_package_type' => (isset($data['enable_package_type']) ? 1 : 0),
                            'packaging_id'                =>  htmlspecialchars($data['shipments']['packaging_id']),

                            'enable_branch' => (isset($data['enable_branch']) ? 1 : 0),
                            'office_id'                =>  htmlspecialchars($data['shipments']['office_id']),

                            'enable_shippingDate' => (isset($data['enable_shippingDate']) ? 1 : 0),
                            'ship_date'                =>  htmlspecialchars($data['shipments']['ship_date']),

                            'enable_payment_type' => (isset($data['enable_payment_type']) ? 1 : 0),
                            'payment_type'                =>  htmlspecialchars($data['shipments']['payment_type']),

                            'enable_payment_method' => (isset($data['enable_payment_method']) ? 1 : 0),
                            'payment_method'                =>  htmlspecialchars($data['shipments']['payment_method']),

                            'enable_return_package' => (isset($data['enable_return_package']) ? 1 : 0),
                            'return_package'                =>  htmlspecialchars($data['shipments']['return_package']),

                            'enable_category' => (isset($data['enable_category']) ? 1 : 0),
                            'category_id'                =>  htmlspecialchars($data['shipments']['category_id']),

                            'enable_description' => (isset($data['enable_description']) ? 1 : 0),
                            'description'                =>  htmlspecialchars($data['shipments']['description']),

                            'enable_quantity' => (isset($data['enable_quantity']) ? 1 : 0),
                            'quantity'                =>  htmlspecialchars($data['shipments']['quantity']),

                            'enable_weight' => (isset($data['enable_weight']) ? 1 : 0),
                            'weight'                =>  htmlspecialchars($data['shipments']['weight']),

                            'enable_dimensions' => (isset($data['enable_dimensions']) ? 1 : 0),
                            'length'                =>  htmlspecialchars($data['shipments']['length']),
                            'width'                =>  htmlspecialchars($data['shipments']['width']),
                            'height'                =>  htmlspecialchars($data['shipments']['height']),

                            'enable_tax' => (isset($data['enable_tax']) ? 1 : 0),
                            'tax'                =>  htmlspecialchars($data['shipments']['tax']),
                            'sgst'                =>  htmlspecialchars($data['shipments']['sgst']),
                            'cgst'                =>  htmlspecialchars($data['shipments']['cgst']),

                            'enable_insurance' => (isset($data['enable_insurance']) ? 1 : 0),
                            'insurance'                =>  htmlspecialchars($data['shipments']['insurance']),

                            'enable_customsValue' => (isset($data['enable_customsValue']) ? 1 : 0),
                            'customs_value'                =>  htmlspecialchars($data['shipments']['customs_value']),

                            'enable_shippingMode' => (isset($data['enable_shippingMode']) ? 1 : 0),
                            'mode_id'                =>  htmlspecialchars($data['shipments']['mode_id']),

                            'enable_courierCompany' => (isset($data['enable_courierCompany']) ? 1 : 0),
                            'courier_id'                =>  htmlspecialchars($data['shipments']['courier_id']),

                            'enable_deliveryTime' => (isset($data['enable_deliveryTime']) ? 1 : 0),
                            'delivery_time_id'                =>  htmlspecialchars($data['shipments']['delivery_time_id']),

                            'enable_deliveryStatus' => (isset($data['enable_deliveryStatus']) ? 1 : 0),
                            'status_id'                =>  htmlspecialchars($data['shipments']['status_id']),

                            'enable_assignEmployee' => (isset($data['enable_assignEmployee']) ? 1 : 0),
                            'assigned_id'                =>  htmlspecialchars($data['shipments']['assigned_id']),
                        );
        $settings->shipments              =   $shipments;

    }elseif($this->param('page') == 'CustomersSettings'){
        $customers    =   array(
                            'enable_anotherCustomer' => (isset($data['enable_anotherCustomer']) ? 1 : 0),
                            'anotherCustomer'                =>  htmlspecialchars($data['customers']['anotherCustomer']),

                            'enable_saveCustomer' => (isset($data['enable_saveCustomer']) ? 1 : 0),
                            'saveCustomer'                =>  htmlspecialchars($data['customers']['saveCustomer']),

                            'enable_customerPublic' => (isset($data['enable_customerPublic']) ? 1 : 0),
                            'customerPublic'                =>  htmlspecialchars($data['customers']['customerPublic']),

                            'enable_gender' => (isset($data['enable_gender']) ? 1 : 0),
                            'gender'                =>  htmlspecialchars($data['customers']['gender']),

                            'enable_mapAddress'  => (isset($data['enable_mapAddress']) ? 1 : 0),
                            'street_address_map' =>  htmlspecialchars($data['customers']['street_address_map']),

                            'enable_postalCode' => (isset($data['enable_postalCode']) ? 1 : 0),
                            'postal_code'       =>  htmlspecialchars($data['customers']['postal_code']),

                            'enable_state' => (isset($data['enable_state']) ? 1 : 0),
                            'state'                =>  htmlspecialchars($data['customers']['state']),

                            'enable_streetAddress' => (isset($data['enable_streetAddress']) ? 1 : 0),
                            'street_address'       =>  htmlspecialchars($data['customers']['street_address']),

                            'enable_county' => (isset($data['enable_county']) ? 1 : 0),
                            'county'        =>  htmlspecialchars($data['customers']['county']),

                            'enable_createAccount' => (isset($data['enable_createAccount']) ? 1 : 0),
                            'connect'              =>  (isset($data['customers']['connect']) ? 1 : 0),

                            
                        );
        $settings->customers              =   $customers;    
    }elseif($this->param('page') == 'payment'){
        $payment = array();        

        if(isset($data['enable_cash'])){
            $payment['enable_cash'] = 1 ;
        }else{
            $payment['enable_cash'] = 0 ;
        }

        if(isset($data['enable_transfer'])){
            $payment['enable_transfer'] = 1 ;
            $payment['transfer_desc'] = $data['transfer_desc'];  
        }else{
            $payment['enable_transfer'] = 0;
        }

        if(isset($data['enable_paystack'])){
            $payment['enable_paystack'] = 1 ;
            $payment['paystack_key']        =   $data['paystack_key'];
            $payment['paystack_secret']     =   $data['paystack_secret'];
        }else{
            $payment['enable_paystack'] = 0;
        }

        if(isset($data['enable_paypal'])){
            $payment['enable_paypal'] = 1 ;
            $payment['paypal_id']        =   $data['paypal_id'];
            $payment['paypal_secret']     =   $data['paypal_secret'];
        }else{
            $payment['enable_paypal'] = 0;
        }

        //if(isset($data['enable'])){
        //    $payment    =   array(
        //                        'enable'            =>  1,
        //                        'gateways'          =>  $data['gateways']
        //                    );
        //    if(in_array('paystack', $data['gateways'])){
        //        $payment['paystack_key']        =   $data['paystack_key'];
        //        $payment['paystack_secret']     =   $data['paystack_secret'];
        //    }
        //    if(in_array('paypal', $data['gateways'])){
        //        $payment['paypal_id']        =   $data['paypal_id'];
        //        $payment['paypal_secret']     =   $data['paypal_secret'];
        //    }
        //}else{
        //    $payment    =   array(
        //                        'enable'              =>  0,
        //                    );
        //}

        $settings->payment              =   $payment;

    }elseif($this->param('page') == 'notifications'){
        if(isset($data['live'])){
            $notifications    =   array(
                                'live'              =>  1,
                                'provider'          =>  $data['provider'],
                                'pusher'            =>  $data['pusher'],
                                'responsibility'    =>  $data['responsibility'],
                            );
        }else{
            $notifications    =   array(
                                'live'              =>  0,
                                'responsibility'    =>  $data['responsibility'],
                            );
        }

        if(isset($data['push'])){
            $push_notifications    =   array(
                                'push'              =>  1,
                                'push_provider'     =>  $data['push_provider'],
                                'fcm'               =>  $data['fcm'],
                                'responsibility'    =>  $data['responsibility'],
                            );
        }else{
            $push_notifications    =   array(
                                'push'              =>  0,
                                'responsibility'    =>  $data['responsibility'],
                            );
        }

        $settings->notifications                    =   $notifications;
        $settings->push_notifications               =   $push_notifications;
    }elseif($this->param('page') == 'google'){
        $google    =   array(
                            'map'          =>  htmlspecialchars($data['map']),
                        );
        $settings->google              =   $google;
    }
    $settings->save();
    \System\Helpers\Cache::clear();

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/settings/'.$this->param('page'));
}
public function onDelete()
{

    if($this['settings']['demo_mode']){
      throw new ApplicationException('NOT ALLAOWED IN DEMO');
      return false;
    }

    $data = post();
    switch($data['type']){
        case 'languages':
            if(!Auth::getUser()->hasUserPermission(["languages"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \RainLab\Translate\Models\Locale::whereIn('id',post('id'))->delete();
                }else{
                    \RainLab\Translate\Models\Locale::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'currencies':
            if(!Auth::getUser()->hasUserPermission(["currencies"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Responsiv\Currency\Models\Currency::whereIn('id',post('id'))->delete();
                }else{
                    \Responsiv\Currency\Models\Currency::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'departments':
            if(!Auth::getUser()->hasUserPermission(["departments"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \RainLab\User\Models\UserGroup::whereIn('id',post('id'))->delete();
                }else{
                    \RainLab\User\Models\UserGroup::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'branches':
            if(!Auth::getUser()->hasUserPermission(["branches"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\Office::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\Office::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        case 'cars':
            if(!Auth::getUser()->hasUserPermission(["cars"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\Car::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\Car::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        case 'destination':
            if(!Auth::getUser()->hasUserPermission(["destination"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Container\Models\Destination::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Container\Models\Destination::find($data['id'])->delete();
                }
                return Redirect::back();
            } 
        case 'location':
            if(!Auth::getUser()->hasUserPermission(["location"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Container\Models\Location::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Container\Models\Location::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        case 'statuscontainer':
            if(!Auth::getUser()->hasUserPermission(["statuscontainer"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Container\Models\Status::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Container\Models\Status::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        case 'reasonarrival':
            if(!Auth::getUser()->hasUserPermission(["reasonarrival"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Container\Models\Reasonarrival::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Container\Models\Reasonarrival::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        case 'size':
            if(!Auth::getUser()->hasUserPermission(["size"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Container\Models\Size::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Container\Models\Size::find($data['id'])->delete();
                }
                return Redirect::back();
            }        
        case 'statuses':
            if(!Auth::getUser()->hasUserPermission(["statuses"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\Status::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\Status::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'treasury':
            if(!Auth::getUser()->hasUserPermission(["treasury"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\Treasury::whereIn('id',post('id'))->whereNotIn('default',1)->delete();
                }else{
                    \Spot\Shipment\Models\Treasury::where([ ['default', '!=' , 1],['id','=',$data['id'] ] ])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'category':
            if(!Auth::getUser()->hasUserPermission(["category"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\Category::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\Category::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'shipping':
            if(!Auth::getUser()->hasUserPermission(["shipping"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\Mode::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\Mode::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'labels':
            if(!Auth::getUser()->hasUserPermission(["labels"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\Label::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\Label::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'handler':
            if(!Auth::getUser()->hasUserPermission(["handler"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\Handler::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\Handler::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'break':
            if(!Auth::getUser()->hasUserPermission(["break"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\Breakdown::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\Breakdown::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'couriers':
            if(!Auth::getUser()->hasUserPermission(["couriers"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\Courier::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\Courier::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        case 'deliverytimes':
            if(!Auth::getUser()->hasUserPermission(["deliverytimes"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\DeliveryTime::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\DeliveryTime::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'countries':
            if(!Auth::getUser()->hasUserPermission(["countries"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \RainLab\Location\Models\Country::whereIn('id',post('id'))->delete();
                }else{
                    \RainLab\Location\Models\Country::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        case 'states':
            if(!Auth::getUser()->hasUserPermission(["states"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \RainLab\Location\Models\State::whereIn('id',post('id'))->delete();
                }else{
                    \RainLab\Location\Models\State::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        case 'cities':
            if(!Auth::getUser()->hasUserPermission(["cities"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\City::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\City::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        case 'areas':
            if(!Auth::getUser()->hasUserPermission(["areas"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\Area::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\Area::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'packaging':
            if(!Auth::getUser()->hasUserPermission(["packaging"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\Packaging::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\Packaging::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'fees':
            if(!Auth::getUser()->hasUserPermission(["fees"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \Spot\Shipment\Models\Fees::whereIn('id',post('id'))->delete();
                }else{
                    \Spot\Shipment\Models\Fees::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'employees':
            if(!Auth::getUser()->hasUserPermission(["employees"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    \RainLab\User\Models\User::whereIn('id',post('id'))->delete();
                }else{
                    \RainLab\User\Models\User::find($data['id'])->delete();
                }
                return Redirect::back();
            }
        break;
        case 'backup':
            if(!Auth::getUser()->hasUserPermission(["backups"],'d')) {
                return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
            }

            if(null !== post('id')){
                if(is_array(post('id'))){
                    foreach(post('id') as $file){
                        echo $file;
                        unlink(storage_path('app/uploads/panakour-backup/'.$file));
                    }
                }else{
                    unlink(storage_path('app/uploads/panakour-backup/'.post('id')));
                }
                return Redirect::back();
            }
        break;
    }
}
}
