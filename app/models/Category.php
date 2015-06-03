<?php

class Category extends Eloquent{
    protected $fillable = array('name');
    public static $rules = array ('name'=> 'required|min:3|max:20|unique:categories');
    public function products(){
        return $this->hasMany('Product');
    }
    
    
    //kategorija pieder kādam no lietotājiem
      public function user()
    {
        return $this->belongsTo('User','user_id');
    }
}