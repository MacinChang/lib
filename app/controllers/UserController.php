
<?php
	class UserController extends BaseController
	{
		//protected $layout = 'layout.showuser';

		public function showLogin()
		{
			if(Auth::check())
			{
				Redirect::to('');
			}
			else
			{
				return View::make('layout.login');
				//return Hash::make('zhangji');
			}
			
		}

		public function postLogin()
		{
			$account = Input::get('account');
			$psw = Input::get('password');
			if(Auth::attempt(array('account' => $account, 'password' => $psw)))
			{
				return Redirect::to('/');
			}
			else
			{
				return "error";
			}
		}

		public function postRegister()
		{
			$account = Input::get('account');
			$res = DB::table('user') -> where('account',$account) -> get();
			if ($res)
			{
				return View::make('login');
			}

			$name = Input::get('name');
			$res = DB::table('user') ->where('name',$account) ->get();
			if ($res)
			{
				return View::make('login');
			}
			$password = Input::get('password');
			$team = Input::get('team'); //下拉列表

			$user = new  User;
			$user -> account = $account;
			$user -> name =  $name;
			$user -> password = Hash::make($password);
			$user -> team = $team;
			$user -> save();
			Redirect::to('login');
			/*$ur = array('account' => $account, 'name' => $name, 'password' => $password, 'team' => $team);
			$res = DB::table('user') -> insert($ur);*/
			//return View::make('login');		
		}

		public function showSpace()
		{

		}
		public function tryLogin()
		{
			$account = 'MacinChang';
			$psw = 'zhangji';
			if(Auth::attempt(array('account' => $account, 'password' => $psw)))
			{
				return Auth::user() -> name;
			}
			else
			{
				return Hash::make('zhangji');
			}
		}

		public function tryLogout()
		{
			Auth::logout();
			Redirect::to('/login');
		}
	}