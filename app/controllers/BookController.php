<?php
	class BookController extends BaseController
	{
		static public function addBook()
		{
			$this -> layout -> source = 'add';
			$book = new Book;
			$book -> name = Input::get('title');
			$book -> author = Input::get('name');
			$book -> press = Input::get('publisher');
			$book -> detail = Input::get('summary');
			$book -> image_url = Input::get('img');
			

			if((is_null($book -> name)||(is_null($book -> author))||(is_null($book -> press))||(is_null($book -> detail))||
					is_null($book -> image_url)))
			{
				$this -> layout -> states = 'Failed!';
			}
			else
			{
				$book -> save();
				$res =DB::table('book') -> where('name',$book -> name) -> get();
				if(!is_null($res)){
					$this -> layout -> states = 'Sucess!';
				}
				else{
					$this -> layout -> states = 'Failed!';
				}
			}
			
		}

		public function delBook()
		{
			
		}
	}