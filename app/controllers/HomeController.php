<?php

class HomeController extends BaseController 
{
	protected $layout = 'layout.index';
	
	public function getIndex()
	{
		$pro_books = Book::orderBy('id', 'desc') -> take(5) -> get();
		$this -> layout -> propose_list = View::make('home') -> nest('content', 'a_recommendation', compact('pro_books'));
		$books = Book::orderBy('id', 'desc') -> paginate(4);
		$books -> getFactory() -> setViewName('pagination::slider');
		$this -> layout -> username = Auth::user() -> name;
		$this -> layout -> source = 'look';
		$this -> layout -> book_list = View::make('home') -> nest('content', 'a_book', compact('books'));
		$this -> layout -> search_result = 'No results!';
		$this -> layout -> borrow_record;
		
	}
	public function getSearch()
	{
		$searchItem = Input::get('wd');
		// $books = Book::select("SELECT * FROM book WHERE name LIKE '%$searchItem%' OR detail LIKE '%$searchItem%' ");
		$books = Book::whereRaw('name like ? or detail like ?',array('%'.$searchItem.'%','%'.$searchItem.'%')) -> paginate(100);
		$books -> getFactory() -> setViewName('pagination::slider');
		$search_result = View::make('home') -> nest('content', 'a_book', compact('books'));
		//$search_result = 'aaa' ;
		return $search_result;
	}

	public function getRecord()
	{
		$id = Auth::user() -> id;
		$r_id = Record::whereRaw('u_id', $id) -> paginate(100);
		$records = DB::table('record') -> join('user', 'record.u_id', '=', 'user.id') 
								   -> join('book', 'record.b_id', '=', 'book.id') ->where('id', $id) ->paginate(100);
		$records -> getFactory() -> setViewName('pagination:;slider');
		$borrow_record = View::make('home') -> nest('content', 'a_book', compact('records'));
		return $borrow_record;
	}

}
