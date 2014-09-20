
<?php
	class UserController extends BaseController
	{
		protected $layout = 'layout.showuser';

		public function showLogin()
		{
			if(Auth::check())
			{
				Redirect::to('');
			}
			else
			{
				return View::make('login');
				//return Hash::make('zhangji');
			}
			
		}

		public function postLogin()
		{
			$account = Input::get('account');
			$password = Input::get('password');

			$tobeverified=[
				'account' => $account,
				'password' => $password
			];
			$rules=[
				'account' => 'required',
				'password' => 'required'
			];

			$validator = Validator::make($tobeverified,$rules);

			if ($validator -> passes())
			{
				if (Auth::attempt($tobeverified))
					return Redirect::to('/');
				return Redirect::to('login') -> withInput(Input::except('password')) -> with('failure','登录失败');
			}
			else
			{
				return Redirect::to('login');
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

		public function getLogout()
		{
			Auth::logout();
			return Redirect::to('login');
		}

		public function showSpace()
		{

		}
		public function tryLogin()
		{
			$name = 'MacinChang';
			$psw = 'zhangji';
			if(Auth::attempt(array('account' => $name, 'password' => $psw)))
			{
				return Auth::user() -> name;
			}
			else
			{
				return 'failed';
			}
		}

		public function tryLogout()
		{
			Auth::logout();
			if(Auth::check())
			{
				return '注销失败';
			}
			else
			{
				return '注销成功';
			}
		}
	}