<?php
	class BookController extends BaseController
	{
		protected $layout = 'layout.showbook';

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

		public function showBook($b_id)
		{

			$book = DB::table('book') -> where('id', $b_id) -> first();
			$this -> layout -> book = $book;
		}
		public function borrowBook()
		{
			$b_id = Input::get('book_id');
			$res = Book::whereRaw('id', $b_id) -> get();
			foreach ($res as  $book){
				if ($book -> states != 0){
					return '暂时不能借';
				}
			}
			$record = new Record;
			$record -> u_id = Auth::user() -> id;
			$record -> b_id = $b_id;
			$record -> save();
			return '借书成功';
		}
		public function returnBook()
		{

		}

		public function getAdd()
		{
			$book = new Book;
			$book -> name = '算法导论';
			$book -> author = '张济';
			$book -> press = '科学出版社';
			$book -> detail='这是一本介绍算法的书';
			$book -> image_url = 'http://img5.douban.com/lpic/s1959967.jpg';
			$book -> save();
			$this -> layout -> result = 'success';
		}
	}