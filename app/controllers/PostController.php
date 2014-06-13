<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$posts = Post::with('user')->get();

		return View::make('posts.index')
			->with('posts',$posts);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//validate
		$validator = Validator::make(Input::all(), Post::$rules);

		//process the store command
		if ($validator->fails()) {
			return Redirect::to('posts/create')
				->withErrors($validator)
				->withInput(Input::all());
		} else {
			//store
			$post = new Post;

			$post->userid = Input::get('userid');
			$post->title = Input::get('title');
			$post->content = Input::get('content');

			$post->save();

			//redirect
			Session::flash('message', 'Successfully created post'.$post->title.'!');
			return Redirect::to('posts');
		}
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$post = Post::find($id);
		//
		return View::make('posts.show')
			->with('post',$post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$post = Post::find($id);

		//show the edit form
		return View::make('posts.edit')
			->with('post',$post);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//validate
		$validator = Validator::make(Input::all(), Post::$rules);

		//process
		if ($validator->fails()) {
			return Redirect::to('posts/'.$id.'/edit')
				->withErrors($validor)
				->withInput(Input::all());
		} else {
			//store
			$post = Post::find($id);

			$post->title = Input::get('title');
			$post->content = Input::get('content');

			$post->save();

			//redirect
			Session::flash('message','Successfully updated '.$post->title.'!');
			return Redirect::to('posts/'.$id);
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
