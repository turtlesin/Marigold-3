<?php

class ProductsController extends BaseController{
    public function __construct() {
        parent::__construct();
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->beforeFilter('admin');
    }
    
    public function getIndex(){
        $category=array();
        
        foreach (Category::all()as $category){
            $categories[$category->id] = $category->name; 
        }
        
        return View::make('products.index')
                ->with ('products', Product::all())
                ->with ('categories', $categories);
    }
    
    public function postCreate(){
        $validator = Validator::make(Input::all(), Product::$rules);
        
        if ($validator->passes()){
            $product = new Product;
            $product->category_id = Input::get('category_id');
            $product->title = Input::get('title');
            $product->description = Input::get('description');
            $product->price = Input::get('price');
            
            $image = Input::file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('img/products/' . $filename);
            Image::make($image->getRealPath())->resize(468, 249)->save($path);
            $product->image = 'img/products/'.$filename;
            $product->user_id = Auth::user()->id;
            $product->save();
            
            return Redirect::to('admin/products/index')
                ->with('global', 'Produkts izveidots');;    
        }
        
        return Redirect::to('admin/products/index')
                ->with ('message', 'Something went wrong')
                ->withErrors($validator)
                ->withInput();
    }
    public function postDestroy(){
        $product = Product::find(Input::get('id'));
        
        if ($product){
            File::delete('public/'.$product->image);
            $product->delete();
            return Redirect::to('admin/products/index')
                    ->with('global', 'Produkts tika izdzēsts');;
        }
        return Redirect::to('admin/products/index')
                ->with('global','Neizdevās izdzēst produktu! Mēģini vēlreiz!');
    }
    
    public function show($id)
	{
		$product = Product::find($id);

        return View::make('products.show')->with('product', $product);
	}
        
    public function postToggleAvailability(){
        $product = Product::find(Input::get('id'));
        
        if($product){
            $product->availability = Input::get('availability');
            $product->save();
            return Redirect::to('admin/products/index')
                    ->with('global', 'Produkta '.$product->title.' pieejamība tika mainīta');
        }
        return Redirect::to('admin/products/index')-with('message', 'Invalid Product');
    }
    public function edit($id)
	{
		$product = Product::find($id);

		if(is_null($product))
		{
			return Redirect::route('products.index');
		}

        return View::make('products.edit')->with('product', $product);
	}
        


}
