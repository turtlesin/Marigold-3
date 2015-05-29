<?php

class AccountController extends BaseController{
    
    public function __construct(){
        parent::__construct();
        $this->beforeFilter('csrf', array('on'=>'post'));
    }
    
    public function getNewaccount(){
        return View::make('account.newaccount');
    }
    
    public function postCreate(){
        $validator = Validator::make(Input::all(),User::$rules);
        
        if ($validator->passes()){
            $user = new User;
            $user->firstname =Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->username =Input::get('username');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->telephone = Input::get('telephone');
            $user->save();
            
            return Redirect::to('account/signin')
                    ->with('message', 'Paldies par reģistrāciju. Tagad Tu vai pieslēgties.');   
        }
        
        return Redirect::to('account/newaccount')
                ->with('message', 'Kaut kas nogāja greizi. Mēgini vēlreiz!')
                ->withErrors($validator)
                ->withInput();
    }
    
    public function getSignin(){
        return View::make('account.signin');
    }
    
    public function postSignin(){
         $validator = Validator::make(Input::all(),
      array(
            'username' => 'required',
            'password' => 'required'
        ));
      if ($validator->fails()) {
      return Redirect::to('account/signin')
        ->withErrors($validator)
        ->withInput();
    } else {
      $auth = Auth::attempt(array('username' => Input::get('username'),
        'password' => Input::get('password')));
      
      if($auth) {
        if (Input::get('redirect')) {
            return Redirect::to(Input::get('redirect'));
        }else {
            return Redirect::to('/')
                    ->with ('global','Pieslēgšanās izdevusies veiksmīgi!');
        }
      } else {
        return Redirect::to('account/signin')
                ->with('global','Lietotājvārds vai parole ievadīti nepareizi!');
    }}}
    
    public function getSignout(){
        Auth::logout();
        return Redirect::to('account/signin')->with('global', 'Atslēgšanās izdevusies!');
    }
    
    
  public function getChangePassword() {
    return View::make('account.password');
  }

  public function postChangePassword() {
   $validator = Validator::make(Input::all(), array(
   'old_password'   => 'required',
   'new_password'       => 'required|min:8',
   'new_password_again' =>'required|same:new_password'
   ));
   if($validator->fails()) {
      return Redirect::route('account-change-password')
        ->withErrors($validator);
   } else {
      $user = User::find(Auth::user()->id);
      $old_password = Input::get('old_password');
      $new_password = Input::get('password');

      if(Hash::check($old_password, $user->getAuthPassword())) {
        $user->new_password = Hash::make($password);
          if($user->save()) {
            return Redirect::route('home')
              ->with('global', 'Tava parole ir nomainīta veiksmīgi.');
          }

      } else {
           return Redirect::route('account-change-password')
          ->with('global', 'Vecā parole ir ievadīta nepareizi! Pārbaudi datus un mēģini vēlreiz!');
      }
    }
   return Redirect::route('account-change-password')
          ->with('global', 'Paroli neizdevās nomainīt! Mēģini vēlreiz!');
  }
  
 public function getForgotPassword() {
  return View::make('account.forgot');
}
public function postForgotPassword() {
  $validator = Validator::make(Input::all(), 
    array(
        'email' => 'required|email'
        )
    );
  if($validator->fails()) {
    return Redirect::route('account-forgot-password')
        ->withErrors($validator)
        ->withInput();
  } else {

      $user = User::where('email', '=', Input::get('email'));
      if($user->count()) {
        $user = $user->first();
        //generate code
        $code                 = str_random(60);
        $password             = str_random(10);

        $user->code           = $code;
        $user->password_temp  = Hash::make($password);

        if($user->save()) {
          Mail::send('emails.auth.forgot', array(
            'link' => URL::route('account-recover', $code),
            'username' => $user->username,
            'password' => $password),
          function($message) use ($user) {
            $message->to($user->email, $user->username)->subject('Tava jaunā parole tika pieprasīta!');

          });
          return Redirect::route('home')
          ->with('global', 'Jaunā parole tika nosūtīta uz e-pastu!');
        }
      }
  }
  return Redirect::route('account-forgot-password')
      ->with('global', 'Neizdevās pieprasīt jaunu paroli!');
}
public function getRecover($code) {
    $user = User::where('code', '=', $code)->where('password_temp', '!=', '');

    if($user->count()){
        $user                   = $user->first();
        $user->password         = $user->password_temp;
        $user->password_temp    = '';
        $user->code             = '';

        if ($user->save()) {
            return Redirect::to('account/signin')
            ->with('global', 'Tavs konts tika atjaunots! Tagad vari pieslēgties ar jauno paroli!');
        }
    }
    return Redirect::route('home')
    ->with('global', 'Neizdevās atjaunot kontu!');
    }
    
} 
   

   
