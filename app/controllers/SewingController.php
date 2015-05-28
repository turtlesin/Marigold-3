<?php

class SewingController extends BaseController {
    public function piedavajums(){
        
        return View::make('piedavajums.piedavajums');
    }
    
    public function susana(){
        return View::make('piedavajums.susana');
    }
    
    public function izsusana(){
        return View::make('piedavajums.izsusana');
    }
}