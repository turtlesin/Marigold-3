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
                    ->with('message', 'Thank you for creating a new account. Please sign in.');   
        }
        
        return Redirect::to('account/newaccount')
                ->with('message', 'Something went wrong')
                ->withErrors($validator)
                ->withInput();
    }
    
    public function getSignin(){
        return View::make('account.signin');
    }
    
    public function postSignin(){
         $validator = Validator::make(Input::all(),
      array(
            'email' => 'required|email',
            'password' => 'required'
        ));
      if ($validator->fails()) {
      return Redirect::to('account/signin')
        ->withErrors($validator)
        ->withInput();
    } else {
      $auth = Auth::attempt(array('email' => Input::get('email'),
        'password' => Input::get('password')));
      
      if($auth) {
        if (Input::get('redirect')) {
            return Redirect::to(Input::get('redirect'));
        }else {
            return Redirect::to('/')
                    ->with ('global','Login successfull!');
        }
      } else {
        return Redirect::to('account/signin')
                ->with('global','Your email/password combo was incorect');
    }}}
    
    public function getSignout(){
        Auth::logout();
        return Redirect::to('account/signin')->with('global', 'You have been signed out');
    }
    
    
  public function getChangePassword() {
    return View::make('account.password');
  }

  public function postChangePassword() {
   $validator = Validator::make(Input::all(), array(
   'old_password'   => 'required',
   'password'       => 'required|min:8',
   'password_again' =>'required|same:password'
   ));
   if($validator->fails()) {
      return Redirect::route('account-change-password')
        ->withErrors($validator);
   } else {
      $user = User::find(Auth::user()->id);
      $old_password = Input::get('old_password');
      $password = Input::get('password');

      if(Hash::check($old_password, $user->getAuthPassword())) {
        $user->password = Hash::make($password);
          if($user->save()) {
            return Redirect::route('home')
              ->with('global', 'Your password has been changed.');
          }

      } else {
           return Redirect::route('account-change-password')
          ->with('global', 'your old password is incorrect');
      }
    }
   return Redirect::route('account-change-password')
          ->with('global', 'your password could not be changed');
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
            $message->to($user->email, $user->username)->subject('your new password has been requested');

          });
          return Redirect::route('home')
          ->with('global', 'we have send you a new pw by email');
        }
      }
  }
  return Redirect::route('account-forgot-password')
      ->with('global', 'could not request new password');
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
            ->with('global', 'Your account has been recover and you can sign in with your new password');
        }
    }
    return Redirect::route('home')
    ->with('global', 'Could not recover your account');
    }
    
} 
   

   
