<?php

class Post extends Eloquent{
    protected $guarded = array();
    
    public static $rules = array(
        'title' => 'required|unique:posts|max:200|min:5',
        'body' => 'required|max:5000|min:10'
    );
    
    public function user()
    {
        return $this->belongsTo('User','user_id');
    }
 
 
}