<?php

class PostController extends BaseController{
public function __construct() {
        parent::__construct();
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->beforeFilter('admin');
    }
    
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::orderBy('created_at', 'DESC')
                        ->paginate(10);
                 return View::make('posts.index')
                         ->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$v = Validator::make($input, Post::$rules);

		if ($v->passes()) {
			
			$post = new Post;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->m_keys = Input::get('m_keys');
			$post->m_desc = Input::get('m_desc');
			$post->slug = Str::slug(Input::get('title'));
			$post->user_id = Auth::user()->id;
			$post->save();

			return Redirect::route('posts.index')
                                 ->with('flash_message', 'Bloga ieraksts izveidots');
		}

		return Redirect::back()->withErrors($v);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		$date = $post->created_at;
		setlocale(LC_TIME, 'America/New_York');
		$date = $date->formatlocalized('%A %d %B %Y');

        return View::make('posts.show')
                ->with('post', $post)
                ->with('date', $date);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		if(is_null($post))
		{
			return Redirect::route('posts.index');
		}

        return View::make('posts.edit')
                ->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');

		$v = Validator::make($input, Post::$rules);

		if($v->passes())
		{
			Post::find($id)->update($input);
			return Redirect::route('posts.index')
                                 ->with('flash_message', 'Bloga ieraksts izlabots')
                        ->with ('flash_type', 'success');
		}

		return Redirect::back()
                        ->withErrors($v);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::find($id)->delete();

		return Redirect::route('posts.index')
                         ->with('flash_message', 'Bloga ieraksts izdzēsts')
                         ->with('flash_type', 'success');
	}
        
        //tiek meklēts raksts datu bāzē, kura aprakstā ir meklētā frāze
        public function search()
	{
		$input = Input::get('search');
		$results = Post::where('body', 'LIKE', '%'.$input.'%')->get();
		return View::make('blogs.search')
                        ->with('results', $results);
	}

}
