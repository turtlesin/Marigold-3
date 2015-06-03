<?php

class AccountController extends BaseController{
    
    public function __construct(){
        parent::__construct();
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->beforeFilter('auth', array('only'=>array('getChangePassword')));
    }
    
    public function getNewaccount(){
        return View::make('account.newaccount');
    }
    
    public function postCreate(){
        $validator = Validator::make(Input::all(),User::$rules);
        //ja validators iztur pārbaudi, tad tiek izveidots jauns lietotāja profils
        //un tiek izdots paziņojums par veiksmīgu reģistrēciju.
        //ja lauki netiek aizpildīti pareizi, tad izvada kļūdas paziņojumu un uzrāda radušās kļūdas
        if ($validator->passes())
          {
            $user = new User;
            $user->firstname =Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->username =Input::get('username');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->telephone = Input::get('telephone');
            $user->save();
            
            return Redirect::to('account/signin')
                    ->with('flash_message', 'Paldies par reģistrāciju. Tagad Tu vai pieslēgties.')
                    ->with('flash_type', 'success');   
          }
        
        return Redirect::to('account/newaccount')
                ->with('flash_message', 'Kaut kas nogāja greizi. Mēgini vēlreiz!')
                ->with('flash_type', 'warning')
                ->withErrors($validator)
                ->withInput();
    }
    
    public function getSignin(){
        return View::make('account.signin');
    }
    //lietotājs tiek nosūtīts uz pieslēgšanās skatu, kurā ir divi obligātie lauki
    //ja lauki tiek aizpildīti pareizi, tad izvada paziņojumu par veiksmīgu pieslēgšanos
    //ja lauki nav aizpildīti pareizi, tad izvada kļūdas paziņojumu un uzrāda radušās kļūdas
    public function postSignin(){
         $validator = Validator::make(Input::all(),
            array(
                'username' => 'required',
                'password' => 'required'
                ));
      if ($validator->fails()) {
      return Redirect::to('account/signin')
              ->with('flash_message', 'Neizvās pieslēgites!')
              ->with('flash_type', 'error')
        ->withErrors($validator)
        ->withInput();
    } 
    else {
      $auth = Auth::attempt(array('username' => Input::get('username'),
        'password' => Input::get('password')));
      
      if($auth) {
        if (Input::get('redirect')) {
            return Redirect::to(Input::get('redirect'));
        }else {
            return Redirect::to('/')
                    ->with ('flash_message','Pieslēgšanās izdevusies veiksmīgi!')
                ->with('flash_type', 'success');
        }
      } else {
        return Redirect::to('account/signin')
                ->with('flash_message','Lietotājvārds vai parole ievadīti nepareizi!')
                ->with('flash_type','warning');
    }}}
    
    public function getSignout(){
        Auth::logout();
        return Redirect::to('account/signin')
                ->with('flash_message', 'Atslēgšanās izdevusies!')
                ->with('flash_type', 'success');
    }
    
    
  public function getChangePassword() {
    return View::make('account.password');
  }
  //mainot paroli lietotājam ir jāievada gan sava patreizējā parole, gan divas reizes jāievada jaunā parole
  //ja visi lauki tiek aizpildīti pareizi, tad izvada paziņojumu par veiksmīgu paroles maiņu
  //vecā parole tiek izdzēsta no datu bāzes un jaunā parole tiek šifrēta un saglabāta
  //ja lauki netiek aizpildīti pareizi, tad izvada kļūdas paziņojumu
  public function postChangePassword() {
   $validator = Validator::make(Input::all(), array(
   'old_password'   => 'required',
   'new_password'       => 'required|min:8',
   'new_password_again' =>'required|same:new_password'
   ));
   if($validator->fails()) {
      return Redirect::route('account-change-password')
              ->with('flash_message', 'Neizevās nomainīt paroli!')
              ->with('flash_type', 'warning')
        ->withErrors($validator);
   } else {
      $user = User::find(Auth::user()->id);
      $old_password = Input::get('old_password');
      $new_password = Input::get('new_password');

      if(Hash::check($old_password, $user->getAuthPassword())) {
        $user->password = Hash::make($new_password);
          if($user->save()) {
            return Redirect::route('home')
              ->with('flash_message', 'Tava parole ir nomainīta veiksmīgi.')
                  ->with('flash_type', 'success');
          }

      } else {
           return Redirect::route('account-change-password')
          ->with('flash_message', 'Vecā parole ievadīta nepareizi! Lūdzu, ievadi vēlreiz!')
              ->with('flash_type','warning');
      }
    }
   return Redirect::route('account-change-password')
          ->with('flash_message', 'Paroli neizdevās nomainīt! Mēģini vēlreiz!')
          ->with('flash_type','error');
  }
  //gadījumā, ja lietotājs ir aizmirsis paroli, viņam ir iespēja iegūt jaunu ievadot savu e-pastu
  //tiek meklēts lietotājs ar ievadīto epastu
  //datu bāze tiek saglabāts kods(beigu daļa atjaunošanas saitei) un pagaidu parole
  //ja atjaunošanas kods ir pariezs, tad tiek uzrādīts paziņojums par veiksmīgu konta atjaunošanu
  //datu bāzē esošā parole tiek saglabāta kā jaunā lietotāja parole
  //ja saite nav pareiza, tad tiek izvadīts kļūdu paziņojums
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
            ->with('flash_message', 'Neidevās atjaunot paroli!')
            ->with('flash_type', 'error')
            ->withErrors($validator)
            ->withInput();
    } 
  else {

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
            $message->to($user->email, $user->username)
                    ->subject('Tava jaunā parole tika pieprasīta!');

          });
          return Redirect::route('home')
                ->with('flash_message', 'Jaunā parole tika nosūtīta uz e-pastu!')
                ->with('flash_type', 'success');
        }
      }
  }
  return Redirect::route('account-forgot-password')
        ->with('flash_type', 'Neizdevās pieprasīt jaunu paroli!')
        ->with('flash_message', 'error');
}
public function getRecover($code) {
    $user = User::where('code', '=', $code)
            ->where('password_temp', '!=', '');

    if($user->count()){
        $user                   = $user->first();
        $user->password         = $user->password_temp;
        $user->password_temp    = '';
        $user->code             = '';

        if ($user->save()) {
            return Redirect::to('account/signin')
                ->with('flash_message', 'Tavs konts tika atjaunots! Tagad vari pieslēgties ar jauno paroli!')
                ->with('flash_type', 'success');
        }
    }
    return Redirect::route('home')
            ->with('flash_message', 'Neizdevās atjaunot kontu!')
            ->with('flash_type', 'error');
    }
    
} 
   

   
