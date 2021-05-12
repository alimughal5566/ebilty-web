<?php 
class Cms609ba551e8403992578773_8b07e66994d2a7da45be66967338f329Class extends Cms\Classes\PageCode
{
public function onStart(){
    if(Auth::getUser()){
        return Redirect::to('dashboard');
    }
$this['categories']= \Spot\Shipment\Models\Category::select('id','name')->get();
$this['cars']= \Spot\Shipment\Models\Car::select('id','name')->get();


    if(isset($_GET['login'])){
        $data = $_GET;

        $rules = [];

        $rules['login'] = 'required|between:2,255';

        $rules['password'] = 'required|between:4,255';

        $data['login'] = trim($data['login']);

        $validation = Validator::make($data, $rules);
        if ($validation->fails()) {
            throw new ValidationException($validation);
        }

        /*
            * Authenticate user
            */
        $credentials = [
            'login'    => array_get($data, 'login'),
            'password' => array_get($data, 'password')
        ];


        Event::fire('rainlab.user.beforeAuthenticate', [$this, $credentials]);
        try {
            $user = Auth::authenticate($credentials, true);
            if ($user->isBanned()) {
                Auth::logout();
                throw new ValidationException(/*Sorry, this user is currently not activated. Please contact us for further assistance.*/'rainlab.user::lang.account.banned');
            }

            return Redirect::to('dashboard');
        } catch (\Throwable $th) {
            Flash::error(Lang::get('rainlab.user::lang.account.invalid_current_pass'));
            return Redirect::to('login');
        }
    }

    $this['requireActivation']      = RainLab\User\Models\Settings::get('require_activation', true);
    $this['automaticActivation']    = RainLab\User\Models\Settings::get('activate_mode', true);
}
public function onMyRegister()
{
    $data['role_id']         = 5;


    $this['account']->onRegister();
}
public function onChangefees1(){
return \Spot\Shipment\Models\Car::select('id','name')->where('transport_id',$_POST['id'])->get();
}
}
