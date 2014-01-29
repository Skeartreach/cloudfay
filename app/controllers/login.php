<?php

class login extends \BaseController {

	public $restful = true;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		return View::make('login.index');

	}
	public function insert()
	{
		
		Input::get('frm_content');
		return Redirect::to('./posts')->with('message',"Le post a bien été enregistré")->withInput();
	}

	public function check()
	{

		$name = Input::get('frm_username');
		if(isset($name))
		{
			$users = user::all();
			foreach ($users as $user)
				{
					if($user->username == Input::get('frm_username')){
				    	$txtUsername = $user->username;
				    	$txtUserId = $user->id;
						$txtIsAdmin = $user->isadmin;
					    if($user->password == sha1(Input::get('frm_password'))){
					    $txtPassword = sha1(Input::get('frm_username'));
						}
					}
				}
			if(isset($txtPassword)&& isset($txtUsername))
			{		
				if($txtIsAdmin == 1){
						Session::put('isadmin', 1);
				}
				Session::put('username', Input::get('frm_username'));
				Session::put('user_id', $txtUserId);
				return Redirect::to('./posts')->with('message',"Vous vous Ãªtes connectÃ©");
			}
			else{
				return Redirect::to('login')->with('message',"Identifiant ou mot de passe erronÃ©.");
			}
		}else{
		return Redirect::to('./posts');
		}
	}

	public function logout()
	{
		
		Session::flush();
	
		return Redirect::to('./login')->with('message',"Vous vous Ãªtes dÃ©connectÃ©.");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$posts = post::all()->orderBy('enddate','ASC')->get();
		$entities = entity::all();

		return View::make('posts.new')
		->with('title','newPost')
		->with('posts', $posts)
		->with('entities', $entities)
		->with('title', "Ajout d'un nouveau post");
	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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