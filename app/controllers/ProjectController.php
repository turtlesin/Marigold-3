<?php

class ProjectController extends BaseController {
    public function project(){
        
        return View::make('projekti.projekti');
    }
    
    public function individual(){
        return View::make('projekti.individual');
    }
    
    public function colective(){
        return View::make('projekti.colective');
    }
}