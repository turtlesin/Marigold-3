<?php

class Product extends Eloquent{
    
    protected $fillable = array('category_id', 'title', 'description', 'price', 'availability', 'image', 'short_description');
    
    public static $rules = array(
        'category_id'=>'required|integer',
        'title'=>'required|min:2|max:40',
        'description'=>'required|min:10|max:100',
        'short_description'=>'required|max:30',
        'price'=>'required|numeric',
        'availabiltity' =>'integer',
        'image'=>'required|image|mimes:jpeg,jpg,png,gif,bmp'
    );
    
    public function category(){
        return $this->belongsTo('Category');
    }
    
     public function user()
    {
        return $this->belongsTo('User','user_id');
    }
}