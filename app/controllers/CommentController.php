<?php

class CommentController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$id = Auth::user()->id;
		$b_id = Input::get('bill_id');
		$user = User::find($id);
		
		$comment = new Comment;
		$comment->comment = Input::get('comment');
		$comment->bill_id = $b_id;
		$comment->user_id = $id;
		$comment->save();
		
		$comments = DB::table('comments')->select('comment', 'user_id')->where('bill_id', 'like', "%$b_id%")->get();
		$bill_info = SphinxQL::raw("select json.id AS b_id, json['versions'][0]['name'] AS name, json['title'] AS title, json['sources'][0]['url'] AS url2, json['subjects'] AS subjects from l_bills, u_bills where bill_id=' $b_id'");
		
		return View::make('comments.show', array('comments' => $comments, 'bill_id' => $b_id, 'bill_info' => $bill_info, 'user' => $user));

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		
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
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
