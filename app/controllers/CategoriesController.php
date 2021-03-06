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
    //Lietotājam ar administratora statusu ir iespējams izveidot kategorijas vai dzēst tās
    //tiek pārbaudīts vai kategorija ar ievadīto nosaukumu jau eksistē
    //ja neeksistē tad saglabā datu bāzē, ja eksistē, tad izvada kļūdas paziņojumu
    public function postCreate(){
        $validator = Validator::make(Input::all(), Category::$rules);
        
        if ($validator->passes()){
            $category = new Category;
            $category->name = Input::get('name');
            $category->user_id = Auth::user()->id;
            $category->save();
            
            return Redirect::to('admin/categories/index')
                    ->with ('flash_message', 'Kategorija izveidota')
                    ->with('flash_type', 'success');    
        }
        
        return Redirect::to('admin/categories/index')
                ->with ('flash_message', 'Neizdevās izveidot kategoriju! Mēģini vēlreiz!')
                ->with('flash_type', 'warning')
                ->withErrors($validator)
                ->withInput();
    }
    //izdzēšot kategoriju parādās paziņojums par veiksmīgu tā izdzēšanu
    public function postDestroy(){
        $category = Category::find(Input::get('id'));
        
        if ($category){
            $category->delete();
            return Redirect::to('admin/categories/index')
                    ->with ('flash_message', 'Kategorija izdzēsta')
                    ->with('flash_type', 'success');
        }
        return Redirect::to('admin/categories/index')
                ->with('flash_message','Neizdevās izdzēst kategoriju! Mēģini vēlreiz!')
                ->with('flash_type', 'warning');
    }
}
