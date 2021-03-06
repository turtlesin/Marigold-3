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
    
    //izveidot produktu. pārbauda vai visi lauki ir pareizi aizpildīti
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
                ->with('flash_message', 'Produkts izveidots')
                ->with('flash_type', 'success');   
        }
        
        return Redirect::to('admin/products/index')
                ->with ('flash_message', 'Neizdevās izveidot produktu')
                ->with('flash_type', 'error')
                ->withErrors($validator)
                ->withInput();
    }
    
    //idzēš produktu
    public function postDestroy(){
        $product = Product::find(Input::get('id'));
        
        if ($product){
            File::delete('public/'.$product->image);
            $product->delete();
            return Redirect::to('admin/products/index')
                    ->with('flash_message', 'Produkts tika izdzēsts')
                    ->with('flash_type', 'success');
        }
        return Redirect::to('admin/products/index')
                ->with('flash_message','Neizdevās izdzēst produktu! Mēģini vēlreiz!')
                ->with ('flash_type', 'error');
    }
    
    //katrs produkts tiek parādīts atsevišķi
    public function show($id)
	{
		$product = Product::find($id);

        return View::make('products.show') 
                ->with('product', $product);
	}
        
        //maina pieejamību
    public function postToggleAvailability(){
        $product = Product::find(Input::get('id'));
        
        if($product){
            $product->availability = Input::get('availability');
            $product->save();
            return Redirect::to('admin/products/index')
                    ->with('flash_message', 'Produkta '.$product->title.' pieejamība tika mainīta')
                    ->with('flash_type', 'success');
        }
        return Redirect::to('admin/products/index')-with('message', 'Invalid Product');
    }
    
}
