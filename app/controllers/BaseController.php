<?php

class BaseController extends Controller {

    public function __construct() {
        $this->beforeFilter(function(){
            View::share('catnav', Category::all());
        });
    }

    /**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
        
          public function search()
	{
		$input = Input::get('search');
		$results = Post::where('body', 'LIKE', '%'.$input.'%')->get();
		return View::make('blogs.search')->with('results', $results);
	}
}
