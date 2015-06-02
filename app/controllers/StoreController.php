<?php

class StoreController extends BaseController{
    
    public function __construct() {
        parent::__construct();
        $this->beforeFilter('csrf', array ('on'=>'post'));
        $this->beforeFilter('auth',array('only'=>array('postAddtocart','getCart','getRemoveitem')));
        //allows to add products to cart or remove them from it and view cart only if user is logged in
    }
    //displays the 4 newest products after going to store section
    public function getIndex(){
        return View::make ('store.index')
                ->with('products', Product::take(4)
                ->orderBy('created_at', 'DESC')->get());
    }
    //allows to view each product after finding it's id in database
    public function getView($id){
        return View::make('store.view')
                ->with('product', Product::find($id));
    }
    //shows products that are under chosen category (6 products in each page)
    public function getCategory($cat_id){
        return View::make('store.category')
                ->with('products',Product::where('category_id', '=', $cat_id)
                        ->paginate(6))
                ->with ('category', Category::find($cat_id));
    }
    //shows all products
    public function getAll (){
        return View::make ('store.all')
                ->with('products', Product::orderBy('created_at', 'DESC')
                        ->paginate(12));
    }
    //finds all products where title includes seached keyword
    public function getSearch(){
        $keyword = Input::get('keyword');
        
        return View::make('store.search')
                ->with('products', Product::where('title', 'LIKE', '%'.$keyword.'%')->get())
                ->with ('keyword', $keyword);
    }
    public function postAddtocart(){
        $product = Product::find(Input::get('id'));
        $quantity= Input::get('quantity');
        
        Cart::insert(array(
            'id'=>$product->id,
            'name'=>$product->title,
            'price'=>$product->price,
            'quantity'=>$quantity,
            'image'=>$product->image,
        ));
        
        return Redirect::back()
                ->with('flash_message','Produkts pievienots grozam');
    }
    
    public function getCart(){
        return View::make('store.cart')
                ->with('products', Cart::contents());
    }
    
    public function getRemoveitem($identifier){
        $item = Cart::item($identifier);
        $item->remove();
        return Redirect::to('store/cart')
                ->with ('flash_message', 'Produkts izņemts no groza');
    }
}