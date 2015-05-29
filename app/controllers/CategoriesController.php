<?php

class CategoriesController extends BaseController{
    public function __construct() {
        parent::__construct();
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->beforeFilter('admin');
    }
    
    public function getIndex(){
        return View::make('categories.index')
                ->with ('categories', Category::all());
    }
    
    public function postCreate(){
        $validator = Validator::make(Input::all(), Category::$rules);
        
        if ($validator->passes()){
            $category = new Category;
            $category->name = Input::get('name');
            $category->user_id = Auth::user()->id;
            $category->save();
            
            return Redirect::to('admin/categories/index')
                ->with ('global', 'Kategorija izveidota');    
        }
        
        return Redirect::to('admin/categories/index')
                ->with ('global', 'Neizdevās izveidot kategoriju! Mēģini vēlreiz!')
                ->withErrors($validator)
                ->withInput();
    }
    public function postDestroy(){
        $category = Category::find(Input::get('id'));
        
        if ($category){
            $category->delete();
            return Redirect::to('admin/categories/index')
                    ->with ('global', 'Kategorija izdzēsta');
        }
        return Redirect::to('admin/categories/index')
                ->with('global','Neizdevās izdzēst kategoriju! Mēģini vēlreiz!');
    }
}
