<?php

class PagesController extends BaseController {
    public function prices(){
        
        return View::make('pages.prices');
    }

    public function about(){
        
        Return View::make('pages.about');
    }
    
    public function contacts(){
        Return View::make('pages.contacts');
    }
    
    public function possible(){
        Return View::make('pages.possibilities');
    }
}