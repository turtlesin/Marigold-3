<?php

class ProjectController extends BaseController {
    public function project(){
        
        return View::make('piedavajums.piedavajums');
    }
    
    public function individual(){
        return View::make('piedavajums.individual');
    }
    
    public function colective(){
        return View::make('piedavajums.colective');
    }
}